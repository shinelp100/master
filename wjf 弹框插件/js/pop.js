var poptpl = {
    popComponent : function (options,callback){
        var defaults = {
            /*pop框配置信息*/
            popBackground : "#fff0b7",
            popBorder: "0.10666667rem solid #f9c404",

            /*关闭按钮*/
            closeHas : true,
            closeUrl : "img/pop_close.png",
            closeTop:"-1.06666667rem",
            closeLeft:"-0.15rem",

            /*pop头部*/
            popTopHas :true,
            /*是否有图片*/
            popTopHasImg : false,
            popTopImg : "img/invite.png",
            /*是否有title*/
            popTopHasDiv : true,
            popTopColor : " #fe5a00",
            popTopFontSize : "0.48rem",
            title : "请输入领取的手机号码",

            /*pop中部*/
            popMiddleHas :true,
            /*是否显示input文本框*/
            popMiddleHasInput : true,

            /*是否显示中间的文字*/
            popMiddleHasDiv : false,
            popMiddleColor : "#333",
            popMiddleFontSize : "0.37777777rem",
            contentMsg:"我是弹框的中间自定义内容",

            /*pop尾部*/
            popBtmHas :true,
            popBtmWidth:"3.06666667rem",
            popBtmColor : " #fff",
            popBtmBackground : "#d84b25",
            popBtmFontSize : "0.48rem",
            btnMsg : "确定",
            popBtmBorderRadius: "1rem",
            btnHref : "javascript:void(0);",
            beforePop : function(){},
            afterPop : function () {},
        };

        var options = $.extend(defaults, options),html;
        html = '<div class="mask"></div>'
            +'<div class="pop" style="background: '+options.popBackground+';border:'+options.popBorder+';">'
        if(options.closeHas){
            html+='<img class="popClose" src='+options.closeUrl+' alt="图" style="top: '+options.closeTop+';right: '+options.closeLeft+';">'
        }
        if(options.popTopHas){
            html+='<div class="popTop">';
            if(options.popTopHasImg){
                html+= '<img src='+options.popTopImg+' alt="图">'
            }
            if(options.popTopHasDiv){
                html+= '<div class="popTitle" style="color: '+options.popTopColor+';font-size: '+options.popTopFontSize+';">'+options.title+'</div>';
            }
            html +='</div>';
        };
        if(options.popMiddleHas){
            html+='<div class="popMiddle">';
            if(options.popMiddleHasInput){
                html+='<input type="tel" placeholder="请输入手机号码" maxlength="11" onkeypress="if ((event.keyCode<48 || event.keyCode>57)) event.returnValue=false"><div class="popError"></div>'
            }
            if(options.popMiddleHasDiv){
                html+= '<div class="popMiddleCtn" style="color: '+options.popMiddleColor+';font-size: '+options.popMiddleFontSize+';">'+options.contentMsg+'</div>'
            };
            html+='</div>';
        };
        if(options.popBtmHas){
            html+='<a href='+options.btnHref+' class="popBtm" style="width:'+options.popBtmWidth+' ;background:'+options.popBtmBackground+';border-radius:'+options.popBtmBorderRadius+' ;color:'+options.popBtmColor+';font-size:'+options.popBtmFontSize+' ;">'+options.btnMsg+'</a>'
        };
        html+='</div>';
        $('body').on("click",function(){
            if($(event.target).hasClass('popClose')){
                poptpl.confirmBtn();
                options.afterPop();
            };
        });
        if(typeof(callback) ==="function" && callback && options.btnHref == "javascript:void(0);"){
            $('body').on("click",function(e){
                e.stopPropagation();
                if($(event.target).hasClass('popBtm')){
                    /*回调函数要返回一个布尔值来判断对话框是否隐藏*/
                    callback();
                };
            });
        } else if(callback === "close"){
            $('body').on("click",function(e){
                e.stopPropagation();
                if($(event.target).hasClass('popBtm')){
                    poptpl.confirmBtn();
                    options.afterPop();
                };
            });
        };
        options.beforePop();
        $('body').append(html).on('touchmove', poptpl.eventTarget, false);
    },
    confirmBtn : function(){
        $('body').off('click');
        $(".mask,.pop").remove();
        $('body').off('touchmove');
    },
    errorMsg: function (error) {
        $('.popError').html(error);
    },
    eventTarget : function (event) {
        var event = event || window.event;
        event.preventDefault();
    }
};
