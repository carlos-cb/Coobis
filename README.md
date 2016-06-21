Coobis
======

A Symfony project created on May 31, 2016, 10:36 pm.

6.1 更新
1. 把云盘上的otro里的文件放在Coobis下,再clone这里的文件

2. 上传时检查gitignore里的文件夹目录不能包含在上传文件中

6.3 更新
把userid变为外键

1. php app/console doctrine:schema:update --force

6.4更新
添加SEOIndex、面包屑导航及程序主功能，暂时通过alexa的分类排名获取urls

1. Category包含的名称（录入数据库）
   Arts
   Business
   Computers
   Games
   Health
   Home
   Kids_and_Teens
   News
   Recreation
   Reference
   Regional
   Science
   Shopping
   Society
   Sports

6.6更新
整理datacontroller，返回分类选择按钮触发清空data表，添加SEOIndex的分页，每页10条信息，左侧数据筛选栏准备制作中

6.7更新
css/js文件本地化，因seoindex页加载较慢，新增loading的div
注意：云盘里otro中更新了web/bundle，下载更新后再pull程序。

6.13更新
seoIndex页面添加左侧jquery数据筛选，目前为rank和subdominioRank，后续根据实际需要再添加
---注意：在本机.gitignore中把web/bundles去除，删除本地web/bundles文件夹，再pull项目。commit时去除右边栏选项。

------------------------------------------------------------------------------------------------------------------------
6.16阶段性更新
各种view的更新。建议删除本地项目重新更新,忽略上面的更新方法。

更新方法：clone->coobis.sql->otro

6.18更新 （需更新coobis.sql）
已经基本完成网站大体，欠缺计划中的主要功能=》用户管理、Google爬虫
留下的接口：
DataController第305行，user随数据录入数据库，并且根据user的session限制对data表进行增删改查功能。
还需要完成的任务：
1. login的界面，对login的判定。
2. 用户密码的加密。
3. dataController各方法中加入user的session判定。
4. user、category表非admin用户的限制。

6.21更新
Github上切换到Fix Branch，你还在原来的branch更新（selectCategory前端，FosUserBundle登录form的前端），最后我合起来，星期四传给你
已完成周一讨论的大部分修改，还需要问老师的问题》》》》》》

1. 我们的header在base.html.twig里面，header中有对显示login还是logout的判定，现在的方法是在每个controller里面都添加判断，代码如下：
        $user = $this->getUser();

        if($user){
            $displayLogin = "none";
            $displayLogout = "display";
            $username = $user->getUsername();
        }else{
            $displayLogin = "display";
            $displayLogout = "none";
            $username = "Guest";
        }
问题是如何更有效地解决？？？

2. FosUserBundle本身不包含以admin身份对users的增删改查（也无法使用symfony自带的generate crud），现阶段只能通过cmd里的命令行进行增删改查。
解决办法是添加SonataUserBundle还是rewrite crud我们自己重写（工作量大）？？？