// fis.match('*.{js,css,png,gif,jpg}', {
//     useHash : true
// });
var assetsRootPath ='v2/';
var wapAssetsRootPath = 'wap';
var baseUrl = '__FE_BASE_URI__';

fis.match('**.html', {
    //发布到/dist/对应的目录下
    release: 'dist/wap/$0',
});

// 所有的 js
fis.match('**.js', {
    optimizer: fis.plugin('uglify-js'),
    //发布到/dist/v2对应的目录下
    release: 'dist/'+assetsRootPath+wapAssetsRootPath+'/$0',
    url:baseUrl+wapAssetsRootPath+'$0'
});

// 所有的 css
fis.match('**.css', {
    optimizer: fis.plugin('clean-css'),
    //发布到/dist/v2对应的目录下
    release: 'dist/'+assetsRootPath+wapAssetsRootPath+'/$0',
    url:baseUrl+wapAssetsRootPath+'$0'
});

// 所有image目录下的.png，.gif文件
fis.match('**.{png,jpg,gif,jpeg}', {
    optimizer: fis.plugin('png-compressor'),
    //发布到/dist/v2对应的目录下
    release: 'dist/'+assetsRootPath+wapAssetsRootPath+'/$0',
    url:baseUrl+wapAssetsRootPath+'$0'
});

// libs 下文件
fis.match('libs/**.*', {
    //发布到/dist/v2对应的目录下
    optimizer:null,
    release: 'dist/'+assetsRootPath+'$0',
    standard: false,
    url:baseUrl+'$0'
});