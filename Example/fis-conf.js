// 所有的 html
fis.match('/html/(*.html)', {
    //发布到/static/js/xxx目录下
    release: 'WJF_PC_HTML/src/$0'
});

// 所有的 js
fis.match('/js/(*.js)', {
    optimizer: fis.plugin('uglify-js'),
    //发布到/static/js/xxx目录下
    release: 'WJF_PC_HTML/src/$0',
    //访问url是/mm/static/js/xxx
    url: '/static/default/Example/$0'
    // packTo: '/all.min.js'
});

// 所有的 css
fis.match('/css/(*.css)', {
    optimizer: fis.plugin('clean-css'),
    //发布到/static/css/xxx目录下
    release: 'WJF_PC_HTML/src/$0',
    //访问url是/pp/static/css/xxx
    url: '/static/default/Example/$0'
    // packTo: 'all.min.css',
    //useSprite: true
});

fis.match('/images/(*.png)', {
    optimizer: fis.plugin('png-compressor'),
    //发布到/static/pic/xxx目录下
    release: 'WJF_PC_HTML/src/$0',
    //访问url是/oo/static/baidu/xxx
    url: '/static/default/Example/$0'
});

// fis.match('**.html', {
//     postprocessor: fis.plugin('href-locate',{})
// })
//
// fis.match('*.js', {
//     postprocessor: fis.plugin('replace', {
//         files: [
//             {
//                 path: "/www/baidu.com",
//                 rule:{
//                     '{api-url}|i': 'baidu.com',
//                     '{api-u}':'GET'
//                 }
//             }
//         ]
//     })
// })