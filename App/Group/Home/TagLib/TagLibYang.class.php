<?php

//自定义标签库
class TagLibYang extends TagLib {


	protected $tags = array(
		//自定义标签
		//文章列表
		'artlist'	=> array(
			'attr'	=> 'flag,typeid,arcid,titlelen,infolen,orderby,keyword,limit,pagesize,pageroll,pagetheme',//attr 属性列表,arcid[new|20140413] 指定文档ID
			'close'	=> 1,// close 是否闭合（0 或者1 默认为1，表示闭合）
		),
		//产品列表分页
		'prolist'	=> array(
			'attr'	=> 'flag,typeid,arcid,titlelen,infolen,orderby,keyword,limit,pagesize,pageroll,pagetheme',
			'close'	=> 1,
		),
		//图片列表分页
		'piclist'	=> array(
			'attr'	=> 'flag,typeid,arcid,titlelen,infolen,orderby,keyword,limit,pagesize,pageroll,pagetheme',
			'close'	=> 1,
		),
		//软件列表分页
		'soflist'	=> array(
			'attr'	=> 'flag,typeid,arcid,titlelen,infolen,orderby,keyword,limit,pagesize,pageroll,pagetheme',
			'close'	=> 1,
		),

		// 随机文章列表 2014/12/01
		'randomlist'	=> array(
			'attr'	=> 'flag,typeid,titlelen,infolen,orderby,keyword,limit,pagesize,pageroll,pagetheme,notin',
			'close'	=> 1,
		),

		//通用列表
		'list'	=> array(
			'attr'	=> 'flag,typeid,titlelen,infolen,orderby,keyword,limit,pagesize,pageroll,pagetheme',
			'close'	=> 1,
		),

		//专题列表分页
		'spelist'	=> array(
			'attr'	=> 'flag,typeid,titlelen,infolen,orderby,keyword,limit,pagesize,pageroll,pagetheme',
			'close'	=> 1,
		),

		//栏目 我重新写一个 原作者的不知道怎么嵌套 不闭合 使用thinkphp自带的volist去显示
		'catlistx'	=> array(
			'attr'	=> 'typeid,type,orderby,limit,flag,modelid',//flag为是否全部显示
			'close'	=> 0,
		),

		//栏目
		'catlist'	=> array(
			'attr'	=> 'typeid,type,orderby,limit,flag,modelid',//flag为是否全部显示
			'close'	=> 1,
		),

		//导航
		'navlist'	=> array(
			'attr'	=> 'typeid',
			'close'	=> 1,
		),

		//类名和链接
		'type'	=> array(
			'attr'	=> 'typeid',
			'close'	=> 1,
		),
		//user list
			'userlist'	=> array(
			'attr'	=> 'typeid,titlelen,infolen,orderby,limit,pagesize,pageroll,pagetheme',//attr 属性列表
			'close'	=> 1,
		),
		//announce list
		'announcelist'	=> array(
			'attr'	=> 'titlelen,infolen,orderby,limit,pagesize,pageroll,pagetheme',//attr 属性列表
			'close'	=> 1,
		),


		//friendLink list
		'flink'	=> array(
			'attr'	=> 'typeid,titlelen,infolen,orderby,limit,pagesize,pageroll,pagetheme',//attr 属性列表
			'close'	=> 1,
		),

		//guestbook list
		'gbooklist'	=> array(
			'attr'	=> 'titlelen,infolen,orderby,limit,pagesize,pageroll,pagetheme',//attr 属性列表
			'close'	=> 1,
		),

		//v1.6 --Review list --20140813
		'reviewlist'=> array(
			'attr'	=> 'modelid,arcid,type,userid,orderby,limit,pagesize,pageroll,pagetheme',
			'close'	=> 1,
		),

		//v1.6 --ad --20140821
		'abc'	=> array(
			'attr'	=> 'id,limit',//attr 属性列表
			'close'	=> 1,
		),

		'ad'	=> array(
			'attr'	=> 'id,flag',//attr 属性列表,flag[0|1],0为html,1为js
			'close'	=> 0,
		),


		'iteminfo'	=> array(
			'attr'	=> 'name,titlelen,limit',
			'close'	=> 1,
		),


		'block'	=> array(
			'attr'	=> 'name,infolen,textflag',
			'close'	=> 0,
		),



		//v1.5 for blog  Archive
		'datelist'	=> array(
			'attr'	=> 'modelid,limit',
			'close'	=> 1,
		),
		//v1.5 for blog  Archive
		'archivelist'	=> array(
			'attr'	=> 'modelid,year,month,titlelen,infolen,orderby,limit,pagesize,pageroll,pagetheme',
			'close'	=> 1,
		),

		//v1.6 --通用数据表查询 --20140812
		'datatable'	=> array(
			'attr'	=> 'table,field,joinwhere,where,orderby,limit,pagesize,pageroll,pagetheme',//attr 属性列表,arcid[new|20140413] 指定文档ID
			'close'	=> 1,// close 是否闭合（0 或者1 默认为1，表示闭合）
		),


		'field'	=> array(
			'attr'	=> 'typeid,artid,name,infolen,imgindex,imgwidth,imgheight',//imgindex,imgwidth,imgheight针对图片
			'close'	=> 0,
		),

		'position'	=> array(
			'attr'	=> 'typeid,ismobile,sname,surl,delimiter',
			'close'	=> 0,
		),


		'sitekeywords'	=> array('close' => 0),
		'sitedescription'	=> array('close' => 0),
		'sitename'	=> array('close' => 0),
		'sitetitle'	=> array('close' => 0),
		'siteurl'	=> array('close' => 0),
		'beian'	=> array('close' => 0),
		'address'	=> array('close' => 0),
		'phone'	=> array('close' => 0),
		'fax'	=> array('close' => 0),
		'qq'	=> array('close' => 0),
		'email'	=> array('close' => 0),
		'copyright'	=> array('close' => 0),
		'swturl'	=> array('close' => 0),
		'searchurl'	=> array('close' => 0),
		'gbookurl'	=> array('close' => 0),
		'gbookaddurl'	=> array('close' => 0),
		'vcodeurl'	=> array('close' => 0),
		'mobileauto'	=> array(
			'attr'	=> 'flag',//0自动,1是php,2是js
			'close' => 0
		),

		'prev'	=> array(
			'attr'	=> 'titlelen',//attr 属性列表
			'close' => 0
		),
		'next'	=> array(
			'attr'	=> 'titlelen',//attr 属性列表
			'close' => 0
		),
		'click'	=> array('close' => 0),
		'online' => array('close' => 0),

	);

	//标签名前加下划线
	//文章列表
	public function _artlist($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'artlist');
		////非debug参属性参数只处理 一次
		$flag = empty($attr['flag'])? '': $attr['flag'];
		$typeid = !isset($attr['typeid']) || $attr['typeid'] == '' ? -1 : trim($attr['typeid']);//-1后面自动获取
		$arcid  = empty($attr['arcid'])? '' : $attr['arcid'];//新增加20140413
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$orderby = empty($attr['orderby'])? 'id DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];
		$keyword = empty($attr['keyword'])? '': trim($attr['keyword']);

		$flag = flag2sum($flag);
		$arcid = string2filter($arcid, ',', true);

		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];//新增加20140513
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%页' : htmlspecialchars_decode($attr['pagetheme']);//新增加20140513



		$str = <<<str
