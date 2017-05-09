/**
 * Created by lw on 2017/5/5.
 */
var path = require("path");
var webpack = require("webpack");
var webpackMerge = require('webpack-merge');

var baseConfig = {
    target: "async-node",
    entry: './example/js/app.js',
    output: {
        path: path.resolve(__dirname, "dist"),
        filename: "[name][id].js"
    },
    plugins: [
        new webpack.optimize.CommonsChunkPlugin({
            name: "inline",
            filename: "inline.js",
            minChunks: Infinity
        }),
        new webpack.optimize.AggressiveSplittingPlugin({
            minSize: 5000,
            maxSize: 10000
        }),
    ]
};

let targets = ['web', 'webworker', 'node', 'async-node', 'node-webkit', 'electron-main'].map((target) = > {
        let base = webpackMerge(baseConfig, {
            target: target,
            output: {
                path: path.resolve(__dirname, 'dist/' + target),
                filename: '[name].' + target + '.js'
            }
        });
return base;
})
;

module.exports = targets;

/*
 module.exports = {
 entry: './example/js/app.js',
 output: {
 path: path.resolve(__dirname, "dist"),
 filename: "[name].js"
 }
 };*/
