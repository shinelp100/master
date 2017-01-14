/**
 * Created by lw on 2017/1/5.
 */
$(function(){
    FastClick.attach(document.body);
    module.init(0);

    $('.recomprogress').css({'transform':'rotate(90deg)', '-webkit-transform': 'rotate(90deg)', '-moz-transform':'rotate(90deg);'});
    $('.listhead ul li').on('click',function(){
        $('.listhead ul li span').removeClass('commonbtm');
        $(this).find('span').addClass('commonbtm');
        var cid = $(this).data('cid');
        module.init(cid);
    });
});

var module = {
    //页面初始化
    init : function(val){
        module.ajaxrequest(val);//进入页面加载列表首页
        module.moremessage(val);//下拉加载更多信息
        module.immedtinvest();//立即投资按钮
    },
    //立即投资按钮
    immedtinvest:function(){
        $('.immedtinvest').on('click',function(e){
            var e = e || window.event;
            e.preventDefault();
            var url = $(this).data('url');
            location.href = url;
        });
    },
    //滑动到底部刷新加载更过信息
    moremessage:function(cid){
        // var dH = $(document).height(),
        // cH = $(window).height();
        // $(window).scroll(function(){
        //     var scrollH = $(window).scrollTop();
        //     if(dH-cH == scrollH){
        //         module.ajaxrequest(cid);//下拉加载更多信息
        //         return;
        //     }
        // })
    },

    //ajax请求
    ajaxrequest : function(cid){
        $.ajax({
            type:'GET',
            url:'/api/deal/deal-list',
            data:{'pageIndex':10,'cid':cid},
            dataType: 'json',
            success: function(data){
                var arr = data.items;
                for(var i=0;i<arr.length;i++){

                }
            },
            error: function(xhr, type){

            }
        })
    }
};