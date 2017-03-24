<?php
//增加 特殊页面的 头设置功能 在config 里边配置想对应的设置就可以了
$module = $_GET['_module'];
$action = $_GET['_action'];
$id = $_GET['id'];
if ($module == 'dealNew') {
    $title = $deal['title'].'-理财产品-旺财谷';
} elseif ($module == 'news') {
    if ($action == 'show') {
        $title = $info['title'].'-媒体报道-旺财谷';
    } else {
        $title = '媒体报道-旺财谷';
    }
} else {
    $title = $sys[$module][$action][$id]['seoname']?$sys[$module][$action][$id]['seoname']:$seo.$sys['sitename'].' - '.$sys['seoname'];
}
$sys['keywords'] =  $sys[$module][$action][$id]['keywords']?$sys[$module][$action][$id]['keywords']:$sys['keywords'];
$sys['description'] =  $sys[$module][$action][$id]['description']?$sys[$module][$action][$id]['description']:$sys['description'];

if((int)$_SESSION['user_id'] > 0 ) {
    $growingioId=base64_encode(Crypto::encryptData((string)$_SESSION['user_id']));
}else{
    $growingioId='';
}
setcookie("growingioId",$growingioId);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="__TPL__Public/css/wcg-base.css?v=1.4"/>
    <link rel="stylesheet" href="__TPL__Public/css/ucenter/wcg-ucenter.css?v=1.35"/>
    <link rel="stylesheet" href="__TPL__Public/css/others/only_header_newstart.css?v=1.4"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{$title}</title>
    <link rel="shortcut icon" href="__TPL__Public/images/favicon.ico" type="imagend.microsoft.icon">
    <meta name="keywords" content="{$sys.keywords}"/>
    <meta name="description" content="{$sys.description}"/>
    <script src="__TPL__Public/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="__TPL__Public/js/jquery.superslide.2.1.1.js"></script>
    <?php if (isset($config['baidu_statistics_on']) && $config['baidu_statistics_on'] == true): ?>
        <script type="text/javascript">
            var _hmt = _hmt || [];
            (function () {
                var hm = document.createElement("script");
                hm.src = "//hm.baidu.com/hm.js?4055e306c334dc6ff85de00563a1907a";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>
        <script>
            var _hmt = _hmt || [];
            (function () {
                var hm = document.createElement("script");
                hm.src = "//hm.baidu.com/hm.js?b444db1412c38fe75fda44c00fe14bce";
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
        </script>
        <script type='text/javascript'>
            var _vds = _vds || [];
            window._vds = _vds;
            (function(){
                _vds.push(['setAccountId', 'bf4b8aa84d1e6227']);//_vds.push(['setAccountId', 'ab2faf46173c06b1']);
                console.log('growingioId-tag');
                (function() {
                    var strCookie=document.cookie;
                    var arrCookie=strCookie.split("; ");
                    for(var i=0;i<arrCookie.length;i++){
                        var arr=arrCookie[i].split("=");
                        if("growingioId"==arr[0] && arr[1].length >=1){
                            _vds.push(['setCS1', 'growingioId', arr[1]]);
                            console.log('setGrowingioId'+arr[1]);
                            break;
                        }
                    }
                    var vds = document.createElement('script');
                    vds.type='text/javascript';
                    vds.async = true;
                    vds.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'dn-growing.qbox.me/vds.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(vds, s);
                })();
            })();
        </script>
    <?php endif ?>
</head>
<body>
<?php if (isset($config['baidu_statistics_on']) && $config['baidu_statistics_on'] == true): ?>
    <script type="text/javascript">
        window._pt_lt = new Date().getTime();
        window._pt_sp_2 = [];
        _pt_sp_2.push('setAccount,1dbedb38');
        var _protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        (function() {
            var atag = document.createElement('script'); atag.type = 'text/javascript'; atag.async = true;
            atag.src = _protocol + 'js.ptengine.cn/1dbedb38.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(atag, s);
        })();
    </script>
<?php endif ?>
<!--header start-->
<div id="top-box">
    <div class="top-box">
        <div class="top-left">
            <span><a id="icon_phone" href="/zhuanti/show/id-13.html"><img class="icon_phone1" src="__TPL__Public/images/icon_phone.png" alt=""><img  class="icon_phone2" style="display: none;" src="__TPL__Public/images/icon_phone_01.png" alt=""> 下载手机App</a></span><i>|</i><span>客服热线：400-888-6268&nbsp;(工作日 9:00～18:00)</span>
        </div>
        <!--登陆前-->
        <div class="top-right" id="before-login">
            <!-- 签到抽奖按钮 -->
            <div id="choujiang-btn1" class="choujiang-btn">签到抽奖</div>
            <a href="/UserAccountMember/myVip" class="top-vip">VIP会员</a>
            <a href="__APP__/user/registershow">注册</a><i>|</i><a href="__APP__/user/loginshow">登录</a>
        </div>
        <!--登陆后-->
        <div class="top-login" id="after-login">
            <!-- 签到抽奖按钮 -->
            <div id="choujiang-btn2" class="choujiang-btn">签到抽奖</div>
            <a href="/UserAccountMember/myVip" class="top-vip">VIP会员</a>
            <div class="top-name">
                <a href="__APP__/UserAccount/index" id="user-name"></a>
                <a href="__APP__/UserAccount/message" id="msg-count"></a>
            </div>
            <i>|</i>
            <span>
				<a href="__APP__/user/logout.html" class="top-back">退出</a>
			</span>
        </div>

    </div>
    <!-- 抽奖弹出框 -->
    <div id="Overplay1" class="overplay1">
        <div class="choujiang-box">
            <div id="choujiang-close" class="choujiang-close">
                <img src="/template/default/Public/images/qiandao-x.png" alt="">
            </div>
            <img src="/template/default/Public/images/qiandao.png" alt="">
        </div>
    </div>
</div>
<!--header end-->
<!--nav start-->
<div id="nav-box">
    <div class="nav-box">
        <a href="/">
            <div class="logo">
                <img src="/upload/logo.gif" alt="">
            </div>
        </a>
        <div class="nav">
            <ul>
                <li><a  <?php if($index_nav_click): ?>  class="nav-click" <?php endif; ?>  href="__APP__/">首页</a></li>
                <li><a <?php if($deal_nav_click): ?>  class="nav-click" <?php endif; ?>href="__APP__/deal.html">我要理财</a></li>
                <li><a <?php if($help_nav_click || $_GET['_module'] == 'help'): ?>  class="nav-click" <?php endif; ?>href="__APP__/help.html">理财帮手</a></li>
                <li><a <?php if($safe_nav_click): ?>  class="nav-click" <?php endif; ?>href="__APP__/safe.html">安全保障</a></li>
                <li class="nav-last"><a <?php if($xszy_nav_click): ?>  class="nav-click" <?php endif; ?> href="/NewUser/index">新手引导</a></li>
                <!--<li class="nav-last">-->
                <!--<a href="<?=rtrim($config['BBS']['HostURL'],'/')?>">旺财社区</a>-->
                <!--<img class="beat" src="__TPL__Public/images/tendertransfer/bbs_icon.gif" alt="">-->
                <!--</li>-->
            </ul>
        </div>
    </div>
</div>
<script>
    //签到抽奖按钮
    ChouJiangCommon = function () {
        //1.获取
        var topBox = document.getElementById("top-box");
        var OverPlayS = document.getElementById("Overplay1");
        var ChoujiangBtn1 = document.getElementById("choujiang-btn1");
        var ChoujiangBtn2 = document.getElementById("choujiang-btn2");
        var CloseBtn = document.getElementById("choujiang-close");
        //2.动作
        ChoujiangBtn1.onclick = ChoujiangBtn2.onclick = function () {
            OverPlayS.style.display = 'block';
        }
        CloseBtn.onclick = function () {
            OverPlayS.style.display = 'none';
        }
    }
    ChouJiangCommon();
    //nav
    $('.nav li a').on('click', function () {
        var index = $('.nav li a').index(this);
        $('.nav li a').removeClass('nav-click');
        $('.nav li a').eq(index).addClass('nav-click');
    });
    $('#icon_phone').on('mouseover',function(){
        $('.icon_phone1').hide();
        $('.icon_phone2').show();
//        $(this).find('img').attr({src:'__TPL__Public/images/icon_phone_01.png'})
    });
    $('#icon_phone').on('mouseout',function(){
        $('.icon_phone2').hide();
        $('.icon_phone1').show();
//        $(this).find('img').attr({src:'__TPL__Public/images/icon_phone.png'})
    });

    $(function () {

        //初始化请求判断是否登陆
        $.post('__APP__/user/checkUserlogin', {}, function (data) {
            if (data.code == 0) {
                //已登录
                $('#before-login').hide();
                $('#after-login').show();
                $('#after-login #user-name').html(data.mobile);

                $('.banner-content-right1').hide();
                $('.banner-content-right2').show();
                $('#index-login-name').html(data.mobile);

                if (data.msg_count != 0) {
//					$('#after-login .top-name').css("padding-right","20px");
                    $('#after-login #msg-count').show().html(data.msg_count);
                } else {
//					$('#after-login .top-name').css("padding-right","0");
                    $('#after-login #msg-count').hide();
                }

            } else {
                //未登录
                $('#before-login').show();
                $('#after-login').hide();

                $('.banner-content-right1').show();
                $('.banner-content-right2').hide();
            }
        }, 'json');
    });
</script>
<!--nav end-->
<!--头部结束 -->
