---
title: MySql_02 MySql的安装
date: 2017-08-13 10:05:37
categories: MySql
description: MySql的安装及新特性
---

### MySql 的下载与安装
MySQL 的官网下载地址: [https://dev.mysql.com/downloads/mysql/](https://dev.mysql.com/downloads/mysql/)   
  
我们选择适合自己的版本进行下载
![](http://oupjofqw3.bkt.clouddn.com/mysql_0001.png)

然后会让我们登录、注册等，我们也可以直接选择只下载：

![](http://oupjofqw3.bkt.clouddn.com/mysql_0002.png)

安装比较简单，但是特别特别注意一点，安装过程中为了安全会提示给你一个临时密码，以便接下来登录使用，如下图：
![](http://oupjofqw3.bkt.clouddn.com/mysql_0003.png)
然后一直下一步即可，当然我们也有另一种方法安装，通过命令安装，详细介绍请看 [github地址](https://github.com/mysqljs/mysql)

### 检测是否安装成功并登录
在终端输入以下命令：

```XML
mysql -u root -p
```
会提示你：

```XML
-bash: mysql: command not found
```
这是很正常的，因为我们还没有配置环境变量，执行以下命令

```XML
Sing-2:~ Sing$ cd ~
Sing-2:~ Sing$ touch .bash_profile
Sing-2:~ Sing$ open -e .bash_profile
Sing-2:~ Sing$ 
```
此时会弹出一个对话框，在此文件的末尾加入以下变量：

```XML
export PATH=${PATH}:/usr/local/mysql/bin
```
保存后完全退出终端重新打开输入命令：

```XML
mysql -u root -p
```
此时会让你输入密码，也就是刚刚保存的临时密码，很遗憾的是我的密码输入一直显示不正确，我不知道什么原因，踩了很久坑，最后没办法，清除密码！：

```XML
sudo /usr/local/mysql/support-files/mysql.server stop
cd /usr/local/mysql/bin
sudo su
./mysqld_safe --skip-grant-tables
```
然后继续完全退出终端再打开，再次输入命令，直接回车(此时没有密码)：

```XML
Sing-2:~ Sing$ mysql -u root -p
Enter password: 
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 120
Server version: 5.7.19 MySQL Community Server (GPL)

Copyright (c) 2000, 2017, Oracle and/or its affiliates. All rights reserved.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> 
```
终于成功登录了！但是...还是设置一个密码比较好(退出后新打开一个终端)：

```XML
cd /usr/local/mysql/bin;

./mysql

flush privileges;

set password for 'root'@'localhost' = password('123');

```
分别执行之后就可以成功更改密码了，再试一试吧~~~




