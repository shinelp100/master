// 启用 fis-spriter-csssprites 插件
fis.match('::package', {
    spriter: fis.plugin('csssprites',{
        scale: 0.5,
        layout: 'matrix',
        release:'/active/$0',
    }),
})

// 对 CSS 进行图片合并
fis.match('*.css', {
    // 给匹配到的文件分配属性 `useSprite`
    useSprite: true,
    release: '/active/$0',
    url:'$0',
});
// 对 html 进行图片合并
fis.match('*.{html,js}', {
    release: '/active/$0',
    url:'$0',
});