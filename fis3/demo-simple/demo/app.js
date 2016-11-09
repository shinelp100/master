//app.js
/**
 * @require style.css
 * @require demo.js
 */
alert("Hello, World");
function caculate(){
    var a =10;
    return function(){
        console.log(a);
    }
}