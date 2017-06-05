/**
 * Created by lw on 2017/5/5.
 */

/*多个target目标时生成对应文件*/
var path = require("path");
var webpack = require("webpack");

var app = {
    entry: {
        app:'./example/js/app.js'
    },
    output: {
        path: path.resolve(__dirname, "dist"),
        filename: "[name].js"
    },
    module:{
        rules : [
            {
                test: /\.js?$/,
                include: [
                    path.resolve(__dirname, "example")
                ],
                exclude: [
                    path.resolve(__dirname, "example/css")
                ],
                loader: "babel-loader"
            }
        ]
    }
};
var appTarget = {
    entry: {
        appTarget:'./example/js/appTarget.js'
    },
    output: {
        path: path.resolve(__dirname, "asset"),
        filename: "[name].js"
    }
};
module.exports = [app,appTarget];