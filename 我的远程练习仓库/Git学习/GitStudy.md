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

11、git revert命令用来撤销一个已经提交的快照。git revert <commit> 生成一个撤消了<commit>引入的修改的新提交，然后应用到当前分支。

12、理解这一点很重要——git revert回滚了『单独一个提交』——它没有移除后面的提交，然后回到项目之前的状态。
在Git中，后者实际上被称为reset，而不是revert。

13、git reset --hard HEAD~1 重设缓冲区和工作目录，匹配最近的一次提交。
撤销(revert)被设计为撤销 公开 的提交的安全方式，git reset被设计为重设 本地 更改。
因为两个命令的目的不同，它们的实现也不一样：重设完全地移除了一堆更改，而撤销保留了原来的更改，用一个新的提交来实现撤销。

14、git commit --amend命令是修复最新提交的便捷方式。

15、git reflog显示本地仓库的引用日志。

16、git remote 命令允许你创建、查看和删除和其它仓库之间的连接。 
git remote 列出你和其他仓库之间的远程连接。 
git remote -v 和上个命令相同，但同时显示每个连接的URL。
git remote add <name> <url> 创建一个新的远程仓库连接。在添加之后，你可以将作为便捷的别名在其他Git命令中使用。
git remote rm <name>移除名为的远程仓库的连接。
git remote rename <old-name> <new-name> 将远程连接从重命名为。

17、git fetch命令将提交从远程仓库导入到你的本地仓库。拉取下来的提交储存为远程分支，而不是我们一直使用的普通的本地分支。你因此可以在整合进你的项目副本之前查看更改。

18、git merge origin/master 合并代码

19、git branch 查看分支

20、git log --oneline master..origin/master

21、我们已经知道应该使用git fetch，然后是git merge，但是git pull将这两个命令合二为一。


看到回滚：https://github.com/geeeeeeeeek/git-recipes/wiki/2.6-%E5%9B%9E%E6%BB%9A%E9%94%99%E8%AF%AF%E7%9A%84%E4%BF%AE%E6%94%B9