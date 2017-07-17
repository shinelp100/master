/**
 * Created by lw on 2017/6/6.
 */
function ajax(options){
    options = options || {};
    options.type=(options.type || "GET").toUpperCase();
    options.datatype = options.datatype || "json";
    var params = formatParams(options.params);

    //创建对象  第一步骤
    if(window.XMLHttpRequest){
        var xhr = new XMLHttpRequest();
    } else {
        var xhr = new ActiveXObject('Microsoft.XMLHTTP');
    }

    //接收  第三步骤
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4){
            var status = xhr.status;
            if(status>=200 && status<300){
                options.success && options.success(xhr.responseText,xhr.responseXML);
            } else {
                options.fail && options.fail(status);
            }
        }
    }

    //链接发送请求  第二步骤
    if(options.type == "GET"){
        xhr.open("GET",options.url+"?"+params,true);
        xhr.send(null);
    }else if(options.type == "POST"){
        xhr.open("POST",options.url,true);
        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencode");
        xhr.send(params);
    }

    //格式化数据
    function formatParams(data){
        var arr = [];
        for(var name in data){
            arr.push(encodeURIComponent(name)+"="+encodeURIComponent(data[name]));
        }
        arr.push("v=" + Math.random().replace('.',''));
        return arr.join('&');
    }
}