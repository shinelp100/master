/**
 * Created by lw on 2016/11/11.
 */
//main.js

// require([module...],callback())

require.config({
    // baseUrl:'js/lib',
    path : {
        jquery:'jquery.min',
        module1 : 'lib/module1',
        module2 : 'lib/module2',
    }
});

require(['jquery', 'module1', 'module2'], function ($, module1, module2) {
    module1.a();
    module2.b();
});