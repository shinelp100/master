/**
 * Created by lw on 2016/12/7.
 */
$(function () {
    FastClick.attach(document.body);
    var len = $('.people ul li').length;
    if (len > 3) {
        lunBo();
    }
    $('.btest').on('click', function () {
        $('.mask').show();
        var classNmae = $(this).data('value');
        $('.' + classNmae).show();
        if(classNmae == 'drawgift'){
            flag=true;
        }
       $('body').on('touchmove', eventTarget, false);
    });

    $('.mask,.closepop').on('click', function () {
        $('.pop').hide();
        $('.mask').hide();
        if(isRefresh){
            if(location.href.indexOf('?') == -1){
                window.location.href = window.location.href +"?v="+ Math.random()*10;
            } else {
                window.location.href = window.location.href +"&v="+ Math.random()*10;
            }


        }
        $('body').unbind('touchmove');
    });
    var scrollTop = $('header').height() + $('#activereg').height()+5;
    $('.step1 a,.step2 a').on('click',function(){
        $('body').animate({"scrollTop":scrollTop+'px'},1000);
    })
    $('.drawgift a').on('click',function(){
        if(location.href.indexOf('?') == -1){
            window.location.href = window.location.href +"?v="+ Math.random()*10;
        } else {
            window.location.href = window.location.href +"&v="+ Math.random()*10;
        }
    });
    $('.nodrawgift a').on('click',function(){
        $('.pop').hide();
        $('.mask').hide();
        $('body').unbind('touchmove');
    })
});

function lunBo() {
    var liH = 0.693;
    var ts = setInterval(function () {
        $('.people ul li').eq(0).animate({"margin-top": "-" + liH + "rem"}, 1000, function () {
            $(this).css({"margin-top": 0});
            $(this).appendTo($('.people ul'));
        });
    }, 2000);
}

function eventTarget(event) {
    event.preventDefault();
}

var initScroll = function () {
    var myScroll;
    intervalTime = setInterval(function () {
        var resultContentH = $("#giftBox ul").height();
        if (resultContentH > 0) {  //判断数据加载完成的条件
            clearInterval(intervalTime);
            myScroll = new iScroll('giftBox',{
                vScrollbar:false
            });
        }
    }, 1);
}