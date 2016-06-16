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