<?php
	\$_typeid = $typeid;
	\$_keyword = "$keyword";
	\$_arcid = "$arcid";
	if(\$_typeid == -1) \$_typeid = I('get.cid', 0, 'intval');
	if (\$_typeid>0 || substr(\$_typeid,0,1) == '$') {
		import('Class.Category', APP_PATH);
		\$ids = Category::getChildsId(getCategory(), \$_typeid, true);
		//p(\$ids);
		\$where = array('article.status' => 0, 'article.cid'=> array('IN',\$ids));
	}else {
		\$where = array('article.status' => 0);
	}

	if (\$_keyword != '') {
		\$where['article.title'] = array('like','%'.\$_keyword.'%');
	}
	if (!empty(\$_arcid)) {
		\$where['article.id'] = array('IN', \$_arcid);
	}

	if ($flag > 0) {
		\$where['_string'] = 'article.flag & $flag = $flag ';
	}

	//分页
	if ($pagesize > 0) {

		import('Class.Page', APP_PATH);
		\$count = D2('ArcView','article')->where(\$where)->count();

		\$thisPage = new Page(\$count, $pagesize);

		\$ename = I('e', '', 'htmlspecialchars,trim');
		if (!empty(\$ename) && C('URL_ROUTER_ON') == true) {
			\$thisPage->url = ''.\$ename. '/p';
		}
		//设置显示的页数

		\$thisPage->rollPage = $pageroll;
		\$thisPage->setConfig('theme',"$pagetheme");
		\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
		\$page = \$thisPage->show();
	}else {
		\$limit = "$limit";
	}


	// \$_artlist = D2('ArcView','article')->nofield('content')->where(\$where)->order("$orderby")->limit(\$limit)->select();
	\$_artlist = D2('ArcView','article')->nofield('')->where(\$where)->order("$orderby")->limit(\$limit)->select();

	// dump(\$_artlist);die;
	// 如果只有一篇文章
	if(count(\$_artlist)==1){
		// 内容中的图片
		\$img_arr = array();
		\$pic_first = array();
		\$reg = "/<img[^>]*src=\"((.+)\/(.+)\.(jpg|gif|bmp|png))\"/isU";
		preg_match_all(\$reg, \$_artlist[0]['content'], \$img_arr, PREG_PATTERN_ORDER);
		// 匹配出来的不重复图片
		\$img_arr = array_unique(\$img_arr[1]);
		// 没有注意到这是数组
		// dump(\$_artlist[0]['content']);die;
		// dump(\$img_arr);die;
		\$attid_arr = array();
		if (!empty(\$img_arr)) {
			if (!empty(\$_SERVER['HTTP_HOST'])) {
				\$baseurl = 'http://'.\$_SERVER['HTTP_HOST'];
			} else {
				\$baseurl = rtrim("http://".\$_SERVER['SERVER_NAME'],'/');
			}
			foreach (\$img_arr as \$k => \$v) {
				\$img_arr[\$k] = str_replace(\$baseurl, '', \$v);//清除域名前缀
			}

			\$attid = M('attachment')->field('id,filepath')->where(array('filepath' => array('in', \$img_arr)))->select();

			if (\$attid) {
				//只有缩略图为空时,才提取第一张图片
				// if (empty(\$pic)) {
				// 	//取出本站内的第一张图
				// 	foreach (\$img_arr as $v) {
				// 		foreach (\$attid as $v2) {
				// 			if (\$v == \$v2['filepath']) {
				// 				\$pic_first = \$v2;
				// 				break 2;
				// 			}
				// 		}
				// 	}
				// }
				//attid 数组
				foreach (\$attid as \$v) {
					\$attid_arr[] = \$v['id'];
				}
			}

		}
	}

	if (empty(\$_artlist)) {
		\$_artlist = array();
	}


	foreach(\$_artlist as \$autoindex => \$artlist):

	\$_jumpflag = (\$artlist['flag'] & B_JUMP) == B_JUMP? true : false;
	\$artlist['url'] = getContentUrl(\$artlist['id'], \$artlist['cid'], \$artlist['ename'], \$_jumpflag, \$artlist['jumpurl']);

	if($titlelen) \$artlist['title'] = str2sub(\$artlist['title'], $titlelen, 0);
	if($infolen) \$artlist['description'] = str2sub(\$artlist['description'], $infolen, 0);

?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}


	//产品列表
	public function _prolist($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'prolist');
		$flag = empty($attr['flag'])? '': $attr['flag'];
		$typeid = !isset($attr['typeid']) || $attr['typeid'] == '' ? -1 : trim($attr['typeid']);
		$arcid  = empty($attr['arcid'])? '' : $attr['arcid'];
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$orderby = empty($attr['orderby'])? 'id DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];
		$keyword = empty($attr['keyword'])? '': trim($attr['keyword']);

		$flag = flag2sum($flag);
		$arcid = string2filter($arcid, ',', true);

		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%页' : htmlspecialchars_decode($attr['pagetheme']);



		$str = <<<str
<?php
	\$_typeid = $typeid;
	\$_keyword = "$keyword";
	\$_arcid = "$arcid";
	if(\$_typeid == -1) \$_typeid = I('get.cid', 0, 'intval');
	if (\$_typeid>0 || substr(\$_typeid,0,1) == '$') {
		import('Class.Category', APP_PATH);
		\$ids = Category::getChildsId(getCategory(), \$_typeid, true);
		//p(\$ids);
		\$where = array('product.status' => 0, 'product.cid'=> array('IN',\$ids));
	}else {
		\$where = array('product.status' => 0);
	}


	if (\$_keyword != '') {
		\$where['product.title'] = array('like','%'.\$_keyword.'%');
	}
	if (!empty(\$_arcid)) {
		\$where['product.id'] = array('IN', \$_arcid);
	}


	if ($flag > 0) {
		\$where['_string'] = 'product.flag & $flag = $flag ';
	}

	//分页
	if ($pagesize > 0) {

		import('Class.Page', APP_PATH);
		\$count = D2('ArcView','product')->where(\$where)->count();

		\$thisPage = new Page(\$count, $pagesize);

		\$ename = I('e', '', 'htmlspecialchars,trim');
		if (!empty(\$ename) && C('URL_ROUTER_ON') == true) {
			\$thisPage->url = ''.\$ename. '/p';
		}
		//设置显示的页数

		\$thisPage->rollPage = $pageroll;
		\$thisPage->setConfig('theme',"$pagetheme");
		\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
		\$page = \$thisPage->show();
	}else {
		\$limit = "$limit";
	}


	\$_prolist = D2('ArcView','product')->nofield('content,pictureurls')->where(\$where)->order("$orderby")->limit(\$limit)->select();

	if (empty(\$_prolist)) {
		\$_prolist = array();
	}


	foreach(\$_prolist as \$autoindex => \$prolist):
	\$_jumpflag = (\$prolist['flag'] & B_JUMP) == B_JUMP? true : false;
	\$prolist['url'] = getContentUrl(\$prolist['id'], \$prolist['cid'], \$prolist['ename'], \$_jumpflag, \$prolist['jumpurl']);


	if($titlelen) \$prolist['title'] = str2sub(\$prolist['title'], $titlelen, 0);
	if($infolen) \$prolist['description'] = str2sub(\$prolist['description'], $infolen, 0);

?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}


	//图片列表
	public function _piclist($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'piclist');
		$flag = empty($attr['flag'])? '': $attr['flag'];
		$typeid = !isset($attr['typeid']) || $attr['typeid'] == '' ? -1 : trim($attr['typeid']);
		$arcid  = empty($attr['arcid'])? '' : $attr['arcid'];
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$orderby = empty($attr['orderby'])? 'id DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];
		$keyword = empty($attr['keyword'])? '': trim($attr['keyword']);

		$flag = flag2sum($flag);
		$arcid = string2filter($arcid, ',', true);

		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%页' : htmlspecialchars_decode($attr['pagetheme']);


		$str = <<<str
<?php
	\$_typeid = $typeid;
	\$_keyword = "$keyword";
	\$_arcid = "$arcid";
	if(\$_typeid == -1) \$_typeid = I('cid', 0, 'intval');
	if (\$_typeid>0 || substr(\$_typeid,0,1) == '$') {
		import('Class.Category', APP_PATH);
		\$ids = Category::getChildsId(getCategory(), \$_typeid, true);
		//p(\$ids);
		\$where = array('picture.status' => 0, 'picture.cid'=> array('IN',\$ids));
	}else {
		\$where = array('picture.status' => 0);
	}

	if (\$_keyword != '') {
		\$where['picture.title'] = array('like','%'.\$_keyword.'%');
	}
	if (!empty(\$_arcid)) {
		\$where['picture.id'] = array('IN', \$_arcid);
	}


	if ($flag > 0) {
		\$where['_string'] = 'picture.flag & $flag = $flag ';
	}

	//分页
	if ($pagesize > 0) {

		import('Class.Page', APP_PATH);
		\$count = D2('ArcView','picture')->where(\$where)->count();

		\$thisPage = new Page(\$count, $pagesize);

		\$ename = I('e', '', 'htmlspecialchars,trim');
		if (!empty(\$ename) && C('URL_ROUTER_ON') == true) {
			\$thisPage->url = ''.\$ename. '/p';
		}
		//设置显示的页数

		\$thisPage->rollPage = $pageroll;
		\$thisPage->setConfig('theme',"$pagetheme");
		\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
		\$page = \$thisPage->show();
	}else {
		\$limit = "$limit";
	}


	\$_piclist = D2('ArcView','picture')->nofield('content,pictureurls')->where(\$where)->order("$orderby")->limit(\$limit)->select();

	if (empty(\$_piclist)) {
		\$_piclist = array();
	}


	foreach(\$_piclist as \$autoindex => \$piclist):
	\$_jumpflag = (\$piclist['flag'] & B_JUMP) == B_JUMP? true : false;
	\$piclist['url'] = getContentUrl(\$piclist['id'], \$piclist['cid'], \$piclist['ename'], \$_jumpflag, \$piclist['jumpurl']);
	if($titlelen) \$piclist['title'] = str2sub(\$piclist['title'], $titlelen, 0);
	if($infolen) \$piclist['description'] = str2sub(\$piclist['description'], $infolen, 0);

?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}


	//软件下载列表
	public function _soflist($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'soflist');
		$flag = empty($attr['flag'])? '': $attr['flag'];
		$typeid = !isset($attr['typeid']) || $attr['typeid'] == '' ? -1 : trim($attr['typeid']);
		$arcid  = empty($attr['arcid'])? '' : $attr['arcid'];
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$orderby = empty($attr['orderby'])? 'id DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];
		$keyword = empty($attr['keyword'])? '': trim($attr['keyword']);

		$flag = flag2sum($flag);
		$arcid = string2filter($arcid, ',', true);

		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%页' : htmlspecialchars_decode($attr['pagetheme']);


		$str = <<<str
