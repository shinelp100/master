一、前端页面性能优化工具

基于三方平台
1、三方平台性能测试网站（https://tools.pingdom.com/）
2、谷歌页面性能测试网站 （https://developers.google.com/speed/pagespeed/insights/）（chrome插件pageSpeed.crx）

基于Chrome调试工具
1、Timeline 下Summary显示总共的加载用时  Eventlog记录了页面各模块(细分)加载的时间
2、Network中有个No throtting可以选择模拟手机GPRS、2、3、4、wifi等网络的页面加载情况
3、Audits中Web Page Performance 记录了css的使用比例（对于使用率较少的css文件我们可以选择合并删除）

二、前端页面性能优化方法
1、文件的合并（对于常用的公共css和js方法能合并就合并包括css文件(例如：wenjfbase.css)和js（例如：common.js）文件） 减少页面对服务器的请求次数
2、避免重复引用css和js文件（前端做静态页面给后端时，在后端套完页面后，检查页面是否因为后端公共头尾框架的引入而导致的前端公共文件的重复引用）
3、页面图片压缩的必要性（图片无所压缩地址：https://tinypng.com/或是http://www.secaibi.com/tools/）举例：温度金服首页1.1M,图片占比80%
4、js、css文件压缩
5、图片懒加载 （对于图片较多的页面我们可以采用图片懒加载技术来提升页面的响应速度）
6、避免内联样式和事件，使得结构与表现、行为的分离




















js加载：

1. 不能并行下载和解析（阻塞下载）。 
     
2. 当引用了JS的时候，浏览器发送1个js request就会一直等待该request的返回。因为浏览器需要1个稳定的DOM树结构，而JS中很有可能有 
     
代码直接改变了DOM树结构，比如使用 document.write 或 appendChild,甚至是直接使用的location.href进行跳转，浏览器为了防止出现JS修 
     
改DOM树，需要重新构建DOM树的情况，所以 就会阻塞其他的下载和呈现. 


HTML页面加载和解析流程 ：

1. 用户输入网址（假设是个html页面，并且是第一次访问），浏览器向服务器发出请求，服务器返回html文件。 

2. 浏览器开始载入html代码，发现<head>标签内有一个<link>标签引用外部CSS文件。 

3. 浏览器又发出CSS文件的请求，服务器返回这个CSS文件。 

4. 浏览器继续载入html中<body>部分的代码，并且CSS文件已经拿到手了，可以开始渲染页面了。 

5. 浏览器在代码中发现一个<img>标签引用了一张图片，向服务器发出请求。此时浏览器不会等到图片下载完，而是继续渲染后面的代码。 

6. 服务器返回图片文件，由于图片占用了一定面积，影响了后面段落的排布，因此浏览器需要回过头来重新渲染这部分代码。 

7. 浏览器发现了一个包含一行Javascript代码的<script>标签，赶快运行它。 

8. Javascript脚本执行了这条语句，它命令浏览器隐藏掉代码中的某个<style>（style.display=”none”）。杯具啊，突然就少了这么一个元素，浏览器不得不重新渲染这部分代码。 

9. 终于等到了</html>的到来，浏览器泪流满面…… 

10. 等等，还没完，用户点了一下界面中的“换肤”按钮，Javascript让浏览器换了一下＜link＞标签的CSS路径。 

原文地址:http://www.bkjia.com/HTML_Xhtml/835247.html 11. 浏览器召集了在座的各位<div><span><ul><li>们，“大伙儿收拾收拾行李，咱得重新来过……”，浏览器向服务器请求了新的CSS文件，重新渲染页面。






























