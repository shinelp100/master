# webpack-multi-entry-resolve
webpack多入口文件处理

## Getting Started

```shell
npm install webpack-multi-entry-resolve --save-dev
```

__examples__

```js
//webpack.config.js

var $fs = require('fs');
var $path = require('path');

var $webpack = require('webpack');
var $webpackMultiEntryResolve = require('webpack-multi-entry-resolve');

var root = $path.resolve(__dirname);

var webpackConfig = {
	entry: {},
	output: {
		path: $path.join(root, 'dist'),
		publicPath: '',
		filename: 'js/[name].js',
		chunkFilename: 'js/chunk/[id].chunk.js'
	},
	module: {
		loaders: []
	},
	plugins: []
};

$webpackMultiEntryResolve(webpackConfig, {
	root: root,
	path: $path.join(root, 'entry'),
	globs: '**/*.js'
});

module.exports = webpackConfig;

```

## options

#### options.debug

Type: `Boolean`

Default: false

是否为调试模式，开启调试模式会在控制台输出流程数据

#### options.root

Type: `String`

Default: process.cwd()

项目打包目录根路径

#### options.path (__required__)

Type: `String`

Default: 'entry'

项目打包入口文件夹路径

#### options.globs

Type: `String` | `Array`

Default: '**/*.js'

项目打包入口文件选择器，参见 walk-sync 的 globs 选项

#### options.global

Type: `Array`

Default: []

公共文件 entry 名称，会插入到 htmlWebpackPlugin.options.chunks

#### options.html

Type: `Object`

html模板文件选项，用于配置htmlWebpackPlugin

html模板文件和入口文件，其相对path的路径应该一一对应

```js
$webpackMultiEntryResolve(webpackConfig, {
	root : root,
	path : $path.join(root, 'entry'),
	html : {
		path : $path.join(root, 'pages')
	}
});
```

#### options.html.output

Type: `String`

Default: 'html'

html模板的输出路径，默认为 'html'

#### options.html.path

Type: `String`

Default: ''

html模板文件所在路径

#### options.html.globs

Type: `String`

Default: '**/*.{htm,html,jade,pug,ejs,pug,handlebar,handlebars}'

用于筛选 html 模板文件

#### options.autoChunks

Type: `Boolean`

Default: true

是否自动追加 entry file 到 htmlWebpackPlugin.options.chunks

#### options.mock

Type: `Object`

配置模拟数据的选项，mock数据会被加载 htmlWebpackPlugin.options.mock

模拟文件和入口文件，其相对path的路径应该一一对应

#### options.mock.path

Type: `String`

Default: ''

模拟数据文件所在路径

#### options.mock.globs

Type: `String`

Default: '**/*.js'

用于筛选模拟数据文件

#### options.htmlWebpackPlugin

Type: `Object`

Default: {}

用于配置 htmlWebpackPlugin 的公共选项

## Release History

 * 2017-04-17 v0.2.5 通过 mockjs 渲染 mock 数据
 * 2017-03-24 v0.2.4 完善默认配置
 * 2017-03-24 v0.2.3 添加选项 autoChunks
 * 2017-02-06 v0.2.2 允许配置 htmlWebpackPlugin 公共选项
 * 2017-02-04 v0.2.1 修正未能引用到外部 mock entry file 的问题
 * 2017-01-24 v0.2.0 变更选项参数名称，引入mock数据管理
 * 2016-12-13 v0.1.5 修正 windows 环境下未能正确识别html路径的问题
 * 2016-11-16 v0.1.4 引入 html.templateGlobs 选项，可配置 html 文件类型，添加项目单元测试
 * 2016-11-07 v0.1.3 引入 entryGlobs 选项，方便过滤入口文件
 * 2016-11-03 v0.1.2 支持 pug 等模板引擎
 * 2016-11-02 v0.1.1 实现与 htmlWebpackPlugin 的匹配
 * 2016-10-08 v0.1.0 发布第一个正式版



