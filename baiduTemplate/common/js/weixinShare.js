/*微信接口开始*/
var winxinSahre = function (data) {
    wx.config({
        debug: false,
        appId: data.appid,
        timestamp: data.timestamp,
        nonceStr: data.noncestr,
        signature: data.signature,
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
    var local_search = window.location.search;
    var present_url;
    if(local_search.length===0){
        present_url = protocol + primary + data.pathname + '?yqcode='+data.yaoqingma;
    } else {
        if(local_search.indexOf('yqcode')===-1){
            present_url = protocol + primary + data.pathname + local_search + '&yqcode='+data.yaoqingma;
        } else {
            var local_searchChange = changeURLArg(window.location.search,"yqcode",data.yaoqingma);
            present_url = protocol + primary + data.pathname + local_searchChange;
        }
    }
    var src = getQueryString('src');

    if (!!src) {
        present_url += '&src=' + src;
    }
    wx.ready(function () {
        wx.onMenuShareTimeline({
            title: data.title, // 分享标题
            link: present_url, // 分享链接
            imgUrl: host_url + data.imgurl, // 分享图标
            desc: data.desc, // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
        wx.onMenuShareAppMessage({
            title: data.title, // 分享标题
            link: present_url, // 分享链接
            imgUrl: host_url + data.imgurl, // 分享图标
            desc: data.desc, // 分享图标
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
            title: data.title, // 分享标题
            link: present_url, // 分享链接
            imgUrl: host_url + data.imgurl, // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
        wx.onMenuShareWeibo({
            title: data.title, // 分享标题
            link: present_url, // 分享链接
            imgUrl: host_url + data.imgurl, // 分享图标
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

    function changeURLArg(url,arg,arg_val){
        var pattern=arg+'=([^&]*)';
        var replaceText=arg+'='+arg_val;
        if(url.match(pattern)){
            var tmp='/('+ arg+'=)([^&]*)/gi';
            tmp=url.replace(eval(tmp),replaceText);
            return tmp;
        }else{
            if(url.match('[\?]')){
                return url+'&'+replaceText;
            }else{
                return url+'?'+replaceText;
            }
        }
        return url+'\n'+arg+'\n'+arg_val;
    }
};