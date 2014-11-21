<?php
//控制器：IndexAction
class ShowAction extends Action{
	//方法：index
	public function index(){
		$id = I('id', 0, 'intval');
		$cid = I('cid', 0,'intval');
		$ename = I('e', '', 'htmlspecialchars,trim');

		if ($id == 0) {
			$this->error('参数错误');
		}

		// $cate = getCategory(1);
		$cate = getCategory(0);
		// dump($cate);
		import('Class.Category', APP_PATH);	
		
		if (!empty($ename)) {//ename不为空
			$self = Category::getSelfByEName($cate, $ename);//当前栏目信息
		}else {//$cid来判断

			$self = Category::getSelf($cate, $cid);//当前栏目信息
			// echo $cid;
			$same = Category::getSameCate($cate, $cid);
		}		

		if(empty($self)) {
			$this->error('栏目不存在');
		}


		$cid = $self['id'];//当使用ename获取的时候，就要重新给$cid赋值，不然0
		$_GET['cid'] = $cid;//栏目ID
		$self['url'] = getUrl($self);

		//访问权限
		$groupid = intval(get_cookie('groupid'));
		$groupid = empty($groupid) ? 1 : $groupid;//1为游客
		//判断访问权限
		$access = M('categoryAccess')->where(array('catid' => $cid, 'flag' => 0 , 'action' => 'visit'))->getField('roleid', true);
		//权限存在，则判断
		if (!empty($access) && !in_array($groupid, $access)) {
			$this->error('您没有访问该信息的权限！');
		}

				
		$patterns = array('/^Show_/', '/.html$/');
		$replacements = array('', '');
		$template_show = preg_replace($patterns, $replacements, $self['template_show']);
		if (empty($template_show)) {
			$this->error('模板不存在');
		}

		$content = M($self['tablename'])->where(array('status' => 0, 'id' => $id))->find();
		// dump($content);die;
		if (empty($content)) {
			$this->error('内容不存在');
		}

		//当前url
		$_jumpflag = ($content['flag'] & B_JUMP) == B_JUMP? true : false;
		$content['url'] = getContentUrl($content['id'], $content['cid'], $self['ename'], $_jumpflag, $content['jumpurl']);

		$this->cate = $self;
		// dump($same);
		// 获得栏目的url 在 common/common.php 106
		foreach ($same as $k => $v) {
			$same[$k]['url'] = getUrl($v);
		}
		// $same['url'] = getUrl($same);
		// dump($same);die;
		$this->same = $same;
		$this->title = $content['title'];
		$this->keywords = $content['keywords'];
		$this->description = empty($content['description'])? $content['title']: $content['description'];
		$this->commentflag = $content['commentflag'];//是否允许评论,debug,以后加上个全局评价 $content['commentflag'] && CFG_Comment
		$this->tablename = $self['tablename'];
		$this->id = $id;
		$this->cid = $cid;
		// $this->article = $content;
		// dump($content['content']);
		// preg_match_all("/(src|src)=[\"|\'| ]{0,}((.*).(gif|jpg|jpeg|png|bmp))[\'|\"]/isu",$content['content'],$picArr);
		
		//正则表达式把图片的整个都获取出来了
		preg_match_all("/<img.*\>/isU", $content['content'], $imgArr);
		// $imgArr是所有的img标签 但下面只得到了第一个
		// 得到img src属性的正则
		$p = "#src=('|\")(.*)('|\")#isU";
		$picArr = array();
		foreach ($imgArr[0] as $k => $v) {
			// dump($v);
			preg_match_all($p, $v, $srcArr);
			$imgSrc = $srcArr[2][0];
			// dump($imgSrc);die;
			$picArr[$k]['src'] = $imgSrc;
		}
		// die;
		// $img = $imgArr[0][0];//图片
		// dump($imgArr);die;
		// $p = "#src=('|\")(.*)('|\")#isU";
		// 所有的src属性
		
		// dump($img1);die;
		//获取第一张图片路径
   		// $img_path =$img1[2][0];
		// if (!$img_path) {
    		// $img_path="images/nopic.jpg";
		//} //如果新闻中不存在图片，用默认的nopic.jpg替换 */
		// echo $img_path;die;
		// dump($picArr);die;
		$this->picArr = $picArr;
		

		switch ($self['tablename']) {			
			case 'article':
				break;		
			case 'phrase':
				break;
			case 'page':
				return;
				break;
			case 'picture':
				//把序列化过的数组恢复
				$pictureurls_arr = empty($content['pictureurls']) ? array() : explode('|||', $content['pictureurls']);
				
				$pictureurls  = array();
					foreach ($pictureurls_arr as $v) {
						$temp_arr = explode('$$$', $v);
						if (!empty($temp_arr[0])) {
							$pictureurls[] = array(
								'url' => $temp_arr[0],
								'alt' => $temp_arr[1]
							);
						}				
					}
				$content['pictureurls'] = $pictureurls;
				//p($pictureurls);
				break;
			case 'product':
				//把序列化过的数组恢复
				$pictureurls_arr = empty($content['pictureurls']) ? array() : explode('|||', $content['pictureurls']);
				
				$pictureurls  = array();
				foreach ($pictureurls_arr as $v) {
					$temp_arr = explode('$$$', $v);
					if (!empty($temp_arr[0])) {
						$pictureurls[] = array(
							'url' => $temp_arr[0],
							'alt' => $temp_arr[1]
						);
					}				
				}
				$content['pictureurls'] = $pictureurls;
				//p($pictureurls);
				break;

			case 'soft':
				//图片
				$pictureurls_arr = empty($content['pictureurls']) ? array() : explode('|||', $content['pictureurls']);				
				$pictureurls  = array();
				foreach ($pictureurls_arr as $v) {
					$temp_arr = explode('$$$', $v);
					if (!empty($temp_arr[0])) {
						$pictureurls[] = array(
							'url' => $temp_arr[0],
							'alt' => $temp_arr[1]
						);
					}				
				}
				$content['pictureurls'] = $pictureurls;

				//下载地址:
				$downlink_arr = empty($content['downlink']) ? array() : explode('|||', $content['downlink']);		
				$downlink  = array();
				foreach ($downlink_arr as $v) {
					$temp_arr = explode('$$$', $v);
					if (!empty($temp_arr[1])) {
						$downlink[] = array(
							'url' => $temp_arr[1],
							'title' => $temp_arr[0]
						);
					}				
				}
				$content['downlink'] = $downlink;			


				break;			
			default:
				$userOther = A(ucfirst($self['tablename']));
				$userOther->shows();
				return;
				break;
		}


		$this->content = $content;
		$this->display($template_show);		

	
	}