<?php
	\$_typeid = $typeid;
	\$_keyword = "$keyword";
	\$_arcid = "$arcid";
	if(\$_typeid == -1) \$_typeid = I('cid', 0, 'intval');
	if (\$_typeid>0 || substr(\$_typeid,0,1) == '$') {
		import('Class.Category', APP_PATH);
		\$ids = Category::getChildsId(getCategory(), \$_typeid, true);
		//p(\$ids);
		\$where = array('soft.status' => 0, 'soft.cid'=> array('IN',\$ids));
	}else {
		\$where = array('soft.status' => 0);
	}

	if (\$_keyword != '') {
		\$where['soft.title'] = array('like','%'.\$_keyword.'%');
	}
	if (!empty(\$_arcid)) {
		\$where['soft.id'] = array('IN', \$_arcid);
	}

	if ($flag > 0) {
		\$where['_string'] = 'soft.flag & $flag = $flag ';
	}

	//分页
	if ($pagesize > 0) {

		import('Class.Page', APP_PATH);
		\$count = D2('ArcView','soft')->where(\$where)->count();

		\$thisPage = new Page(\$count, $pagesize);

		\$ename = I('e', '', 'htmlspecialchars,trim');
		if (!empty(\$ename) && C('URL_ROUTER_ON') == true) {
			\$thisPage->url = ''.\$ename. '/p';
		}
		//设置显示的页数
		\$thisPage->rollPage = $pageroll;
		\$thisPage->setConfig('theme',"$pagetheme");
		\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
		\$page = \$thisPage->show();
	}else {
		\$limit = "$limit";
	}


	\$_soflist = D2('ArcView','soft')->nofield('content,pictureurls,updatelog,downlink')->where(\$where)->order("$orderby")->limit(\$limit)->select();

	if (empty(\$_soflist)) {
		\$_soflist = array();
	}


	foreach(\$_soflist as \$autoindex => \$soflist):
	\$_jumpflag = (\$soflist['flag'] & B_JUMP) == B_JUMP? true : false;
	\$soflist['url'] = getContentUrl(\$soflist['id'], \$soflist['cid'], \$soflist['ename'], \$_jumpflag, \$soflist['jumpurl']);
	if($titlelen) \$soflist['title'] = str2sub(\$soflist['title'], $titlelen, 0);
	if($infolen) \$soflist['description'] = str2sub(\$soflist['description'], $infolen, 0);

?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}

	//标签名前加下划线
	//随机文章列表 完全不知道使用什么算法实现 现在考虑使用随机数 2014/12/01
	public function _randomlist($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'randomlist');
		$flag = empty($attr['flag'])? '': $attr['flag'];
		$typeid = !isset($attr['typeid']) || $attr['typeid'] == '' ? -1 : trim($attr['typeid']);//只接收一个栏目ID
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$orderby = empty($attr['orderby'])? 'id DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];
		$keyword = empty($attr['keyword'])? '': trim($attr['keyword']);

		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%g页' : htmlspecialchars_decode($attr['pagetheme']);
		// $pagetheme = $attr['pagetheme'];

		$aid = !isset($attr['notin']) || $attr['notin'] == '' ? -1 : trim($attr['notin']);


		$flag = flag2sum($flag);

		$str = <<<str
<?php
	\$_typeid = $typeid;
	// \$_pagesize = $pagesize;
	// echo $pagesize;
	\$_keyword = "$keyword";
	\$_pagetheme = "$pagetheme";
	\$_aid = $aid;
	if(\$_typeid == -1) \$_typeid = I('cid', 0, 'intval');
	if (\$_typeid>0 || substr(\$_typeid,0,1) == '$') {
		import('Class.Category', APP_PATH);
		\$_selfcate = Category::getSelf(getCategory(), \$_typeid);
		\$_tablename = strtolower(\$_selfcate['tablename']);
		\$ids = Category::getChildsId(getCategory(), \$_typeid, true);
		//p(\$ids);
		\$where = array(\$_tablename.'.status' => 0, \$_tablename .'.cid'=> array('IN',\$ids));
	}else {
		\$_tablename = 'article';
		\$where = array(\$_tablename.'.status' => 0);

	}
	if (\$_keyword != '') {
		\$where[\$_tablename.'.title'] = array('like','%'.\$_keyword.'%');
	}


	if ($flag > 0) {
		\$where['_string'] = \$_tablename.'.flag & $flag = $flag ';
	}

	if (!empty(\$_tablename) && \$_tablename != 'page') {

		//分页
		if ($pagesize > 0) {

			//import('ORG.Util.Page');
			import('Class.Page2', APP_PATH);
			\$count = D2('ArcView',"\$_tablename")->where(\$where)->count();

			\$thisPage = new Page(\$count, $pagesize);

			\$ename = I('e', '', 'htmlspecialchars,trim');
			if (!empty(\$ename) && C('URL_ROUTER_ON') == true) {
				\$thisPage->url = ''.\$ename. '/p';
			}
			//设置显示的页数
			\$thisPage->rollPage = $pageroll;
			// \$thisPage->nowPage = 1;
			// dump(\$_pagetheme);
			// // \$thisPage->setConfig('header', '555555');//第一页
			\$thisPage->setConfig('first', '首页');//第一页
			\$thisPage->setConfig('upPage', '上一页');//第一页
			\$thisPage->setConfig('downPage', '下一页');//第一页
			\$thisPage->setConfig('last', '尾页');//第一页
			// \$thisPage->setConfig('theme',\$_pagetheme);
			\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
			\$page = \$thisPage->show();
			// dump(\$page);
			// dump(\$thisPage);

		}else {
			\$limit = "$limit";
		}

		// \$_list = D2('ArcView',"\$_tablename")->nofield('content,pictureurls')->where(\$where)->order("$orderby")->limit(\$limit)->select();
		// 此处使用rand函数产生随机文章 对速度有影响
		// dump(\$_aid);die;
		// 前面必须重新定义变量 不然无法显示 不知道原因
		// \$where['article.id'] = array('NOT IN',\$_aid);
		// \$where = array(\$_tablename .'.id'=> array('NOT IN',\$_aid));
		\$_aid = array('0'=>\$_aid);
		\$where[\$_tablename.'.id'] = array('NOT IN',\$_aid);
		// dump(\$where);die;
		\$_randomlist = D2('ArcView',"\$_tablename")->nofield('pictureurls')->where(\$where)->order("RAND()")->limit(\$limit)->select();

		if (empty(\$_randomlist)) {
			\$_randomlist = array();
		}
	}else {
		\$_randomlist = array();
	}


	//Load('extend');//调用msubstr()
	// dump(\$_randomlist);die;
	foreach(\$_randomlist as \$autoindex => \$randomlist):

	\$_jumpflag = (\$randomlist['flag'] & B_JUMP) == B_JUMP? true : false;
	\$randomlist['url'] = getContentUrl(\$randomlist['id'], \$randomlist['cid'], \$randomlist['ename'], \$_jumpflag, \$randomlist['jumpurl']);
	if($titlelen) \$randomlist['title'] = str2sub(\$randomlist['title'], $titlelen, 0);
	if($infolen) \$randomlist['description'] = str2sub(\$randomlist['description'], $infolen, 0);

?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}

	//标签名前加下划线
	//文章列表
	public function _list($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'list');
		$flag = empty($attr['flag'])? '': $attr['flag'];
		$typeid = !isset($attr['typeid']) || $attr['typeid'] == '' ? -1 : trim($attr['typeid']);//只接收一个栏目ID
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$orderby = empty($attr['orderby'])? 'id DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];
		$keyword = empty($attr['keyword'])? '': trim($attr['keyword']);

		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%g页' : htmlspecialchars_decode($attr['pagetheme']);
		// $pagetheme = $attr['pagetheme'];


		$flag = flag2sum($flag);

		$str = <<<str
