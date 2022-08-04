<!--
author: jockchou
date: 2015-07-29
title: GitBlog目录结构
tags: GitBlog
category: GitBlog
status: publish
summary: GitBlog采用流行的PHP框架CodeIgniter开发，只是我对一些目录进行了重命名。如果你熟悉CodeIgniter框架，那你一定不会陌生。
-->
GitBlog采用流行的PHP框架`CodeIgniter`开发，只是我对一些目录进行了重命名。如果你熟悉CodeIgniter框架，那你一定不会陌生。

## 目录结构如下 ##

GitBlog的目录结构如下所示：


```
.
├── app
│   ├── Common.php
│   ├── Config #配置目录,其中的Routes路由设置过
│   ├── Controllers  #主要控制器代码写这里
│   ├── Database
│   ├── Filters
│   ├── Helpers
│   ├── index.html
│   ├── Language
│   ├── Libraries #库目录,其中包含markdown解析,分页,模板引擎twig,wordpress解析,yaml解析库,这些是自己封装的
│   ├── Models
│   ├── ThirdParty  #三方的直接拿来用,没有使用composer管理的库
│   └── Views
├── blog # 文章目录
├── builds
├── composer.json
├── composer.lock
├── conf.yaml
├── env
├── LICENSE
├── phpunit.xml.dist
├── preload.php
├── public
│   ├── favicon.ico
│   ├── index.php #网站的入口文件,nginx配置需要指向这里
│   ├── robots.txt
│   ├── _site  #静态网站导出目录
│   └── theme  #主题目录
├── README.md
├── spark
├── tests  # 测试目录
│   ├── database
│   ├── README.md
│   ├── session
│   ├── _support
│   └── unit
├── vendor  #依赖目录,执行composer install后产生的目录,不需要提交进代码库
│   ├── autoload.php
│   ├── bin
│   ├── codeigniter4
│   ├── composer
│   ├── doctrine
│   ├── erusev
│   ├── fakerphp
│   ├── kint-php
│   ├── laminas
│   ├── mikey179
│   ├── myclabs
│   ├── nikic
│   ├── phar-io
│   ├── phpdocumentor
│   ├── phpspec
│   ├── phpunit
│   ├── psr
│   ├── sebastian
│   ├── symfony
│   ├── theseer
│   ├── twig
│   └── webmozart
└── writable # 此目录需要在linux下改成nginx或者apache程序可以写入的权限
    ├── cache #缓存目录
    ├── debugbar
    ├── logs
    ├── session
    └── uploads

```

## 目录说明 ##

- app: CodeIgniter主程序目录，cache和logs分别是缓存和日志目录，请确保写的权限    
- sys： CodeIgniter系统源码目录，一般不需要改这里面的任何东西  
- theme： GitBlog主题目录，所有主题模板都放在这里    
- posts: GitBlog存放markdown博客文件的目录，你写的博客都放这里  
- img： 图片目录，你的markdown中引用的图片都放到这里，使用相对路径引用  
- conf.yaml: GitBlog配置文件  
- index.php: 入口php文件  

注意：2.2版本开始统一将markdown文件和图片文件放到blog目录中。
 
