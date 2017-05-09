/**
 * Created by lw on 2017/5/5.
 */
var path = require("path");

var app = {
    entry: {
        app:'./example/js/app.js',
        appTarget:'./example/js/appTarget.js'
    },
    output: {
        path: path.resolve(__dirname, "dist"),
        filename: "[name].js"
    }
};
module.exports = app;