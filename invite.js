$(function(){
    $('.bottom-box .inv-title span').on('click',function(){
        var index=$('.bottom-box .inv-title span').index(this);
        $('.bottom-box .inv-title span').removeClass('selected');
        $('.invite-list').hide();
        $('.rule-box').hide();
        if(index==0){
            $('.bottom-box .inv-title span').eq(0).addClass('selected');
            $('.invite-list').show();
        }else if(index==1){
            $('.bottom-box .inv-title span').eq(1).addClass('selected');
            $('.rule-box').show();
        }
    });
    $('.invite-btn').on('click',function(){
        //判断域名,用以区别是否是app内嵌网页
        var protocol = window.location.protocol;
        var host = window.location.host.toLocaleLowerCase();
        if(host.substr(0,4)==='app.') {
            //分享四要素(标题+描述+链接地址+图标地址)
            var title = '好友送您50元代金券，温都金服理财，亲测靠谱！';
            var des = '新手专享，预期年化收益率10%，注册更有288元红包送！';
            var linkurl = invite_url;
            var thumurl = protocol+'//'+host+'/promo/1608/images/invite/icon.jpg';
            var shareObj = {title : title, des:des,linkurl : linkurl, thumurl : thumurl};
            if(browser.versions.ios || browser.versions.iPad || browser.versions.iPhone) {
                //苹果设备
                window.webkit.messageHandlers.share.postMessage(shareObj);
            } else if(browser.versions.android) {
                //android 设备,四个参数位置不可颠倒
                window.shareAction.share(title,des,linkurl,thumurl);
            } else {
                //其它
                $('.mark-box').show();
                $('.share-box').show();
            }
        } else {
            $('.mark-box').show();
            $('.share-box').show();
        }
    });
    $('.share-box').on('click',function(){
        $('.mark-box').hide();
        $('.share-box').hide();
    });
});
//判断终端类型(ios/android)
var browser={
    versions:function(){
        var u = navigator.userAgent, app = navigator.appVersion;
        return {//移动终端浏览器版本信息
            trident: u.indexOf('Trident') > -1, //IE内核
            presto: u.indexOf('Presto') > -1, //opera内核
            webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
            gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
            mobile: !!u.match(/AppleWebKit.*Mobile.*/)||!!u.match(/AppleWebKit/), //是否为移动终端
            ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
            android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
            iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
            iPad: u.indexOf('iPad') > -1, //是否iPad
            webApp: u.indexOf('Safari') == -1, //是否web应该程序，没有头部与底部
            weiXin: u.indexOf('MicroMessenger') > -1 ,
            weibo: u.indexOf('Weibo') > -1 ,
            qq: u.indexOf('QQ/') > -1 && (!!u.match(/AppleWebKit.*Mobile.*/)||!!u.match(/AppleWebKit/))
        };
    }(),
    language:(navigator.browserLanguage || navigator.language).toLowerCase()
};
