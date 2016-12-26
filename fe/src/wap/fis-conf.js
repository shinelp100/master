// fis.match('*.{js,css,png,gif,jpg}', {
//     useHash : true
// });
var assetsRootPath ='v2/';
var wapAssetsRootPath = 'wap';
var baseUrl = '__FE_BASE_URI__';

fis.match('**.html', {
    //发布到/dist/对应的目录下
    release: 'dist/wap/$0'
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
    url:baseUrl+wapAssetsRootPath+'$0',
    standard: false
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
    standard: false,
    release: 'dist/'+assetsRootPath+'$0',
    url:baseUrl+'$0'
});

// common 下文件
fis.match('common/**.*', {
    //发布到/dist/v2对应的目录下
    optimizer:null,
    standard: false,
    release: 'dist/'+assetsRootPath+wapAssetsRootPath+'$0',
    url:baseUrl+'$0'
});

// libs 下文件
fis.match('res/**.*', {
    //发布到/dist/v2对应的目录下
    optimizer:null,
    standard: false,
    release: 'dist/'+assetsRootPath+'$0',
    url:baseUrl+'$0'
});

// 启用 fis-spriter-csssprites 插件 使用精灵图
fis.match('::package', {
    spriter: fis.plugin('csssprites',{
        scale: 1,
        layout: 'matrix',
        release:'/dist/v2/wap/memberlevel',
    }),
})

// 对 CSS 进行图片合并
fis.match('/memberlevel/css/index.css', {
    // 给匹配到的文件分配属性 `useSprite`
    useSprite: true,
    release: '/dist/v2/wap/$0',
    url:'$0',
});
// 对 html 进行图片合并
fis.match('/memberlevel/index.html', {
    release: '/dist/wap/$0',
    url:'$0',
});