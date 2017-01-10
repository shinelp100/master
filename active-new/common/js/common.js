var moduleFn = {
    //获取url后的参数
    getParameter: function (name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]);
        return null;
    },
    //非数字的清除
    clearNonum: function (obj) {
        var shares = obj.val(), reg = /^\d+$/;
        if (!reg.test(shares)) {
            var input = obj.val();
            var regz = /[^\d]/g;
            shares = input.replace(regz, "");
            obj.val(shares);
        }
    },
    //手机号 中奖名单 循环轮播  (wap页面单位rem  传入的对象是jq或是zepto对象)
    carousel: function (height, obj) {
        setInterval(function () {
            obj.eq(0).animate({"margin-top": "-" + height + "rem"}, 1000, function () {
                $(this).css({"margin-top": 0});
                $(this).appendTo(obj.parent());
            });
        }, 2000);
    },
    //旺财谷app判断是否是苹果设备（如果是去掉标志 “***与苹果公司无关”）
    removeAndroidtips: function () {
        var uaString = navigator.userAgent;
        var ownBrowser = [[/(WcgA.*?)\/([\w\.]+)/i], [UAParser.BROWSER.NAME, UAParser.BROWSER.VERSION]];
        var parser = new UAParser(uaString, {browser: ownBrowser});
        var browserName = parser.getBrowser().name.toLowerCase();
        if (!!browserName) {
            if (browserName === 'wcgapple') {
                return true;
            }
        }
    },
    //判断是手机浏览器类型
    parseUA:function() {
    var u = navigator.userAgent;
    var u2 = navigator.userAgent.toLowerCase();
    return { //移动终端浏览器版本信息 
            trident: u.indexOf('Trident') > -1, //IE内核 
            presto: u.indexOf('Presto') > -1, //opera内核 
            webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核 
            gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核  
            mobile: !!u.match(/AppleWebKit.*Mobile.*/), //是否为移动终端 
            ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端  
            android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或uc浏览器 
            iPhone: u.indexOf('iPhone') > -1, //是否为iPhone或者QQHD浏览器 
            iPad: u.indexOf('iPad') > -1, //是否iPad 
            webApp: u.indexOf('Safari') == -1, //是否web应该程序，没有头部与底部 
            iosv: u.substr(u.indexOf('iPhone OS') + 9, 3), 
            weixin: u2.match(/MicroMessenger/i) == "micromessenger",//微信浏览器 
            ali: u.indexOf('AliApp') > -1 ,//阿里的软件 
            wcgiphone: u.indexOf('WcgApp') > -1 ,
            wcgandroid: u.indexOf('wcgAndroid') > -1,//android wcg app
            qq: u2.indexOf('qqbrowser') > -1,//的软件 
            qq2: u2.match(/QQ/i) == 'qq', 
            e360e: u2.indexOf('360ee') > -1, 
            s360e: u2.indexOf('360se') > -1, 
            aoyou: u2.indexOf('aoyou') > -1, 
            baidu: u2.indexOf('baidu') > -1 
        } 
    },
    //验证手机号码等
    check: {
        mobile: function (s) {
            return /^1\d{10}$/.test(s);
        },
        email: function (s) {
            return /^([a-z0-9][a-z0-9_\-\.]*)@([a-z0-9][a-z0-9\.\-]{0,20})\.([a-z]{2,4})$/i.test(s);
        },
        idcard: function (s) {
            return /^\d{15}(\d{2}(\d|x))?$/i.test(s);
        }
    },


}