<?php
	\$_typeid = $typeid;
	// \$_pagesize = $pagesize;
	// echo $pagesize;
	\$_keyword = "$keyword";
	\$_pagetheme = "$pagetheme";
	if(\$_typeid == -1) \$_typeid = I('cid', 0, 'intval');
	if (\$_typeid>0 || substr(\$_typeid,0,1) == '$') {
		import('Class.Category', APP_PATH);
		\$_selfcate = Category::getSelf(getCategory(), \$_typeid);
		\$_tablename = strtolower(\$_selfcate['tablename']);
		\$ids = Category::getChildsId(getCategory(), \$_typeid, true);
		//p(\$ids);
		\$where = array(\$_tablename.'.status' => 0, \$_tablename .'.cid'=> array('IN',\$ids));
	}else {
		\$_tablename = 'article';
		\$where = array(\$_tablename.'.status' => 0);

	}
	if (\$_keyword != '') {
		\$where[\$_tablename.'.title'] = array('like','%'.\$_keyword.'%');
	}


	if ($flag > 0) {
		\$where['_string'] = \$_tablename.'.flag & $flag = $flag ';
	}

	if (!empty(\$_tablename) && \$_tablename != 'page') {

		//分页
		if ($pagesize > 0) {

			//import('ORG.Util.Page');
			import('Class.Page2', APP_PATH);
			\$count = D2('ArcView',"\$_tablename")->where(\$where)->count();

			\$thisPage = new Page(\$count, $pagesize);

			\$ename = I('e', '', 'htmlspecialchars,trim');
			if (!empty(\$ename) && C('URL_ROUTER_ON') == true) {
				\$thisPage->url = ''.\$ename. '/p';
			}
			//设置显示的页数
			\$thisPage->rollPage = $pageroll;
			// \$thisPage->nowPage = 1;
			// dump(\$_pagetheme);
			// // \$thisPage->setConfig('header', '555555');//第一页
			\$thisPage->setConfig('first', '首页');//第一页
			\$thisPage->setConfig('upPage', '上一页');//第一页
			\$thisPage->setConfig('downPage', '下一页');//第一页
			\$thisPage->setConfig('last', '尾页');//第一页
			// \$thisPage->setConfig('theme',\$_pagetheme);
			\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
			\$page = \$thisPage->show();
			// dump(\$page);
			// dump(\$thisPage);

		}else {
			\$limit = "$limit";
		}

		// \$_list = D2('ArcView',"\$_tablename")->nofield('content,pictureurls')->where(\$where)->order("$orderby")->limit(\$limit)->select();
		\$_list = D2('ArcView',"\$_tablename")->nofield('pictureurls')->where(\$where)->order("$orderby")->limit(\$limit)->select();

		// dump(\$_artlist);die;
		// 如果只有一篇文章 这里是循环每篇文章
		foreach (\$_list as \$k => \$v) {
			// 内容中的图片
			\$img_arr = array();
			\$pic_first = array();
			\$reg = "/<img[^>]*src=\"((.+)\/(.+)\.(jpg|gif|bmp|png))\"/isU";
			preg_match_all(\$reg, \$v['content'], \$img_arr, PREG_PATTERN_ORDER);
			// 匹配出来的不重复图片
			\$img_arr = array_unique(\$img_arr[1]);
			// 没有注意到这是数组
			// dump(\$_artlist[0]['content']);die;
			// dump(\$img_arr);die;

			\$_list[\$k]['img_arr'] = \$img_arr;
			\$attid_arr = array();
			if (!empty(\$img_arr)) {
				if (!empty(\$_SERVER['HTTP_HOST'])) {
					\$baseurl = 'http://'.\$_SERVER['HTTP_HOST'];
				} else {
					\$baseurl = rtrim("http://".\$_SERVER['SERVER_NAME'],'/');
				}
				foreach (\$img_arr as \$k => \$v) {
					\$img_arr[\$k] = str_replace(\$baseurl, '', \$v);//清除域名前缀
				}

				\$attid = M('attachment')->field('id,filepath')->where(array('filepath' => array('in', \$img_arr)))->select();

				if (\$attid) {
					//只有缩略图为空时,才提取第一张图片
					// if (empty(\$pic)) {
					// 	//取出本站内的第一张图
					// 	foreach (\$img_arr as $v) {
					// 		foreach (\$attid as $v2) {
					// 			if (\$v == \$v2['filepath']) {
					// 				\$pic_first = \$v2;
					// 				break 2;
					// 			}
					// 		}
					// 	}
					// }
					//attid 数组
					foreach (\$attid as \$v) {
						\$attid_arr[] = \$v['id'];
					}
				}

			}
		}

		if (empty(\$_list)) {
			\$_list = array();
		}
	}else {
		\$_list = array();
	}


	//Load('extend');//调用msubstr()
	// dump(\$_list);die;
	foreach(\$_list as \$autoindex => \$list):

	\$_jumpflag = (\$list['flag'] & B_JUMP) == B_JUMP? true : false;
	\$list['url'] = getContentUrl(\$list['id'], \$list['cid'], \$list['ename'], \$_jumpflag, \$list['jumpurl']);
	if($titlelen) \$list['title'] = str2sub(\$list['title'], $titlelen, 0);
	if($infolen) \$list['description'] = str2sub(\$list['description'], $infolen, 0);

?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}



	//专题列表
	public function _spelist($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'spelist');
		$flag = empty($attr['flag'])? '': $attr['flag'];
		$typeid = !isset($attr['typeid']) || $attr['typeid'] == '' ? 0 : trim($attr['typeid']);//只接收一个栏目ID
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$orderby = empty($attr['orderby'])? 'id DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];
		$keyword = empty($attr['keyword'])? '': trim($attr['keyword']);

		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%页' : htmlspecialchars_decode($attr['pagetheme']);


		$flag = flag2sum($flag);

		$str = <<<str
<?php
	\$_typeid = $typeid;
	\$_keyword = "$keyword";
	if (\$_typeid>0) {
		import('Class.Category', APP_PATH);
		\$_selfcate = Category::getSelf(getCategory(), \$_typeid);
		if (\$_selfcate) {
			\$_tablename = strtolower(\$_selfcate['tablename']);
			\$ids = Category::getChildsId(getCategory(), \$_typeid, true);

			\$where = array('special.status' => 0, 'special.cid'=> array('IN',\$ids));
		}else {
			\$_typeid = 0;
		}

	}
	if (\$_typeid == 0) {
		\$where = array('special.status' => 0);

	}

	if (\$_keyword != '') {
		\$where['special.title'] = array('like','%'.\$_keyword.'%');
	}


	if ($flag > 0) {
		\$where['_string'] = 'special.flag & $flag = $flag ';
	}


	//分页
	if ($pagesize > 0) {

		import('Class.Page', APP_PATH);
		\$count = D('SpecialView')->where(\$where)->count();

		\$thisPage = new Page(\$count, $pagesize);

		\$ename = I('e', '', 'htmlspecialchars,trim');
		if (!empty(\$ename) && C('URL_ROUTER_ON') == true) {
			\$thisPage->url = ''.\$ename. '/p';
		}
		//设置显示的页数
		\$thisPage->rollPage = $pageroll;
		\$thisPage->setConfig('theme',"$pagetheme");
		\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
		\$page = \$thisPage->show();

	}else {
		\$limit = "$limit";
	}

	\$_spelist = D('SpecialView')->nofield('content')->where(\$where)->order("$orderby")->limit(\$limit)->select();
	if (empty(\$_spelist)) {
		\$_spelist = array();
	}


	foreach(\$_spelist as \$autoindex => \$spelist):

	if ((\$spelist['flag'] & B_JUMP)  && !empty(\$spelist['jumpurl'])) {
        \$spelist['url'] = \$spelist['jumpurl'];
    }else {
    	//开启路由
	    if(C('URL_ROUTER_ON') == true) {
	        \$spelist['url'] = U('Special/'.\$spelist['id'],'');
	    }else {
	        \$spelist['url']  = U('Special/shows', array('id'=> \$spelist['id']));

	    }

	    //\$spelist['url'] = getContentUrl(\$spelist['id'], \$spelist['cid'], \$spelist['ename'], \$_jumpflag, \$spelist['jumpurl']);
    }



	if($titlelen) \$spelist['title'] = str2sub(\$spelist['title'], $titlelen, 0);
	if($infolen) \$spelist['description'] = str2sub(\$spelist['description'], $infolen, 0);

?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}



	//当前栏目名称
	public function _type($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'artlist');
		$typeid = empty($attr['typeid'])? 0 : intval($attr['typeid']);
		if ($typeid == 0) {
			$typeid = $attr['typeid'];
		}
		$str = <<<str
<?php

	import('Class.Category', APP_PATH);
	\$type = Category::getSelf(getCategory(0), $typeid);
	\$type['url'] = getUrl(\$type);


?>
str;
		$str .= $content;
		return $str;

	}

	// 应该是获得指定的栏目信息
	public function _catlistx($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'catlistx');
		$typeid = !isset($attr['typeid']) || $attr['typeid'] == '' ? -1 : trim($attr['typeid']);//只接收一个栏目ID
		$type = empty($attr['type'])? 'son' : $attr['type'];//son表示下级栏目,self表示同级栏目,top顶级栏目(top忽略typeid)
		$flag = empty($attr['flag']) ? 0: intval($attr['flag']);//0(不显示链接和单页),1(全部显示),2
		$orderby = empty($attr['orderby'])? 'id DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$modelid = empty($attr['modelid']) ? 0: intval($attr['modelid']);
		// $cp = $attr['cp'] == 0 ? 1 : intval($cp);
		// $cp = empty($attr['cp']) ? 1: intval($attr['cp']);
		// 用上面的语句开始怎么都得不到cp 于是改用这句 竟然可以得到 不明白
		$cp = !isset($attr['cp']) || $attr['cp'] == '' ? -1 : trim($attr['cp']);
		$length = empty($attr['length']) ? 0: intval($attr['length']);
		$id = !isset($attr['id']) || $attr['id'] == '' ? -1 : trim($attr['id']);
		$str = <<<str
