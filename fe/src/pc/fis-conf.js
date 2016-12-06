// fis.match('*.{js,css,png,gif,jpg}', {
//     useHash : true
// });
var assetsRootPath ='/v2'
var wapAssetsRootPath = assetsRootPath+'/pc'

fis.match('**.html', {
    //发布到/disk/对应的目录下
    release: 'disk/pc/$0'
});

// 所有的 js
fis.match('**.js', {
    optimizer: fis.plugin('uglify-js'),
    //发布到/disk/v2对应的目录下
    release: 'disk'+wapAssetsRootPath+'/$0',
    url:wapAssetsRootPath+'$0'
});

// 所有的 css
fis.match('**.css', {
    optimizer: fis.plugin('clean-css'),
    //发布到/disk/v2对应的目录下
    release: 'disk'+wapAssetsRootPath+'/$0',
    url:wapAssetsRootPath+'$0'
});

// 所有image目录下的.png，.gif文件
fis.match('**.png', {
    optimizer: fis.plugin('png-compressor'),
    //发布到/disk/v2对应的目录下
    release: 'disk'+wapAssetsRootPath+'/$0',
    url:wapAssetsRootPath+'$0'
});

// libs 下文件
// fis.match('libs/**.*', {
//     //发布到/disk/v2对应的目录下
//     release: 'disk'+assetsRootPath+'/$0',
//     url:assetsRootPath+'$0'
// });