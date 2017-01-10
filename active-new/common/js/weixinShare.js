function weixinshare(url,title,imgUrl,desc){
    /*微信接口开始*/
    wx.config({
        debug: false,
        appId: '<?php echo $signPackage["appid"];?>',
        timestamp: '<?php echo $signPackage["timestamp"];?>',
        nonceStr: '<?php echo $signPackage["noncestr"];?>',
        signature: '<?php echo $signPackage["signature"];?>',
        jsApiList: [
            // 所有要调用的 API 都要加到这个列表中
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo'
        ]
    });
    var protocol = window.location.protocol + '//';
    var primary = window.location.hostname;
    var host_url = protocol + primary;
    var src = getQueryString('src');

    var present_url = host_url + url;
    if(!!src) {
        present_url +='&src='+src;
    }
    wx.ready(function () {
        wx.onMenuShareTimeline({
            title: title, // 分享标题
            link: present_url, // 分享链接
            imgUrl: host_url + imgUrl, // 分享图标
            desc: desc, // 分享描述语
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
        wx.onMenuShareAppMessage({
            title: title, // 分享标题
            link: present_url, // 分享链接
            imgUrl: host_url + imgUrl, // 分享图标
            desc:desc, // 分享描述语
            type: '', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
        wx.onMenuShareQQ({
            title: title, // 分享标题
            link: present_url, // 分享链接
            imgUrl: host_url + imgUrl, // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
        wx.onMenuShareWeibo({
            title: title, // 分享标题
            link: present_url, // 分享链接
            imgUrl: host_url + imgUrl, // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });

    });
    function getQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]);
        //return null;
    }
}