fis.match('*.{js,css,png,gif,less}', {
    useHash: true // 开启 md5 戳
});

fis.match('::packager', {
    // postpackager: fis.plugin('loader', {
    //     allInOne: true
    // }),
    spriter: fis.plugin('csssprites')
});

// 所有的 html
fis.match('**.html', {
    //发布到/static/js/xxx目录下
    release: '_Public_/html/static/default/demo/html$0',
    useMap: true//配置html的依赖文件
});

// 所有的 js
fis.match('**.js', {
    //发布到/static/js/xxx目录下
    release: '_Public_/static/default/demo/js$0',
    //访问url是/mm/static/js/xxx
    url: '/static/default/demo/js$0',
    optimizer: fis.plugin('uglify-js')
    // packTo: '/all.min.js'
});

// 所有的 json
fis.match('**.json', {
    //发布到/static/js/xxx目录下
    release: '_Public_/$0'
});
//less
fis.match('*.less', {
    parser: fis.plugin('less-2.x'),
    rExt: '.css',
    release: '_Public_/static/default/demo/css$0'
});
// 所有的 css
fis.match('*.{css,less}', {
    //发布到/static/css/xxx目录下
    release: '_Public_/static/default/demo/css$0',
    //访问url是/pp/static/css/xxx
    url: '/static/default/demo/css$0',
    optimizer: fis.plugin('clean-css'),
    // packTo: 'all.min.css',
    useSprite: true
});

// 所有image目录下的.png，.gif文件
fis.match('*.png', {
    //发布到/static/pic/xxx目录下
    release: '_Public_/static/default/demo/images$0',
    //访问url是/oo/static/baidu/xxx
    url: '/static/default/demo/images$0'
});
fis.match('/img/(*.png)', {
    optimizer: fis.plugin('png-compressor'),
    //发布到/static/pic/xxx目录下
    release: '_Public_/static/default/demo/images/$1$2',
    //访问url是/oo/static/baidu/xxx
    url: '/static/default/demo/images/$1$2'
});


// fis.media('debug').match('*.{js,css,png}', {
//     useHash: false,
//     useSprite: false,
//     optimizer: null
// })
// fis.match('*', {
//     deploy: fis.plugin('local-deliver', {
//         to: '/master/fis3/demo-simple/demo'
//     })
// })


/*
fis.match('::package', {
    postpackager: fis.plugin('loader', {
        allInOne: true
    })
});

fis.match('*.less', {
    parser: fis.plugin('less-2.x'),
    rExt: '.css',
    release: '_Public_/static/default/demo/css$0'
});
*/

fis.match('*', {
    // 设置 release 为 FALSE，不再产出此文件
    release: false
})

fis.match('{demo.js,}', {
    // 设置 release 为 FALSE，不再产出此文件
    release: '_Public_/static/default/demo/js$0'
})
fis.match('demo.html', {
    // 设置 release 为 FALSE，不再产出此文件
    release: '_Public_/html/static/default/demo/html$0'
})

fis.match('demo.html', {
    // 设置 release 为 FALSE，不再产出此文件
    release: '_Public_/html/static/default/demo/html$0'
})
// fis.match('*', {
//     deploy: fis.plugin('filter-packaged-file')
// });

//fis3 ftp发布工具，支持跳过未修改文件  fis3-deploy-ftp