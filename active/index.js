
/**
 * Created by lw on 2016/11/25.
 */
$(function(){
    $('.title li').on('click',function(){
        $('.title li').removeClass('tl-actvie');
        $(this).addClass('tl-actvie');
        $('.award ul').hide();
        var i =parseInt($(this).data('count'))-1;
        $('.award ul').eq()i.show();
    })
});
