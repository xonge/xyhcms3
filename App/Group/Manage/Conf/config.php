<?php

$default_config = array(

	//配置RBAC权限
	//'RBAC_SUPERADMIN' => 'mengj',		//超级管理员名称(非系统带),
	'ADMIN_AUTH_KEY'  => 'yang_adm_superadmin',	//超级管理员识别
	'USER_AUTH_ON'    => true,			//开启验证
	'USER_AUTH_TYPE'  => 1,				//验证类型(1:登录验证,2:实时验证[每步操作都去读数据库])
	'USER_AUTH_KEY'   => 'yang_adm_uid',			//用户认证识别号
	'NOT_AUTH_MODULE' => 'Index,Public',			//无需认证的模块(控制器)
	//退出不需要验证//安装的时候表前缀一定要更改(yy_)//debug
	'NOT_AUTH_ACTION' => 'logout',		//无需认证的动作方法
	'RBAC_ROLE_TABLE' => C('DB_PREFIX').'role',		//数据库角色表名称
	'RBAC_USER_TABLE' => C('DB_PREFIX').'role_user',//角色与用户的中间表名,不是用户表名
	'RBAC_ACCESS_TABLE' => C('DB_PREFIX').'access',	//权限表名
	'RBAC_NODE_TABLE'	=> C('DB_PREFIX').'node',	//节点表名称

	'VAR_SESSION_ID' => 'PHPSESSID',//post方式 提交 session_id//Public uploadFile
	'TMPL_TEMPLATE_SUFFIX' => '.html',//模板后缀

	//去掉伪静态后缀
	'URL_HTML_SUFFIX' => '',

	//'URL_MODEL' =>  (C('URL_MODEL') == 3) ? 3 : 0,//伪静态后，ueditor上传图片出错
	//禁止路由
	'URL_ROUTER_ON' => false,
	//禁止静态缓存
	'HTML_CACHE_ON' => false,

	'TMPL_PARSE_STRING' => array(
		'__PUBLIC__' => __ROOT__. '/' . APP_NAME . '/' . C('APP_GROUP_PATH'). '/' .GROUP_NAME .'/Tpl/Public',
		'__DATA__' => __ROOT__. '/Data',
	),
);

$admin_config=array(
	'URL_MODEL'=>3,
	'APP_DEBUG'=>false,
	'TMPL_CACHE_TIME' => -1,// for 部署模式
	'USER_AUTH_ON'=>true,
	'USER_AUTH_TYPE'			=>2,		// 默认认证类型 1 登录认证 2 实时认证
	'USER_AUTH_KEY'			=>'authId',	// 用户认证SESSION标记
    'ADMIN_AUTH_KEY'			=>'administrator',
	'USER_AUTH_MODEL'		=>'admin',	// 默认验证数据表模型
	'AUTH_PWD_ENCODER'		=>'md5',	// 用户认证密码加密方式
	'USER_AUTH_GATEWAY'	=>'/Public/login',	// 默认认证网关
	'NOT_AUTH_MODULE'		=>'Public',		// 默认无需认证模块
	'REQUIRE_AUTH_MODULE'=>'',		// 默认需要认证模块
	'NOT_AUTH_ACTION'		=>'verify',		// 默认无需认证操作
	'REQUIRE_AUTH_ACTION'=>'',		// 默认需要认证操作
    'GUEST_AUTH_ON'          => false,    // 是否开启游客授权访问
    'GUEST_AUTH_ID'           =>    0,     // 游客的用户ID
    'DB_LIKE_FIELDS'=>'title|remark',
	'RBAC_ROLE_TABLE'=>'dami_role',
	'RBAC_USER_TABLE'	=>	'dami_role_admin',
	'RBAC_ACCESS_TABLE' =>	'dami_access',
	'RBAC_NODE_TABLE'	=> 'dami_node',
	 'TOKEN_ON'         => false,     // 开启令牌验证
	'FIELD_TYPE' => array(0=>'单行文本(text)',1=>'多行文本不支持编辑器(textarea)',2=>'多行文本支持编辑器(htmleditor)',3=>'下拉列表菜单(select)',4=>'单选按钮(radio)',5=>'多选列表(multselect)',6=>'多选按钮(checkbox)',7=>'单文件上传(file)',8=>'多文件上传(multifile)'),
);

return array_merge($default_config,$admin_config);

?>