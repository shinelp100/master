/**
 * Created by lw on 2017/5/23.
 */


let env = {
    index : {
        input : "index/js/index.js",
        output : "dist/index",
        template :"index/index.html"
    },
    second : {
        input : "second/js/index.js",
        output : "dist/second",
        template :"second/index.html"
    },
    active20170524 : {
        input : "active/active20170524/js/index.js",
        output : "dist/active/active20170524",
        template :"active/active20170524/index.html"
    }
};
module.exports = env.index;