<?php
	\$_typeid = intval($typeid);
	\$_type = "$type";
	\$_cp = intval($cp);
	\$_length = intval($length);
	// echo $limit;
	// echo \$_cp;
	// echo \$attr['cp'];
	// echo \$_length;
	\$_temp = explode(',', $limit);
	// dump(\$_temp);
	\$_temp[0] = \$_temp[0] > 0? \$_temp[0] : 10;
	if (isset(\$_temp[1]) && intval(\$_temp[1]) > 0) {
		\$_limit[0] = \$_temp[0];
		\$_limit[1] = intval(\$_temp[1]);
	}else {
		\$_limit[0] = 0;
		\$_limit[1] = \$_temp[0];
	}
	// dump(\$_limit);

	if(\$_typeid == -1) \$_typeid = I('cid', 0, 'intval');
	// \$__catlist = getCategory(1);
	// dump(\$__catlist);

	\$__catlistx = Category::getChilds(getCategory(0),\$_typeid);
	// dump(\$__catlistx);die;
	if (\$_length) {
	\$i = 0;
	// echo count(\$__catlist);
	\$_ccount = count(\$__catlistx);
	\$_pnum = \$_ccount/\$_length;
	// echo \$_pnum;
	\$_pdot = \$_ccount%\$_length;
	// echo \$_pdot;
	\$_carr[0] = \$_cp*\$_length - \$_length;
	// echo \$_carr[0];
	\$_carr[1] = \$_cp*\$_length;
	foreach (\$__catlistx as \$k => \$v) {
		// echo \$i;
		// echo \$_limit[0];
		// echo \$_limit[1];
		if(\$i<\$_carr[0]||\$i>=\$_carr[1]){
			// echo \$i;
			// array_splice(\$__catlist,\$i,1);
			unset(\$__catlistx[\$i]);
		};
		\$i++;
		// echo \$i;
	};
	// array_splice(\$__catlist,2,2);
	// dump(\$__catlist);
}
// dump(\$__catlistx);die;


	import('Class.Category', APP_PATH);
	if ($modelid) {
		\$__catlist = Category::getLevelOfModelId(\$__catlistx, $modelid);
	}


	if ($flag == 0) {
		//where array('status' => 1, 'type' => 0 , 'modelid' => array('neq',2));//2是单页模型
		\$__catlistx = Category::clearPageAndLink(\$__catlistx);
	}
	// dump(\$__catlistx);die;
	//\$type为top,忽略$typeid
	if(\$_typeid == 0 || \$_type == 'top') {
		\$_catlist  = Category::toLayer(\$__catlistx);
	}else {
		//同级分类
		if (\$_type == 'self') {
			// \$_typeinfo  = Category::getSelf(\$__catlistx, \$_typeid );
			\$_typeinfo  = Category::getSelf(getCategory(0), \$_typeid );
			// dump(\$_typeinfo);
			if (\$_typeinfo['pid'] != 0) {
				\$_catlistx  = Category::toLayer(getCategory(0), 'child', \$_typeinfo['pid']);
			}
			// dump(\$_catlist);
		}else {
			//son，子类列表
			\$_catlistx  = Category::toLayer(\$__catlistx, 'child', \$_typeid);
			// dump(\$_catlist);die;
		}
	}

	foreach (\$__catlistx as \$autoindex => \$catlistx) {
		if (\$autoindex < \$_limit[0]) {
			continue;
		}
		if (\$autoindex >= (\$_limit[1]+\$_limit[0])) {
			break;
		}
		\$__catlistx[\$autoindex]['url'] = getUrl(\$catlistx);
	}

	// dump(\$__catlistx);die;
?>
str;

	// $str .= $content;
	return $str;

	}

	//导航
	public function _catlist($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'catlist');
		$typeid = !isset($attr['typeid']) || $attr['typeid'] == '' ? -1 : trim($attr['typeid']);//只接收一个栏目ID
		$type = empty($attr['type'])? 'son' : $attr['type'];//son表示下级栏目,self表示同级栏目,top顶级栏目(top忽略typeid)
		$flag = empty($attr['flag']) ? 0: intval($attr['flag']);//0(不显示链接和单页),1(全部显示),2
		$orderby = empty($attr['orderby'])? 'id DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$modelid = empty($attr['modelid']) ? 0: intval($attr['modelid']);
		// $cp = $attr['cp'] == 0 ? 1 : intval($cp);
		// $cp = empty($attr['cp']) ? 1: intval($attr['cp']);
		// 用上面的语句开始怎么都得不到cp 于是改用这句 竟然可以得到 不明白
		$cp = !isset($attr['cp']) || $attr['cp'] == '' ? -1 : trim($attr['cp']);
		$length = empty($attr['length']) ? 0: intval($attr['length']);
		$id = !isset($attr['id']) || $attr['id'] == '' ? -1 : trim($attr['id']);
		$str = <<<str
<?php
	\$_typeid = intval($typeid);
	\$_type = "$type";
	\$_cp = intval($cp);
	\$_length = intval($length);
	// echo $limit;
	// echo \$_cp;
	// echo \$attr['cp'];
	// echo \$_length;
	\$_temp = explode(',', $limit);
	// dump(\$_temp);
	\$_temp[0] = \$_temp[0] > 0? \$_temp[0] : 10;
	if (isset(\$_temp[1]) && intval(\$_temp[1]) > 0) {
		\$_limit[0] = \$_temp[0];
		\$_limit[1] = intval(\$_temp[1]);
	}else {
		\$_limit[0] = 0;
		\$_limit[1] = \$_temp[0];
	}
	// dump(\$_limit);

	if(\$_typeid == -1) \$_typeid = I('cid', 0, 'intval');
	// \$__catlist = getCategory(1);
	// dump(\$__catlist);

	\$__catlist = Category::getChilds(getCategory(0),\$_typeid);
	if (\$_length) {
	\$i = 0;
	// echo count(\$__catlist);
	\$_ccount = count(\$__catlist);
	\$_pnum = \$_ccount/\$_length;
	// echo \$_pnum;
	\$_pdot = \$_ccount%\$_length;
	// echo \$_pdot;
	\$_carr[0] = \$_cp*\$_length - \$_length;
	// echo \$_carr[0];
	\$_carr[1] = \$_cp*\$_length;
	foreach (\$__catlist as \$k => \$v) {
		// echo \$i;
		// echo \$_limit[0];
		// echo \$_limit[1];
		if(\$i<\$_carr[0]||\$i>=\$_carr[1]){
			// echo \$i;
			// array_splice(\$__catlist,\$i,1);
			unset(\$__catlist[\$i]);
		};
		\$i++;
		// echo \$i;
	};
	// array_splice(\$__catlist,2,2);
	// dump(\$__catlist);
}


	import('Class.Category', APP_PATH);
	if ($modelid) {
		\$__catlist = Category::getLevelOfModelId(\$__catlist, $modelid);
	}


	if ($flag == 0) {
		//where array('status' => 1, 'type' => 0 , 'modelid' => array('neq',2));//2是单页模型
		\$__catlist = Category::clearPageAndLink(\$__catlist);
	}

	//\$type为top,忽略$typeid
	if(\$_typeid == 0 || \$_type == 'top') {
		\$_catlist  = Category::toLayer(\$__catlist);
	}else {
		//同级分类
		if (\$_type == 'self') {
			// \$_typeinfo  = Category::getSelf(\$__catlist, \$_typeid );
			\$_typeinfo  = Category::getSelf(getCategory(0), \$_typeid );
			// dump(\$_typeinfo);
			if (\$_typeinfo['pid'] != 0) {
				\$_catlist  = Category::toLayer(getCategory(0), 'child', \$_typeinfo['pid']);
			}
			// dump(\$_catlist);
		}else {
			//son，子类列表
			\$_catlist  = Category::toLayer(\$__catlist, 'child', \$_typeid);
			// dump(\$_catlist);
		}
	}
	\$countx = count(\$_catlist);
	// dump(\$countx);die;

	foreach(\$_catlist as \$autoindex => \$catlist):
	if(\$autoindex < \$_limit[0]) continue;
	if(\$autoindex >= (\$_limit[1]+\$_limit[0])) break;
	\$catlist['url'] = getUrl(\$catlist);
?>
str;

	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}

	//导航
	public function _navlist($attr, $content) {
		//$attr = $this->parseXmlAttr($attr, 'navlist');
		// echo 'hh';
		$attr = !empty($attr)? $this->parseXmlAttr($attr, 'navlist') : null;
		$typeid = $attr['typeid'] == '' ? -1 : intval($attr['typeid']);//不能用empty,0,'','0',会认为true
		$str = <<<str
<?php
	\$_typeid = $typeid;
	if(\$_typeid == -1) \$_typeid = I('cid', 0, 'intval');
	\$_navlist = getCategory(1);
	import('Class.Category', APP_PATH);
	if(\$_typeid == 0) {
		\$_navlist  = Category::toLayer(\$_navlist);
	}else {
		\$_navlist  = Category::toLayer(\$_navlist, 'child', \$_typeid);
	}
// dump(\$_navlist);
	foreach(\$_navlist as \$autoindex => \$navlist):
		\$navlist['url'] = getUrl(\$navlist);
?>
str;

	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;
	// return 'g';

	}


	//user list
	public function _userlist($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'userlist');
		$typeid = isset($attr['typeid']) ? trim($attr['typeid']) : 0;
		$typeid = trim($typeid) == '' ? 0 : $typeid;
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$orderby = empty($attr['orderby'])? 'id DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];



		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%页' : htmlspecialchars_decode($attr['pagetheme']);


		$str = <<<str
<?php
	\$_typeid = $typeid;
	if (\$_typeid>0 || substr(\$_typeid,0,1) == '$') {
		\$where = array('member.islock' => 0, 'member.groupid'=> \$_typeid);
	}else {
		\$where = array('member.islock' => 0);
	}

	//分页
	if ($pagesize > 0) {

		import('Class.Page', APP_PATH);
		\$count = D('MemberView')->where(\$where)->count();

		\$thisPage = new Page(\$count, $pagesize);

		//设置显示的页数
		\$thisPage->rollPage = $pageroll;
		\$thisPage->setConfig('theme',"$pagetheme");
		\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
		\$page = \$thisPage->show();
	}else {
		\$limit = "$limit";
	}


	\$_userlist = D('MemberView')->nofield('password,encrypt')->where(\$where)->order("$orderby")->limit(\$limit)->select();
	if (empty(\$_userlist)) {
		\$_userlist = array();
	}

	foreach(\$_userlist as \$autoindex => \$userlist):
	//开启路由
	if(C('URL_ROUTER_ON') == true) {
		\$userlist['url'] = U('u/'. \$userlist['id']);
	}else {
		\$userlist['url'] = U(GROUP_NAME.'/Public/user', array('id'=> \$userlist['id']));
	}


