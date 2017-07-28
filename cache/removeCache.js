/**
 * Created by lw on 2017/7/27.
 */
function createTag (baseUrl,type) {
    const timestamp=new Date().getTime();
    var oTag = document.createElement(type);
    if(type=="link"){
        oTag.href= baseUrl + '?v=' + timestamp;
        oTag.rel = 'stylesheet';
    } else if(type=="script") {
        oTag.src= baseUrl + '?v=' + timestamp;
        oTag.type = 'text/javascript';
    }
    document.getElementsByTagName("head")[0].appendChild(oTag);
}
//当页面加载状态改变的时候执行这个方法.
document.onreadystatechange = subSomething;
document.body.style.display = "none";
function subSomething() {
    if(document.readyState == 'complete') //当页面加载状态
        document.body.style.display = "block";
}