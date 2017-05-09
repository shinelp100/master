(function($){
    $.fn.tableUI = function(options){
        var defaults = {
            evenRowClass:"evenRow",
            oddRowClass:"oddRow",
            activeRowClass:"activeRow"
        }
        var options = $.extend(defaults, options);//合并多个对象为一个。这里就是，如果你在调用的时候写了新的参数，就用你新的参数，如果没有写，就用默认的参数。
        this.each(function(){
            //实现代码
        });
    };
})(jQuery);
