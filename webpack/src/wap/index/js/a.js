/**
 * Created by lw on 2017/3/28.
 */
export default function bar(){
    Function.prototype.method = function(name ,fn){
        this.prototype[name] = fn;
        return this;//链式
    };
}
