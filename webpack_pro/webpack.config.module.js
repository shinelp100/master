/**
 * Created by lw on 2017/5/22.
 */
const path = require("path"),
    fs = require('fs'),
    webpack = require('webpack'),
    OpenBrowserPlugin = require('open-browser-webpack-plugin'),
    HtmlWebpackPlugin = require("html-webpack-plugin"),
    ExtractTextPlugin = require('extract-text-webpack-plugin'),
    WebpackMd5Hash = require('webpack-md5-hash'),
    glob = require('glob'),
    webpackMultiEntryResolve = require('webpack-multi-entry-resolve');
var root = path.resolve(__dirname);

var webpackConfig = {
    //cache: true,//开启webpack的cache(优化webpack打包速度)
    entry: {},
    output: {
        filename: '[name].js',
        path: path.join(root, 'dist'),
        chunkFilename: 'chunk/[id].chunk.js',
        publicPath: '/dist/'//指定静态资源的url路径前缀(相对于发布的html)
    },
    //server 配置
    devServer: {
        //也就是http://localhost:8080 等价于 http://localhost:8080/dist
        contentBase: path.join(__dirname, "./dist"),   //对应启动npm run build 发布目录
        hot: true, //Live-reload 对应 'webpack/hot/dev-server'
        inline: true,
        port: 8080,
        host: '0.0.0.0',
        compress: false,
        // 指定index.html文件的url路径
        /*historyApiFallback: {
         index: '/assets/'
         }*/
        // lazy: false,
        // clientLogLevel: 'warning',                     //none, error, warning or info
        // publicPath: '/',
    },
    // watch: true,
    // devtool: 'inline-source-map',
    plugins: [
        // new HtmlWebpackPlugin({
        //     // filename: 'index.html',//发布后的文件名及路径
        //     // template: evn.template,//指定你的html作为模板
        // }),
        new OpenBrowserPlugin({
            url: 'http://localhost:8080'//自动打开浏览器插件配置打开的地址
        }),
        new ExtractTextPlugin({
            filename: 'app.css',//独立打包css文件的文件名
            disable: false,
            allChunks: true,
        }),
        // new webpack.optimize.UglifyJsPlugin(),
        new WebpackMd5Hash(),
        // new webpack.optimize.CommonsChunkPlugin('vendor', 'vendor.js'),
    ],
    module: {
        rules: [
            {
                test: /\.html$/,
                use: ["html-loader"]//?minimize 压缩html代码
            },
            {
                test: /\.jpe?g$|\.gif$|\.png$/i,
                loader: 'url-loader',
                query: {limit: 8192, name: '[name].[ext]'},
            },
            //外置样式打包
            {
                test: /\.css/,
                use: ExtractTextPlugin.extract({
                    fallback: "style-loader",
                    use: [
                        'css-loader?minimize',
                        'autoprefixer-loader?{browsers:["Android >= 4.0", "ios >= 8.0","last 2 version", "> 1%"]}',
                    ],
                    publicPath: "__Public__/second/",//配置css文件中资源路径
                }),
            },
            {
                test: /\.less$/,
                use: ExtractTextPlugin.extract({
                    fallback: "style-loader",
                    use: [
                        'css-loader?minimize',
                        'autoprefixer-loader?{browsers:["Android >= 4.0", "ios >= 8.0","last 2 version", "> 1%"]}',
                        'less-loader',
                    ],
                }),
            },
            {
                test: /\.(js|jsx)$/,
                loader: 'babel-loader',
                exclude: /node_modules/
            }
        ]
    }
};

webpackMultiEntryResolve(webpackConfig, {
    root: root,
    path: path.join(root, 'src'),
    globs: '**/*.js',
    html: {
        path: path.join(root, 'src'),
    }
});

module.exports = webpackConfig;