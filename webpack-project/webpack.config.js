const path = require('path');
const webpack = require('webpack');
module.exports = {
    context: path.resolve(__dirname, './app'),
    entry: {
        app: './app.js',
    },
    output: {
        path: path.resolve(__dirname, './public'),
        filename: '[name].bundle.js',
    },
    devServer: {
        contentBase: path.resolve(__dirname, './public'),  // New
    }
};