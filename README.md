# master
这是我尝试的去创建自己的gitHub
我要尝试慢慢的学会用gitHub
这边你开始记录我的学习进程
添加本地文件到已有的远程master上：
git remote add origin git@https://github.com/shinelp100/master
git push -u origin master

windows中的换行符为 CRLF， 而在Linux下的换行符为LF，所以在执行add . 时出现提示，解决办法：
$ rm -rf .git  // 删除.git  
$ git config --global core.autocrlf false  //禁用自动转换
然后重新执行：
$ git init    
$ git add .