	//click +1
	public function clicknum(){
		$id = I('id', 0, 'intval');
		$tablename = I('tablename', '');
		if (empty($id) || empty($cid)) {
			exit();
		}

		import('Class.Category', APP_PATH);
		$self = Category::getSelf(getCategory(1), $cid);//当前栏目信息
		
		if(empty($self)) {
			//$this->error('栏目不存在');
			exit();
		}
		$num = M($self['tablename'])->where(array('id' => $id))->getField('click');
		M($self['tablename'])->where(array('id' => $id))->setInc('click');
		echo $num;

	}

	//
	public function article($id = 0){
		$id = I('id', 0, 'intval');
		if ($id == 0) {
			$this->error('参数错误');
		}

		$content = M('article')->where(array('status' => 0, 'id' => $id))->find();
		$cid = $content['cid'];

		$cate = getCategory(1);
		import('Class.Category', APP_PATH);
		$self = Category::getSelf($cate, $cid);//当前栏目信息
		
		$this->cate = $self;
		if(empty($self)) {
			$this->error('栏目不存在');
		}

		$patterns = array('/^Show_/', '/.html$/');
		$replacements = array('', '');
		$template_show = preg_replace($patterns, $replacements, $self['template_show']);
		if (empty($template_show)) {
			$this->error('模板不存在');
		}


	
		$this->title = $content['title'];
		$this->keywords = $content['keywords'];
		$this->description = $content['description'];
		$this->commentflag = $content['commentflag'];//是否允许评论,debug,以后加上个全局评价 $content['commentflag'] && CFG_Comment

		$this->content = $content;
		$this->id = $id;

		$this->display($template_show);

	}

	//产品列表
	public function product(){
		$id = I('id', 0, 'intval');
		if ($id == 0) {
			$this->error('参数错误');
		}

		$content = M('product')->where(array('status' => 0, 'id' => $id))->find();
		$cid = $content['cid'];

		$cate = getCategory(1);
		import('Class.Category', APP_PATH);
		$self = Category::getSelf($cate, $cid);//当前栏目信息
		
		$this->cate = $self;
		if(empty($self)) {
			$this->error('栏目不存在');
		}
		$patterns = array('/^Show_/', '/.html$/');
		$replacements = array('', '');
		$template_show = preg_replace($patterns, $replacements, $self['template_show']);
		if (empty($template_show)) {
			$this->error('模板不存在');
		}

		//把序列化过的数组恢复
		$pictureurls_arr = empty($content['pictureurls']) ? null : explode('|||', $content['pictureurls']);
		
		$pictureurls  = array();
			foreach ($pictureurls_arr as $v) {
				$temp_arr = explode('$$$', $v);
				if (!empty($temp_arr[0])) {
					$pictureurls[] = array(
						'url' => $temp_arr[0],
						'alt' => $temp_arr[1]
					);
				}				
			}
		$content['pictureurls'] = $pictureurls;
		//p($pictureurls);

	
		$this->title = $content['title'];
		$this->keywords = $content['keywords'];
		$this->description = $content['description'];
		$this->commentflag = $content['commentflag'];//是否允许评论,debug,以后加上个全局评价 $content['commentflag'] && CFG_Comment

		$this->content = $content;
		$this->id = $id;

		$this->display($template_show);

	}

