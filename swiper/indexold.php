<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>投资记录</title>
    <link rel="stylesheet" href="/static/default/common/css/base.css">
    <link rel="stylesheet" href="/static/default/common/css/comfont.css">
    <link rel="stylesheet" href="/static/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="/static/default/css/newcss/investment.css?v=3.8">
    <script src="/static/flexibleJs/lib.flexible.js"></script>
    <script src="/static/jquery/jquery-1.11.1.min.js"></script>
    <script src="/static/swiper/js/swiper.min.js"></script>
</head>
<body>
<div class="flex-content">
    <div id="listcontent" class="list swiper-container">
        <div style="height: 0.96rem; z-index: 1;"></div>
        <ul class="titlebar clearfix f12 swiper-pagination">
            <li class="lf selected" data-name="syz">收益中</li>
            <li class="lf" data-name="mjz">募集中</li>
            <li class="lf" data-name="yhq">已还清</li>
        </ul>
        <div class="swiper-wrapper">
            <!--        收益中模板-->
            <div class="syz listBox swiper-slide">
                <div id="syzBox"></div>
                <div id="syzLoadmore" class="more f12"></div>
            </div>

            <!--        募集中模板-->
            <div class="mjz listBox swiper-slide">
                <div id="mjzBox"></div>
                <div id="mjzLoadmore" class="more f12"></div>
            </div>

            <!--        已还清模板-->
            <div class="yhq listBox swiper-slide">
                <div id="yhqBox"></div>
                <div id="yhqLoadmore" class="more f12"></div>
            </div>
        </div>
    </div>
