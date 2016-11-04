git最简单的操作：
1、添加到本地暂存区:git add *

2、添加到本地仓库:git commit -m ""

3、推送到远程仓库:git push origin master 

4、如果你还没有克隆现有仓库，并欲将你的仓库连接到某个远程服务器，你可以使用如下命令添加：git remote add origin <server>

5、git init命令创建一个新的Git仓库。它用来将已存在但还没有版本控制的项目转换成一个Git仓库，或者创建一个空的新仓库。运行git init命令会在你项目的根目录下创建一个新的.git目录，其中包含了你项目必需的所有元数据

6、git clone命令拷贝整个Git仓库

7、git config命令允许你在命令行中配置你的Git安装（--list查看所有配置项）例如：git config user.name <name>

8、git status命令显示工作目录和缓存区的状态。列出已缓存、未缓存、未追踪的文件。

9、git log 命令显示已提交的快照。git log命令是Git查看项目历史的基本工具

10、git checkout这个命令有三个不同的作用：检出文件、检出提交和检出分支。
检出提交会使工作目录和这个提交完全匹配。你可以用它来查看项目之前的状态，而不改变当前的状态。
检出文件使你能够查看某个特定文件的旧版本，而工作目录中剩下的文件不变。

看到回滚：https://github.com/geeeeeeeeek/git-recipes/wiki/2.6-%E5%9B%9E%E6%BB%9A%E9%94%99%E8%AF%AF%E7%9A%84%E4%BF%AE%E6%94%B9