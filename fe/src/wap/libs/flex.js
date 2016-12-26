/**
 * Created by lw on 2016/11/18.
 */
(function(doc,win){
    var docEl = doc.documentElement,
        resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
        recalc = function () {
            var clientWidth = doc.documentElement.getBoundingClientRect().width;
            if (!clientWidth) return;
            if(clientWidth > 750) {
                clientWidth=750;
                doc.body.style.width = '750px';
            }else{
                doc.body.style.width = clientWidth + 'px';
                doc.body.style.margin = '0 auto';
            }
            docEl.style.fontSize = clientWidth/10 + 'px';
        };
    if (!doc.addEventListener) return;
    win.addEventListener(resizeEvt, recalc, false);
    doc.addEventListener('DOMContentLoaded', recalc, false);
})(document,window);