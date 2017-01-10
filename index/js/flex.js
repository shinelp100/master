/**
 * Created by lw on 2016/11/18.
 */
// DOMContentLoaded = function(){
    (function(doc,win){
        var docEl = doc.documentElement,
            resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
            recalc = function () {
                var clientWidth = doc.documentElement.getBoundingClientRect().width;
                if (!clientWidth) return;
                if(clientWidth > 768) {
                    clientWidth=768;
                    doc.body.style.width = '768px';
                    doc.body.style.margin = '0 auto';
                    docEl.style.fontSize = clientWidth/10 + 'px';
                }else{
                    doc.body.style.width = clientWidth + 'px';
                }
                docEl.style.fontSize = clientWidth/10 + 'px';
            };
        if (!doc.addEventListener) return;
        win.addEventListener(resizeEvt, recalc, false);
        doc.addEventListener('DOMContentLoaded', recalc, false);
    })(document,window);
// }