/**
 * Created by lw on 2016/11/11.
 */
//main.js

// require([module...],callback())

require.config({
    baseUrl:'js/lib',
    paths: {
        'jquery':'jquery',
        'module1': 'module1',
        'module2': 'module2'
    }
});

require(['jquery', 'module1', 'module2'], function ($, module1, module2) {
    module1.a();
    module2.b();
});