</div>
<!--收益中js模板-->
<script id="syz-template" type="text/x-handlebars-template">
    {{#each data}}
    <div class="module">
        <a class="linktoDetial" href="/deal/deal/{{action}}?deal_id={{dealId}}">
            {{#if bidType}}
            <div class="title clearfix">
                <img class="lf" src="{{dealIcon}}" alt="">
                <p class="lf ctn maxwidth">{{title}}</p>
                <p class="rg"><span>•</span> {{refundMethod}}</p>
            </div>
            {{else}}
            <div class="title clearfix">
                <img class="lf" src="{{dealIcon}}" alt="">
                <span class="lf zhuanrang">转让</span>
                <p class="lf ctn">{{title}}</p>
                <p class="rg"><span>•</span> {{refundMethod}}</p>
            </div>
            {{/if}}
            <ul class="clearfix detialctn">
                <li class="lf">
                    <div class="f13">{{money}}元</div>
                    <div class="f11">投资金额</div>
                </li>
                <li class="lf">
                    <div class="f13 comred">{{lixi}}元</div>
                    <div class="f11">预期收益</div>
                </li>
                <li class="lf">
                    <div class="f13">{{qixian}}</div>
                    <div class="f11">到期时间</div>
                </li>
            </ul>
        </a>
        <div class="clearfix twolink">
            <a href="/deal/deal/get-refund?dealId={{dealId}}" class="lf">还款计划</a>
            <a href="" class="lf">查看合同</a>
        </div>
    </div>
    {{/each}}
</script>
<!--募集中js模板-->
<script id="mjz-template" type="text/x-handlebars-template">
    {{#each data}}
    <div class="module">
        <a class="linktoDetial" href="/deal/deal/{{action}}?deal_id={{dealId}}">
            <div class="title clearfix">
                <img class="lf" src="{{dealIcon}}" alt="">
                <!--                        <span class="lf zhuanrang">转让</span>-->
                <p class="lf ctn maxwidth">{{title}}</p>
                <p class="rg"><span>•</span> {{refundMethod}}</p>
            </div>
            <ul class="clearfix detialctn">
                <li class="lf">
                    <div class="f13">{{money}}元</div>
                    <div class="f11">投资金额</div>
                </li>
                <li class="lf">
                    <div class="f13 comred">{{schedule}}%</div>
                    <div class="f11">募集进度</div>
                </li>
                <li class="lf">
                    <div class="f13">{{qixian}}</div>
                    <div class="f11">投标时间</div>
                </li>
            </ul>
        </a>
    </div>
    {{/each}}
</script>
<!--已还清js模板-->
<script id="yhq-template" type="text/x-handlebars-template">
    {{#each data}}
    <div class="module">
        <a class="linktoDetial" href="/deal/deal/{{action}}?deal_id={{dealId}}">
            {{#if bidType}}
            <div class="title clearfix">
                <img class="lf" src="{{dealIcon}}" alt="">
                <p class="lf ctn maxwidth">{{title}}</p>
                <p class="rg"><span>•</span> {{refundMethod}}</p>
            </div>
            {{else}}
            <div class="title clearfix">
                <img class="lf" src="{{dealIcon}}" alt="">
                <span class="lf zhuanrang">转让</span>
                <p class="lf ctn">{{title}}</p>
                <p class="rg"><span>•</span> {{refundMethod}}</p>
            </div>
            {{/if}}
            <ul class="clearfix detialctn">
                <li class="lf">
                    <div class="f13">{{money}}元</div>
                    <div class="f11">投资金额</div>
                </li>
                <li class="lf">
                    <div class="f13 comred">{{lixi}}元</div>
                    <div class="f11">实际收益</div>
                </li>
                <li class="lf">
                    <div class="f13">{{qixian}}</div>
                    <div class="f11">还款时间</div>
                </li>
            </ul>
        </a>
        <div class="clearfix twolink">
            <a href="/deal/deal/get-refund?dealId={{dealId}}" class="lf">还款计划</a>
            <a href="" class="lf">查看合同</a>
        </div>
    </div>
    {{/each}}
</script>

<script src="/static/default/plugins/handlebars/handlebars.min.js"></script>
<script>
var module = {
        currentColumn:"",
        syz: {
            currentPage: 1,
            request: 'income',
            template: function(data){
                var temp = Handlebars.compile($("#syz-template").html());
                return temp(data);
            }
        },
        mjz : {
            currentPage: 1,
            request: 'runing',
            template: function(data){
                var temp = Handlebars.compile($("#mjz-template").html());
                return temp(data);
            }
        },
        yhq: {
            currentPage: 1,
            request: 'complate',
            template: function(data){
                var temp = Handlebars.compile($("#yhq-template").html());
                return temp(data);
            }
        },
        init: function (column) {
            this.currentColumn = column;
        },
        changeColumn: function (column) {
            this.currentColumn = column;
        },
        getData : function(){
            var name = $(this);
            $(name).html("加载中...").off("click");
            $.post("/user/invest/"+module[module.currentColumn].request,{currentPage:module[module.currentColumn].currentPage},function(data){
                if(data.more){
                    $(name).html("点击加载更多项目").click(module.getData);
                } else {
                    $(name).html("").off("click");
                }
                var html;
                if(data.dataSize == 0){
                    html = '<div class="noinvest"><img src="/static/default/images/newimages/usrcenter/noinvest.png" alt=""><p class="f14">暂无投资记录</p></div>'
                } else {
                    html = module[module.currentColumn].template(data);
                }
                console.log(data);
                $('#' + module.currentColumn + 'Box').append(html);
                module[module.currentColumn].currentPage += 1;
            },"json");
        }
    }

$(function(){

//        table切换
//    $(".titlebar li").on("click",function(){
//        var dataname = $(this).data("name");
//        module.changeColumn(dataname);
//        if(module[module.currentColumn].currentPage == 1){
//            $('#'+dataname+'Loadmore').trigger('click');
//        }
//        $(".titlebar li").removeClass("selected");
//        var index = $(this).index();
////        if(index ==0){
////            $(this).
////        }
//        $(this).addClass("selected");
////        $("#listcontent .listBox").hide();
////        $("."+dataname).show();
//    });

//    var initColumn = $(".titlebar .selected").data("name");
    module.init("syz");
    $("#syzLoadmore").click(module.getData).trigger("click");
    $("#mjzLoadmore,#yhqLoadmore").click(module.getData);
    //    滑动效果
    var swiper = new Swiper('.swiper-container', {
        speed:500,
        autoHeight: true,
//        height:'100%',
        pagination : '.swiper-pagination',
        paginationClickable :true,
//        onSlideChangeStart:function(){
//            $(".swiper-pagination span").eq(0).html("收益中");
//            $(".swiper-pagination span").eq(1).html("募集中");
//            $(".swiper-pagination span").eq(2).html("已还清");
//        },
        onSlideChangeEnd: function(swiper){
//            alert(swiper.activeIndex) //切换结束时，告诉我现在是第几个slide
            var index = swiper.activeIndex;
//            $(".titlebar li").removeClass("selected");
            if( index==0){
//                $(".titlebar li").eq(0).addClass("selected");
                module.changeColumn("syz");
//                autoHeight($(".syz"));
            } else if(index ==1){
                module.changeColumn("mjz");
                if(module[module.currentColumn].currentPage == 1){
                    $('#mjzLoadmore').trigger('click');
                }
//                $(".titlebar li").eq(1).addClass("selected");
//                autoHeight($(".mjz"));
            }else if(index ==2){
                module.changeColumn("yhq");
                if(module[module.currentColumn].currentPage == 1){
                    $('#yhqLoadmore').trigger('click');
                }
//                $(".titlebar li").eq(2).addClass("selected");
//                autoHeight($(".yhq"));
            }
        },
        paginationBulletRender: function (swiper) {
            var index = swiper.activeIndex;
            if(index==0){
                return '<span>收益中</span>';
            } else if(index==1){
                return '<span>募集中</span>';
            } else if(index==2){
                return '<span>已还清</span>';
            }
//            return '<span>收益中</span><span>募集中</span><span>已还清</span>';
        }
    });
//    $(".swiper-pagination span").eq(0).html("收益中");
//    $(".swiper-pagination span").eq(1).html("募集中");
//    $(".swiper-pagination span").eq(2).html("已还清");
});

    function autoHeight(obj){
        $(".swiper-wrapper,.swiper-container").height(obj.height());
        console.log(obj.height());
    }
</script>
</body>
</html>