?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}

	//announce list
	public function _announcelist($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'announcelist');
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$orderby = empty($attr['orderby'])? 'starttime DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];


		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%页' : htmlspecialchars_decode($attr['pagetheme']);



		$str = <<<str
<?php

	\$where = array('endtime' => array('gt',time()));


	//分页
	if ($pagesize > 0) {

		import('Class.Page', APP_PATH);
		\$count = M('announce')->where(\$where)->count();

		\$thisPage = new Page(\$count, $pagesize);


		//设置显示的页数
		\$thisPage->rollPage = $pageroll;
		\$thisPage->setConfig('theme',"$pagetheme");
		\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
		\$page = \$thisPage->show();
	}else {
		\$limit = "$limit";
	}


	\$_announcelist = M('announce')->where(\$where)->order("$orderby")->limit(\$limit)->select();
	if (empty(\$_announcelist)) {
		\$_announcelist = array();
	}

	foreach(\$_announcelist as \$autoindex => \$announcelist):

	if($titlelen) \$announcelist['title'] = str2sub(\$announcelist['title'], $titlelen, 0);
	if($infolen) \$announcelist['content'] = str2sub(strip_tags(\$announcelist['content']), $infolen, 0);//清除html再截取


?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}

	//friend Link list
	public function _flink($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'flink');
		$typeid = isset($attr['typeid']) ? trim($attr['typeid']) : 0;
		$typeid = trim($typeid) == '' ? 0 : $typeid;
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$orderby = empty($attr['orderby'])? 'sort ASC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];


		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%页' : htmlspecialchars_decode($attr['pagetheme']);



		$str = <<<str
<?php
	\$_typeid = $typeid;
	if (\$_typeid>0 || substr(\$_typeid,0,1) == '$') {
		\$where = array('ischeck'=> \$_typeid);
	}else {
		\$where = array('id' => array('gt',0));
	}

	//分页
	if ($pagesize > 0) {

		import('Class.Page', APP_PATH);
		\$count = M('link')->where(\$where)->count();

		\$thisPage = new Page(\$count, $pagesize);


		//设置显示的页数
		\$thisPage->rollPage = $pageroll;
		\$thisPage->setConfig('theme',"$pagetheme");
		\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
		\$page = \$thisPage->show();
	}else {
		\$limit = "$limit";
	}


	\$_flink = M('link')->where(\$where)->order("$orderby")->limit(\$limit)->select();
	if (empty(\$_flink)) {
		\$_flink = array();
	}

	foreach(\$_flink as \$autoindex => \$flink):



?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}


	//guestbook list
	public function _gbooklist($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'gbooklist');
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$orderby = empty($attr['orderby'])? 'id DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];


		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%页' : htmlspecialchars_decode($attr['pagetheme']);



		$str = <<<str
<?php
	\$where = array('id' => array('gt',0));

	//分页
	if ($pagesize > 0) {

		import('Class.Page', APP_PATH);
		\$count = M('guestbook')->where(\$where)->count();

		\$thisPage = new Page(\$count, $pagesize);


		//设置显示的页数
		\$thisPage->rollPage = $pageroll;
		\$thisPage->setConfig('theme',"$pagetheme");
		\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
		\$page = \$thisPage->show();
	}else {
		\$limit = "$limit";
	}


	\$_gbooklist = M('guestbook')->where(\$where)->order("$orderby")->limit(\$limit)->select();
	if (empty(\$_gbooklist)) {
		\$_gbooklist = array();
	}

	foreach(\$_gbooklist as \$autoindex => \$gbooklist):



?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}


	//Review list
	public function _reviewlist($attr, $content) {
		$attr = !empty($attr)? $this->parseXmlAttr($attr, 'reviewlist') : null;
		$modelid = !isset($attr['modelid']) || $attr['modelid'] == '' ? 0 : trim($attr['modelid']);
		$arcid = !isset($attr['arcid']) || $attr['arcid'] == '' ? 0 : trim($attr['arcid']);
		$type = empty($attr['type'])? 0 : intval($attr['type']);//显示形式
		$userid = !isset($attr['userid']) || $attr['userid'] == '' ? 0 : trim($attr['userid']);
		$orderby = empty($attr['orderby'])? 'id DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];

		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];
		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%页' : htmlspecialchars_decode($attr['pagetheme']);



		$str = <<<str
<?php
	\$_modelid = intval($modelid);
	\$_arcid = intval($arcid);
	\$_userid = intval($userid);


	\$where['_string'] = '1=1';
	if (\$_modelid > 0) {
		\$where['modelid'] = \$_modelid;
	}
	if (\$_arcid > 0) {
		\$where['postid'] = \$_arcid ;
	}

	if (\$_userid > 0) {
		\$where['userid'] = \$_userid ;
	}


	//树形风格，多维数组
	if ($type == 1) {
		\$where['pid'] = 0;
	}




	//分页
	if ($pagesize > 0) {

		import('Class.Page', APP_PATH);
		\$count = D('CommentView')->where(\$where)->count();

		\$thisPage = new Page(\$count, $pagesize);


		//设置显示的页数
		\$thisPage->rollPage = $pageroll;
		\$thisPage->setConfig('theme',"$pagetheme");
		\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
		\$page = \$thisPage->show();
	}else {
		\$limit = "$limit";
	}

	\$_reviewlist = D('CommentView')->where(\$where)->order("$orderby")->limit(\$limit)->select();
	if (!\$_reviewlist) {
		\$_reviewlist = array();
	}

	//$type ,pid >0
	if ($type == 1 && !empty(\$_reviewlist)) {
		\$pid_array = array();
		foreach (\$_reviewlist as \$k => \$v) {
			\$pid_array[] = \$v['id'];
			\$_reviewlist[\$k]['child'] = array();//后面就不用初始化
		}
		\$where = array('pid' => array('IN', \$pid_array));
		\$_review_child = D('CommentView')->where(\$where)->select();
		if (\$_review_child) {
			foreach (\$_reviewlist as \$k => \$v) {

				foreach (\$_review_child as \$k2 => \$v2) {
					if (\$v['id'] == \$v2['pid']) {
						\$_reviewlist[\$k]['child'][] = \$v2;
						unset(\$_review_child[\$k2]); //删除已经认领元素,减少内循环
					}
				}
			}
		}



	}

	foreach(\$_reviewlist as \$autoindex => \$reviewlist):



?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}

	//abc[ad]
	public function _abc($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'abc');
		$id = !isset($attr['id']) || $attr['id'] == '' ? 0 : trim($attr['id']);
		$limit = empty($attr['limit'])? '0' : $attr['limit'];

		$str = <<<str
<?php
	\$_id = intval($id);

	\$where = array('aid'=> \$_id, 'status' => 1);
	\$limit = "$limit";

	\$abc_cate = M('abc')->find(\$_id);
	if (\$abc_cate) {
		\$limit = empty(\$limit) ? \$abc_cate['num'] : \$limit;
		\$where['starttime'] = array('lt', time());
		\$where['endtime'] = array('gt', time());
		\$_abc = M('abcDetail')->where(\$where)->order('sort')->limit(\$limit)->select();
	}else {
		\$_abc = array();
	}




	if (empty(\$_abc)) {
		\$_abc = array();
	}

	foreach(\$_abc as \$autoindex => \$abc):
		\$abc['width'] = \$abc_cate['width'];
		\$abc['height'] = \$abc_cate['height'];



?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}

	//ad[ad]
	public function _ad($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'ad');
		$id = !isset($attr['id']) || $attr['id'] == '' ? 0 : trim($attr['id']);
		$flag = empty($attr['flag'])? '0' : $attr['flag'];

		$str = <<<str
<?php
	\$_id = intval($id);

	if (!empty(\$_id)) {

		//js输出
		if ($flag) {
			echo '<script type="text/javascript" src="'.U(GROUP_NAME. '/Abc/shows', array('id' => \$_id, 'flag' => $flag)).'"></script>';
		}else {
			echo getAbc(\$_id, $flag);
		}

	}


?>
str;
	return $str;

	}



	//iteminfo List
	public function _iteminfo($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'iteminfo');
		$name = isset($attr['name']) ? trim($attr['name']) : '';
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$limit = empty($attr['limit'])? '10' : $attr['limit'];

		$str = <<<str
<?php

	if ("$name" == '') {
		\$_iteminfo= array();
	}else {
		\$_iteminfo = getArrayOfItem("$name");
	}



	foreach(\$_iteminfo as \$autoindex => \$iteminfo):
	if($titlelen>0) \$iteminfo = str2sub(\$iteminfo, $titlelen);

