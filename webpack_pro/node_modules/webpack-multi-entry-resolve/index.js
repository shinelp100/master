var $path = require('path');
var $mock = require('mockjs');
var $walkSync = require('walk-sync');
var $assign = require('lodash/assign');
var $htmlWebpackPlugin = require('html-webpack-plugin');

function makeArray(item) {
	if (Array.isArray(item)) {
		return item;
	} else if (item) {
		return [item];
	} else {
		return;
	}
}
function multiEntryResolve(webpackConfig, options) {

	var conf = $assign({

		// 开启调试模式，会打出日志
		debug: false,

		// 入口文件路径
		path: 'entry',

		// 入口文件筛选
		globs: '**/*.js',

		// 引用的公共文件
		global: [],

		// 是否自动追加 js entry
		autoChunks: true,

		// 项目根目录
		root: process.cwd(),

		// html 文件选项
		html: null,

		// mock 文件选项
		mock: null,

		// htmlWebpackPlugin 的配置
		htmlWebpackPlugin: {}
	}, options);

	var htmlConf = $assign({
		output: 'html',
		path: '',
		globs: '**/*.{htm,html,jade,pug,ejs,pug,handlebar,handlebars}'
	}, conf.html);

	var mockConf = $assign({
		path: '',
		globs: '**/*.js'
	}, conf.mock);

	if (conf.debug) {
		console.log('conf:\n', conf);
		console.log('htmlConf:\n', htmlConf);
		console.log('mockConf:\n', mockConf);
	}

	var includes = [];

	var targetPath = conf.path;

	var files = $walkSync(targetPath, {
		directories: false,
		globs: makeArray(conf.globs)
	});

	if (conf.debug) {
		console.log('\nfiles:');
		console.log(files);
	}

	var getEntryKey = function(path) {
		var extname = $path.extname(path);
		var key = $path.relative(targetPath, path);
		key = key.replace(new RegExp(extname + '$'), '');
		return key;
	};

	var getEntryVal = function(path) {
		var extname = $path.extname(path);
		var val = $path.relative(conf.root, path);
		val = val.replace(new RegExp(extname + '$'), '');
		return './' + val;
	};

	// 获取html模板文件列表
	var htmlFileMap = null;

	if (htmlConf.path) {
		htmlFileMap = {};
		var htmlFiles = $walkSync(htmlConf.path, {
			directories: false,
			globs: makeArray(htmlConf.globs)
		});

		htmlFiles.forEach(function(file) {
			var extname = $path.extname(file);
			var basePath = $path.join(
				$path.dirname(file),
				$path.basename(file, extname)
			);
			htmlFileMap[basePath] = file;
		});
	}

	if (conf.debug) {
		console.log('\nhtmlFileMap:');
		console.log(htmlFileMap);
	}

	// 获取mock文件列表
	var mockMap = null;
	if (mockConf.path) {
		mockMap = {};

		var mockFiles = $walkSync(mockConf.path, {
			directories: false,
			globs: makeArray(mockConf.globs)
		});

		mockFiles.forEach(function(file) {
			var extname = $path.extname(file);
			var basePath = $path.join(
				$path.dirname(file),
				$path.basename(file, extname)
			);
			mockMap[basePath] = file;
		});
	}

	if (conf.debug) {
		console.log('\nmockMap:');
		console.log(mockMap);
	}

	// 遍历入口文件列表配置 webpack
	files.forEach(function(path) {
		path = $path.resolve(targetPath, path);
		var key = getEntryKey(path);
		var val = getEntryVal(path);
		includes.push(key);

		if (!Array.isArray(webpackConfig.entry)) {
			webpackConfig.entry[key] = val;
		} else {
			webpackConfig.entry.push(val);
		}

		if (!htmlFileMap) {
			return;
		}

		if (conf.htmlWebpackPlugin === false) {
			return;
		}

		// 如果有对应的html模板文件，则添加入口文件所匹配的模板
		if (htmlFileMap[key]) {
			var htmlWebpackPluginOptions = $assign({
				// js插入的位置，true/'head'/'body'/false
				inject: 'body',
				// 为静态资源生成hash值
				hash: false,
				// 需要引入的chunk，不配置就会引入所有页面的资源
				chunks: [],
				// 配置 chunksSortMode 为 none 以确保JS按照 chunks 里面的顺序加载
				chunksSortMode: 'none',
				// 压缩HTML文件
				minify: false
			}, conf.htmlWebpackPlugin);

			// favicon路径，通过webpack引入同时可以生成hash值
			// favicon: './src/img/favicon.ico',
			// 生成的html存放路径，相对于path
			htmlWebpackPluginOptions.filename = $path.join(htmlConf.output, key + '.html');

			// html模板路径
			htmlWebpackPluginOptions.template = $path.join(htmlConf.path, htmlFileMap[key]);

			// 默认自动追加 entry 文件
			if (conf.autoChunks) {
				if (Array.isArray(conf.global)) {
					Array.prototype.push.apply(htmlWebpackPluginOptions.chunks, conf.global);
				}
				htmlWebpackPluginOptions.chunks.push(key);
			}

			// 获取 mock 数据
			if (mockMap && mockMap[key]) {
				var mockFile = $path.join(mockConf.path, mockMap[key]);
				mockFile = $path.resolve(mockFile);

				var mockData = require(mockFile);
				mockData = $mock.mock(mockData);
				htmlWebpackPluginOptions.mock = mockData;
			}

			if (conf.debug) {
				console.log('\n---- htmlWebpackPluginOptions:', key);
				console.log(htmlWebpackPluginOptions);
			}

			webpackConfig.plugins.push(
				// HtmlWebpackPlugin，模板生成相关的配置，每个对于一个页面的配置，有几个写几个
				new $htmlWebpackPlugin(htmlWebpackPluginOptions)
			);
		}

	});

	webpackConfig.context = conf.root;

	return webpackConfig;

}

module.exports = multiEntryResolve;
