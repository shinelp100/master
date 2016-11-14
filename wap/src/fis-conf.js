// fis.match('*.{js,css,png,gif,jpg}', {
//     useHash : true
// });

fis.match('**.html', {
    //发布到/disk/对应的目录下
    release: 'disk/$0'
});

// 所有的 js
fis.match('**.js', {
    optimizer: fis.plugin('uglify-js'),
    //发布到/disk/assets对应的目录下
    release: 'disk/assets/$0',
    url:'assets$0'
});

// 所有的 css
fis.match('**.css', {
    optimizer: fis.plugin('clean-css'),
    //发布到/disk/assets对应的目录下
    release: 'disk/assets/$0',
    url:'assets$0'
});

// 所有image目录下的.png，.gif文件
fis.match('**.png', {
    optimizer: fis.plugin('png-compressor'),
    //发布到/disk/assets对应的目录下
    release: 'disk/assets/$0',
    url:'assets$0'
});