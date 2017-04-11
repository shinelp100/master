var path = require('path')
// var utils = require('./utils')
// var config = require('../config')
// var vueLoaderConfig = require('./vue-loader.conf')

function resolve (dir) {
    return path.join(__dirname, '..', dir)
}

module.exports = {
    entry: {
        index:'./src/wap/index/js/main.js',
        user:'./src/wap/index/js/main.js',
    },
    output: {
        path: path.resolve(__dirname, "dist"), // string
        filename: '[name].js',
        publicPath: "/assets/",
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                loader: 'babel-loader',
                include: [
                    path.resolve(__dirname, "dist")
                ]
            }
        ]
    }
}
