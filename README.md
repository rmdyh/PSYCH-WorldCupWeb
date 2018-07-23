
一个世界杯信息网站页面
===============================
数据库信息：  
数据库名称 PSYCH-WorldCupWeb  
数据库编码方式 utf8_general_ci  

数据库版本控制
===============================
版本控制界面：http://localhost/PSYCH-WorldCupWeb/dbv-1.1/  
用户名、密码：dbv
数据库版本控制配置文件：PSYCH-WorldCupWeb\dbv-1.1\config.php  

Yii安装流程
===============================
1、下载文件  
2、运行 "init.bat" 命令，选择开发环境  
    (Development:开发环境; Production:生产环境);  
3、执行yii初始化命令 "yii.bat";  
4、新建数据库，并修改数据库配置  
    "\common\config\main-local.php";  
5、创建相应的数据表，执行命令 "yii.bat migrate";  
6、前台访问页面 http://localhost/advanced/frontend/web/;  
   后台访问页面 http://localhost/advanced/backend/web/;  

Yii 2 Advanced Project Template
===============================

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-advanced/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-advanced/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
    tests/               contains tests for common classes    
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for backend application    
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    tests/               contains tests for frontend application
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
```

开发者名单
===============================
卢政先  