	//图集列表
	public function picture(){
		$id = I('id', 0, 'intval');
		if ($id == 0) {
			$this->error('参数错误');
		}

		$content = M('picture')->where(array('status' => 0, 'id' => $id))->find();
		$cid = $content['cid'];

		$cate = getCategory(1);
		import('Class.Category', APP_PATH);
		$self = Category::getSelf($cate, $cid);//当前栏目信息
		
		$this->cate = $self;
		if(empty($self)) {
			$this->error('栏目不存在');
		}
		$patterns = array('/^Show_/', '/.html$/');
		$replacements = array('', '');
		$template_show = preg_replace($patterns, $replacements, $self['template_show']);
		if (empty($template_show)) {
			$this->error('模板不存在');
		}

		//把序列化过的数组恢复
		$pictureurls_arr = empty($content['pictureurls']) ? null : explode('|||', $content['pictureurls']);
		
		$pictureurls  = array();
			foreach ($pictureurls_arr as $v) {
				$temp_arr = explode('$$$', $v);
				if (!empty($temp_arr[0])) {
					$pictureurls[] = array(
						'url' => $temp_arr[0],
						'alt' => $temp_arr[1]
					);
				}				
			}
		$content['pictureurls'] = $pictureurls;
		//p($pictureurls);
	


		$this->title = $content['title'];
		$this->keywords = $content['keywords'];
		$this->description = $content['description'];
		$this->commentflag = $content['commentflag'];//是否允许评论,debug,以后加上个全局评价 $content['commentflag'] && CFG_Comment

		$this->content = $content;
		$this->id = $id;

		$this->display($template_show);

	}


	//soft
	public function soft($id = 0){
		$id = I('id', 0, 'intval');
		if ($id == 0) {
			$this->error('参数错误');
		}

		$content = M('soft')->where(array('status' => 0, 'id' => $id))->find();
		$cid = $content['cid'];

		$cate = getCategory(1);
		import('Class.Category', APP_PATH);
		$self = Category::getSelf($cate, $cid);//当前栏目信息
		
		$this->cate = $self;
		if(empty($self)) {
			$this->error('栏目不存在');
		}

		$patterns = array('/^Show_/', '/.html$/');
		$replacements = array('', '');
		$template_show = preg_replace($patterns, $replacements, $self['template_show']);
		if (empty($template_show)) {
			$this->error('模板不存在');
		}


		//图片
		$pictureurls_arr = empty($content['pictureurls']) ? array() : explode('|||', $content['pictureurls']);				
		$pictureurls  = array();
		foreach ($pictureurls_arr as $v) {
			$temp_arr = explode('$$$', $v);
			if (!empty($temp_arr[0])) {
				$pictureurls[] = array(
					'url' => $temp_arr[0],
					'alt' => $temp_arr[1]
				);
			}				
		}
		$content['pictureurls'] = $pictureurls;

		//下载地址:
		$downlink_arr = empty($content['downlink']) ? array() : explode('|||', $content['downlink']);		
		$downlink  = array();
			foreach ($downlink_arr as $v) {
				$temp_arr = explode('$$$', $v);
				if (!empty($temp_arr[1])) {
					$downlink[] = array(
						'url' => $temp_arr[1],
						'title' => $temp_arr[0]
					);
				}				
			}
		$content['downlink'] = $downlink;


		$this->title = $content['title'];
		$this->keywords = $content['keywords'];
		$this->description = $content['description'];
		$this->commentflag = $content['commentflag'];//是否允许评论,debug,以后加上个全局评价 $content['commentflag'] && CFG_Comment

		$this->content = $content;
		$this->id = $id;

		$this->display($template_show);

	}

	public function phrase(){
		$id = I('id', 0, 'intval');
		if ($id == 0) {
			$this->error('参数错误');
		}

		$content = M('phrase')->where(array('status' => 0, 'id' => $id))->find();
		$cid = $content['cid'];

		$cate = getCategory(1);
		import('Class.Category', APP_PATH);
		$self = Category::getSelf($cate, $cid);//当前栏目信息
		
		$this->cate = $self;
		if(empty($self)) {
			$this->error('栏目不存在');
		}

		$patterns = array('/^Show_/', '/.html$/');
		$replacements = array('', '');
		$template_show = preg_replace($patterns, $replacements, $self['template_show']);
		if (empty($template_show)) {
			$this->error('模板不存在');
		}



		$this->title = $content['title'];
		$this->keywords = $content['keywords'];
		$this->commentflag = $content['commentflag'];//是否允许评论,debug,以后加上个全局评价 $content['commentflag'] && CFG_Comment

		$this->content = $content;
		$this->id = $id;

		$this->display($template_show);

	}


}

?>