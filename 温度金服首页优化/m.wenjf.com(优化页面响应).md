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





