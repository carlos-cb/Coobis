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
   Adult
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
   World

6.6更新
整理datacontroller，返回分类选择按钮触发清空data表，添加SEOIndex的分页，每页10条信息，左侧数据筛选栏准备制作中