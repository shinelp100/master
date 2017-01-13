/**
 * Created by lw on 2017/1/11.
 */
    //分页相关
var currentPage = 2;
var totalPage = tp;
var stop = true;
//自动加载分页数据
$(window).scroll(function () {
    //当内容滚动到底部时加载新的内容
    if ($(this).scrollTop() + $(window).height() + 20 >= $(document).height() && $(this).scrollTop() > 20) {
        //当前要加载的页码
        getPageList();
    }
});
function getPageList() {
    if (stop === true && currentPage <= totalPage) {
        stop = false;
        $(".load").html("正在加载...");
        param = {page: currentPage};
        $.ajax({
            type: 'GET',
            url: "/deal/deal/",
            data: param,
            dataType: 'json',
            success: function (data) {
                if (data.code === 0) {
                    //如果当前页和返回页码相同，则改变页面html,否则视为异常
                    if (currentPage === data.header.cp) {
                        if (data.html) {
                            $('#item-list').html($('#item-list').html() + data.html);
                            //页码＋1
                            currentPage = parseInt(data.header.cp) + 1;
                        } else {
//                                alert("暂无数据");
                        }
                    } else {
                        //异常,不做处理
                    }
                    //当前页大于总页数,隐藏加载更多提示(暂无数据时,tp为0)
                    if (currentPage >= data.header.tp) {
                        $(".load").hide();
                    } else {
                        $(".load").show();
                    }
                    //没有数据列表
                    if (data.header.tp === 0) {
                        //显示暂无数据视图
                        $(".nodata").show();
                    } else {
                        $(".nodata").hide();
                    }
                } else {
                    alert(data.message);
                }

                canvasToCircle();
            },
            complete: function () {
                stop = true;
                $(".load").html("加载更多");
            }
        });
    }
}