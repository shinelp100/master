/**
 * Created by lw on 2017/3/28.
 */
import bar from './a.js';

bar();
var Anim = function(){
    alert(1);
};
Anim.method('start',function(){
    alert('start');
})
Anim.method('stop',function(){
    alert('stop');
});