?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}


	public function _block($attr, $content) {
		$attr = !empty($attr)? $this->parseXmlAttr($attr, 'block') : null;
		$name = isset($attr['name']) ? $attr['name'] : '';
		$infolen = empty($attr['infolen']) ? 0 : intval($attr['infolen']);
		$textflag = empty($attr['textflag']) ? 0 : 1;

		$name = trim(htmlspecialchars($name));
		$str =<<<str
<?php

	\$block = getBlock("$name");
	\$block_content = '';
	if (\$block) {
		if (\$block['blocktype'] == 2) {
			if (!$textflag) {
				\$block_content = '<img src="'. \$block['content'] .'" />';
			}else {
				\$block_content = \$block['content'];
			}

		}else {
			if($infolen) {
				\$block_content = str2sub(strip_tags(\$block['content']), $infolen, 0);//清除html再截取
			}else {
				\$block_content = \$block['content'];
			}
		}
	}
	echo \$block_content;


?>
str;

		return $str;
	}

	//for blog
	public function _datelist($attr, $content) {
		$attr = !empty($attr)? $this->parseXmlAttr($attr, 'datelist') : null;
		$modelid = empty($attr['modelid']) ? 1 : $attr['modelid'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];

		$str =<<<str
<?php
	\$_modelid = intval($modelid);
	\$_datelist = getDateList(\$_modelid);
	\$_temp = explode(',', "$limit");
	\$_temp[0] = \$_temp[0] > 0? \$_temp[0] : 10;
	if (isset(\$_temp[1]) && intval(\$_temp[1]) > 0) {
		\$_limit[0] = \$_temp[0];
		\$_limit[1] = intval(\$_temp[1]);
	}else {
		\$_limit[0] = 0;
		\$_limit[1] = \$_temp[0];
	}


	foreach(\$_datelist as \$autoindex => \$datelist):
	if(\$autoindex < \$_limit[0]) continue;
	if(\$autoindex >= (\$_limit[1]+\$_limit[0])) break;
	\$datelist['url'] = U('Archive/index', array('modelid' => \$_modelid, 'year' => \$datelist['arc_year'],'month' => \$datelist['arc_month']));
?>
str;

	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}


	//archive for blog
	public function _archivelist($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'archivelist');
		$modelid = empty($attr['modelid'])? 1 : $attr['modelid'];//1 == artlist
		$year = empty($attr['year'])? 0 : $attr['year'];
		$month = empty($attr['month'])? 0 : $attr['month'];
		$titlelen = empty($attr['titlelen'])? 0 : intval($attr['titlelen']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$orderby = empty($attr['orderby'])? 'publishtime DESC' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];

		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%页' : htmlspecialchars_decode($attr['pagetheme']);


		$str = <<<str
<?php
	\$_modelid	= intval($modelid);
	\$_year		= intval($year);
	\$_month	= intval($month);

	\$_tablename = M('model')->where(array('id' => \$_modelid))->getField('tablename');


	if (!empty(\$_tablename) && \$_tablename != 'page') {

		\$where = array(\$_tablename.'.status' => 0);
		if ($year > 0 && \$_month > 0) {
			//\$firstday = date('Y-m-01', strtotime(now()));
			\$_firstday = "\$_year-\$_month-1 00:00:00";
			\$_lastday = date('Y-m-d 23:59:59', strtotime("\$_firstday +1 month -1 day"));
			\$where['publishtime'] = array('between',array(strtotime(\$_firstday),strtotime(\$_lastday)));

		}
		//分页
		if ($pagesize > 0) {

			import('Class.Page', APP_PATH);
			\$count = D2('ArcView',"\$_tablename")->where(\$where)->count();
			\$thisPage = new Page(\$count, $pagesize);
			\$ename = I('e', '', 'htmlspecialchars,trim');

			//设置显示的页数
			\$thisPage->rollPage = $pageroll;
			\$thisPage->setConfig('theme',"$pagetheme");
			\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
			\$page = \$thisPage->show();

		}else {
			\$limit = "$limit";
		}

		\$_archivelist = D2('ArcView',"\$_tablename")->where(\$where)->order("$orderby")->limit(\$limit)->select();
		if (empty(\$_archivelist)) {
			\$_archivelist = array();
		}
	}else {
		\$_archivelist = array();
	}
	\$archivelist_time = array();
	foreach(\$_archivelist as \$autoindex => \$archivelist):

	\$_jumpflag = (\$archivelist['flag'] & B_JUMP) == B_JUMP? true : false;
	\$archivelist['url'] = getContentUrl(\$archivelist['id'], \$archivelist['cid'], \$archivelist['ename'], \$_jumpflag, \$archivelist['jumpurl']);
	if($titlelen) \$archivelist['title'] = str2sub(\$archivelist['title'], $titlelen, 0);
	if($infolen) \$archivelist['description'] = str2sub(\$archivelist['description'], $infolen, 0);
	\$_tmp_year = date('Y', \$archivelist['publishtime']);
	\$_tmp_month = date('m', \$archivelist['publishtime']);

	if (isset(\$archivelist_time['year']) && \$_tmp_year == \$archivelist_time['year'] && \$_tmp_month == \$archivelist_time['month']) {
		\$archivelist_time['flag'] = 0;
	}else{

		\$archivelist_time = array('year' => \$_tmp_year,
								'month' => \$_tmp_month,
								'flag' => 1);
	}
?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}


	//通用数据表查询
	public function _datatable($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'datatable');
		////非debug参属性参数只处理 一次
		$table = empty($attr['table'])? 'article': $attr['table'];
		$field = empty($attr['field'])? '': $attr['field'];
		$joinwhere = empty($attr['joinwhere'])? '': $attr['joinwhere'];	//where:LEFT
		$where = empty($attr['where'])? '': $attr['where'];
		$orderby = empty($attr['orderby'])? '' : $attr['orderby'];
		$limit = empty($attr['limit'])? '10' : $attr['limit'];
		$pagesize = empty($attr['pagesize'])? '0' : $attr['pagesize'];

		$table = string2filter($table, '|');
		$pageroll = empty($attr['pageroll'])? '5' : $attr['pageroll'];
		$pagetheme = empty($attr['pagetheme'])? ' %upPage% %linkPage% %downPage% 共%totalPage%页' : htmlspecialchars_decode($attr['pagetheme']);//新增加20140513

		$str = <<<str
<?php
	\$_table = explode('|', "$table");
	\$_field = explode('|', "$field");
	\$_joinwhere = array_filter(explode('|', "$joinwhere"));//表个数-1//清除空数组
	sort(\$_joinwhere); //sort()重建索引
	\$_jointype = 'INNER';//连接方式[INNER|LEFT|RIGHT]，默认是INNER
	\$where = "$where";

	if (empty(\$where)) {
		\$where = ' 1 = 1';
	}


	\$_field_array = array();
	foreach (\$_table as \$k => \$v) {
		if (strtolower(\$v) == 'admin') {
			\$_table = array();
			break;//不允许查询admin
		}
		\$_field_temp = empty(\$_field[\$k])? array('*') : explode(',', \$_field[\$k]);
		foreach (\$_field_temp as \$k2 => \$v2) {
			\$v2 = trim(\$v2);
			//strpos是否包含count(),sum()等函数，标志为:(
			\$_field_temp[\$k2] = strpos(\$v2, '(')? \$v2 : \$v. '.'. \$v2;
		}
		\$_field_array = array_merge(\$_field_array, \$_field_temp);

		\$_table[\$k] = C('DB_PREFIX').\$v.' '.\$v;
	}

	if (!empty(\$_table)) {

		\$_field_str = implode(',', \$_field_array);
		if (!empty(\$_joinwhere)) {
			foreach (\$_joinwhere as \$k => \$v) {
				\$_temp = explode(':', \$v);
				if (isset(\$_temp[1]) && in_array(strtoupper(\$_temp[1]), array('INNER','LEFT','RIGHT'))) {
					\$_jointype = strtoupper(\$_temp[1]);
				}
				\$_jointype .= ' JOIN';
				\$_joinwhere[\$k] = \$_jointype.' '.\$_table[\$k+1].' ON '.\$_temp[0];
			}
		}



		//分页
		if ($pagesize > 0) {

			import('Class.Page', APP_PATH);
			if (count(\$_table) == 1) {
				\$count = M()->table(\$_table[0])->where(\$where)->count();
			}else {
				\$count = M()->table(\$_table[0])->join(\$_joinwhere)->where(\$where)->count();
			}
			\$thisPage = new Page(\$count, $pagesize);


			//设置显示的页数

			\$thisPage->rollPage = $pageroll;
			\$thisPage->setConfig('theme',"$pagetheme");
			\$limit = \$thisPage->firstRow. ',' .\$thisPage->listRows;
			\$page = \$thisPage->show();
		}else {
			\$limit = "$limit";
		}

		if (count(\$_table) == 1) {
			\$_datatable = M()->table(\$_table[0])->field(\$_field_str)->where(\$where)->order("$orderby")->limit(\$limit)->select();
		}else {
			\$_datatable = M()->table(\$_table[0])->field(\$_field_str)->join(\$_joinwhere)->
			where(\$where)->order("$orderby")->limit(\$limit)->select();
		}

	}

	if (empty(\$_datatable)) {
		\$_datatable = array();
	}


	foreach(\$_datatable as \$autoindex => \$datatable):

