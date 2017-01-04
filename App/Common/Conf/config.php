<?php
return array(
    'SHOW_PAGE_TRACE' => true, // 显示调试页面
    'READ_DATA_MAP' => true, // 字段映射
    'DEFAULT_CONTROLLER' => 'Login/Login', // 默认控制器名称
    'DEFAULT_ACTION' => 'login', // 默认操作名称
    'URL_MODEL' => 2, // URL使用PathInfo模式
    'URL_CASE_INSENSITIVE' => true, // URL中不区分大小写
    
    'CONTROLLER_LEVEL' => 2, // Controller下分文件夹
    'URL_CASE_INSENSITIVE' => false,
    // 分组
    'MODULE_ALLOW_LIST' => array(
        'Admin'
    ),
    'DEFAULT_MODULE' => 'Admin',
    
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => '127.0.0.1', // 服务器地址
    'DB_NAME' => 'bsl_copy', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => '123456', // 密码
    'DB_PORT' => '3306', // 端口
    'DB_PREFIX' => '', // 数据库表前缀
    'DB_DEBUG' => TRUE, // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE' => true, // 启用字段缓存
    'DB_CHARSET' => 'utf8', // 数据库编码默认采用utf8
                            
    // 模板配置
    'TMPL_L_DELIM' => '<{',
    'TMPL_R_DELIM' => '}>',
    'LAYOUT_ON' => true,
    'LAYOUT_NAME' => 'layout'
);