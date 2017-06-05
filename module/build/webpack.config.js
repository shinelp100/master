const path = require('path'),
    webpack = require('webpack'),
    OpenBrowserPlugin = require('open-browser-webpack-plugin'),
    ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = function(env){
    let projectEntryFile = "active20170519/js/index.js";//env.app;
    // if(!false){console.log("我是测试的小伟吧"); return null;};
    return {
        //总入口文件
        cache: true,//开启webpack的cache(优化webpack打包速度)
        context: path.resolve(__dirname, "../src"),
        entry: [
            // 'webpack-dev-server/client',
            './' + projectEntryFile,
        ],
        output: {
            filename: '[name].js',
            path: path.resolve(__dirname, '../src/dist/js')
        },
        watch : true,
        watchOptions: {
            ignored: /node_modules/,
            poll: 1000
        },
        module: {
            rules: [
                {
                    test: /\.css$/,
                    exclude: path.resolve(__dirname, 'node_modules'),
                    include: path.resolve(__dirname,'../src/'),
                    use: ExtractTextPlugin.extract({
                        use: 'css-loader?minimize'
                    })
                },
                {
                    test: /\.js$/,
                    exclude: path.resolve(__dirname, 'node_modules'),
                    include: path.resolve(__dirname,'../src/'),
                    use: {
                        loader: 'babel-loader',
                        options: {
                            presets: ['env']
                        }
                    }
                },
                // {
                //     test: /\.html$/,
                //     exclude: /node_modules/,
                //     loader: 'html?minimize'
                // },
                {
                    test: /\.jpe?g$|\.gif$|\.png$/i,
                    loader: 'url-loader',
                    query:  { limit: 8192, name: './[name].[ext]' },
                }
            ]
},
        devServer: {
            port: 9000,
            contentBase: path.join(__dirname, "../src"),//本地服务器所加载的页面所在的目录
            hot: true,  //Live-reload 对应 'webpack/hot/dev-server'
            inline: true//实时刷新
        },
        plugins : [
            new OpenBrowserPlugin({
                url: 'http://localhost:9000'
            }),
        ]
        // plugins: [
        //  new webpack.optimize.CommonsChunkPlugin({
        //  names: ['vendor', 'manifest'] // 指定公共 bundle 的名字。
        //  }),
        //  new ExtractTextPlugin('wjf.css'),
        //  new webpack.optimize.UglifyJsPlugin()
        //  ]
    };
};