?>
str;
	$str .= $content;
	$str .='<?php endforeach;?>';
	return $str;

	}



	//调用栏目或内容的指定字段
	public function _field($attr, $content) {
		$attr = $this->parseXmlAttr($attr, 'field');
		$typeid = !isset($attr['typeid']) || $attr['typeid'] == '' ? 0 : trim($attr['typeid']);//只接收一个栏目ID
		$artid = empty($attr['artid'])? 0 : intval($attr['artid']);
		$infolen = empty($attr['infolen'])? 0 : intval($attr['infolen']);
		$name = empty($attr['name'])? '': trim($attr['name']);
		$imgindex = empty($attr['imgindex'])? 0 : intval($attr['imgindex']);
		$imgwidth = empty($attr['imgwidth'])? 0 : intval($attr['imgwidth']);
		$imgheight = empty($attr['imgheight'])? 0 : intval($attr['imgheight']);



		$str = <<<str
<?php
	\$_typeid = $typeid;
	\$_fieldname = "$name";
	\$_tempstr = '';
	if (\$_typeid>0 && !empty(\$_fieldname)) {
		import('Class.Category', APP_PATH);
		\$_selfcate = Category::getSelf(getCategory(), \$_typeid);
		\$_tablename = strtolower(\$_selfcate['tablename']);

		if (\$_tablename == 'page' || $artid == 0) {
			\$_tempstr = M('category')->where(array('id' => \$_typeid))->getField(\$_fieldname);
		}elseif (!empty(\$_selfcate )) {
			\$_tempstr = M(\$_tablename)->where(array('id' => $artid))->getField(\$_fieldname);
			if (\$_fieldname == 'pictureurls' || \$_fieldname == 'litpic') {
				if (empty(\$_tempstr)) {
					\$_tempstr = get_picture('', $imgwidth, $imgheight);
				}elseif (\$_fieldname == 'litpic') {
					\$_tempstr = get_picture(\$_tempstr, $imgwidth, $imgheight);
				}elseif (\$_fieldname == 'pictureurls') {
						\$_pictureurls_arr = explode('|||', \$_tempstr);
						\$_pictureurls  = array();
						foreach (\$_pictureurls_arr as \$v) {
							\$temp_arr = explode('$$$', \$v);
							if (!empty(\$temp_arr[0])) {
								\$_pictureurls[] = array(
									'url' => \$temp_arr[0],
									'alt' => \$temp_arr[1]
								);
							}
						}
					if(!isset(\$_pictureurls[$imgindex]['url'])) \$_pictureurls[$imgindex]['url'] = '';
					\$_tempstr = get_picture(\$_pictureurls[$imgindex]['url'],$imgwidth, $imgheight);
				}
			}

		}
		if ($infolen >0 && !empty(\$_tempstr)) {
			\$_tempstr = str2sub(strip_tags(\$_tempstr), $infolen, 0);//清除html再截取
		}

	}

	echo \$_tempstr;

?>
str;

	return $str;

	}


	/**/
	public function _position($attr, $content) {
		//非debug参数只处理 一次
		$attr = !empty($attr)?$this->parseXmlAttr($attr, 'position') : null;
		$typeid = !isset($attr['typeid']) || $attr['typeid'] == '' ? -1: trim($attr['typeid']);//只接收一个栏目ID
		$ismobile = empty($attr['ismobile'])? 0 : 1;
		$sname = isset($attr['sname'])? trim($attr['sname']) : '';
		$surl = isset($attr['surl'])? trim($attr['surl']) : '';
		$delimiter = isset($attr['delimiter'])? trim($attr['delimiter']) : '';

		$str =<<<str
<?php
		\$_sname = "$sname";
		\$_typeid = $typeid;
		//debug关闭后,typeid值不变
		//没有下面这步，非debug下，会写死了
		if(\$_typeid == -1) \$_typeid = I('cid', 0, 'intval');

		if (\$_typeid == 0 &&  \$_sname == '') {
			\$_sname = isset(\$title) ? \$title : '';
		}
		echo getPosition(\$_typeid, \$_sname, "$surl", $ismobile, "$delimiter");

?>
str;

		return $str;
	}


	public function _prev($attr, $content) {
		$attr = !empty($attr)? $this->parseXmlAttr($attr, 'prev') : null;
		$titlelen = empty($attr['titlelen']) ? 0 : intval($attr['titlelen']);
		$str =<<<str
<?php

	if(empty(\$content['id']) || empty(\$content['cid']) || empty(\$cate['tablename']) ) {
		echo '无记录';
	} else {
		//上一条记录
        \$_vo= D2('ArcView', \$cate['tablename'])->where(array(\$cate['tablename'].'.status' => 0, 'cid' => \$content['cid'], 'id' => array('lt',\$content['id'])))->order('id desc')->find();

        if (\$_vo) {

			\$_jumpflag = (\$_vo['flag'] & B_JUMP) == B_JUMP? true : false;
        	\$_vo['url'] = getContentUrl(\$_vo['id'], \$_vo['cid'], \$_vo['ename'], \$_jumpflag, \$_vo['jumpurl']);
			if($titlelen) \$_vo['title'] = str2sub(\$_vo['title'], $titlelen, 0);
			// echo '<a href="'. \$_vo['url'] .'">'. \$_vo['title'] .'</a>';
			\$prev['url']   = \$_vo['url'];
			\$prev['title'] = \$_vo['title'];
			\$prev['litpic'] = \$_vo['litpic'];
        } else {
        	// echo '第一篇';
        	\$prev['url']   = '';
			\$prev['title'] = '';
			\$prev['litpic'] = '';
        }
	}

?>
str;

		return $str;
	}

	public function _next($attr, $content) {
		$attr = !empty($attr)? $this->parseXmlAttr($attr, 'next') : null;
		$titlelen = empty($attr['titlelen']) ? 0 : intval($attr['titlelen']);
		$str =<<<str
<?php
	if(empty(\$content['id']) || empty(\$content['cid']) || empty(\$cate['tablename']) ) {
		echo '无记录';
	} else {
		//下一条记录
        \$_vo= D2('ArcView',\$cate['tablename'])->where(array(\$cate['tablename'].'.status' => 0, 'cid' => \$content['cid'], 'id' => array('gt',\$content['id'])))->order('id ASC')->find();

        if (\$_vo) {

			\$_jumpflag = (\$_vo['flag'] & B_JUMP) == B_JUMP? true : false;
        	\$_vo['url'] = getContentUrl(\$_vo['id'], \$_vo['cid'], \$_vo['ename'], \$_jumpflag, \$_vo['jumpurl']);
			if($titlelen) \$_vo['title'] = str2sub(\$_vo['title'], $titlelen, 0);
			// echo '<a href="'. \$_vo['url'] .'">'. \$_vo['title'] .'</a>';
			\$next['url']   = \$_vo['url'];
			\$next['title'] = \$_vo['title'];
			\$next['litpic'] = \$_vo['litpic'];
        } else {
        	// echo '最后一篇';
        	\$next['url']   = '';
        	\$next['title'] = '最后一篇';
        	\$next['litpic'] = '';
        }
	}

?>
str;

		return $str;
	}

	//针对内容页
	public function _click($attr, $content) {

		$str =<<<str
<?php

	if (!empty(\$id) && !empty(\$tablename)) {


		//开启静态缓存
		if (C('HTML_CACHE_ON') == true) {
			echo '<script type="text/javascript" src="'.U(GROUP_NAME. '/Public/click', array('id' => \$id, 'tn' => \$tablename)).'"></script>';
		}
		else {
			echo getClick(\$id, \$tablename);
		}


	}

?>
str;
		return $str;
	}

	//Online[QQ]
	public function _online($attr, $content) {

		if (C('cfg_online_mode') != 1) {
			return '';
		}

		$str =<<<str
<?php
	echo '<script type="text/javascript" src="'.U(GROUP_NAME. '/Public/online').'"></script>';
?>

str;
		return $str;
	}


	public function _sitename($attr, $content) {
		return C('cfg_webname');
	}

	public function _sitetitle($attr, $content) {
		return C('cfg_webtitle');
	}

	public function _siteurl($attr, $content) {
		return C('cfg_weburl');
	}

	public function _sitekeywords($attr, $content) {
		return C('cfg_keywords');
	}

	public function _sitedescription($attr, $content) {
		return C('cfg_description');
	}
	public function _beian($attr, $content) {
		return C('cfg_beian');
	}
	public function _address($attr, $content) {
		return C('cfg_address');
	}

	public function _phone($attr, $content) {
		return C('cfg_phone');
	}
	public function _fax($attr, $content) {
		return C('cfg_fax');
	}
	public function _qq($attr, $content) {
		return C('cfg_qq');
	}
	public function _email($attr, $content) {
		return C('cfg_email');
	}
	public function _copyright($attr, $content) {
		return C('cfg_powerby');
	}
	public function _swturl($attr, $content) {
		return C('cfg_swturl');
	}

	public function _searchurl($attr, $content) {
		return U('Search/index');
	}


	public function _gbookurl($attr, $content) {
		return U('Guestbook/index');
	}

	public function _gbookaddurl($attr, $content) {
		return U('Guestbook/add');
	}
	public function _vcodeurl($attr, $content) {

		return U(GROUP_NAME.'/Public/verify', '');//解决IIS伪，问题
		return U('Public/verify', '');
	}

	public function _mobileauto($attr, $content) {
		$attr = !empty($attr)? $this->parseXmlAttr($attr, 'mobileauto') : null;
		$flag = empty($attr['flag']) ? 0 : intval($attr['flag']);

		$str =<<<str
<?php
		\$_flag = $flag;
		switch (\$_flag) {
			case 0:
				if (C('cfg_mobile_auto') == 1) {
					//开启静态缓存
					if (C('HTML_CACHE_ON') == true) {
						echo '<script type="text/javascript" src="__DATA__/static/js/mobile_auto.js"></script>';
					}
					else {
						goMobile();
					}
				}
				break;
			case 1:
				goMobile();
				break;
			case 2:
				if (C('cfg_mobile_auto') == 1) {
					echo '<script type="text/javascript" src="__DATA__/static/js/mobile_auto.js"></script>';
				}
				break;

			default:
				break;
		}


?>
str;

		return $str;
	}


}


?>