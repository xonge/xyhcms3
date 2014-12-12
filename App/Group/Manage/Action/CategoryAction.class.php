<?php

class CategoryAction extends CommonAction {

	//分类列表
	public function index() {

		//CategoryView 视图模型
		$cate = D('CategoryView')->nofield('content')->order('category.sort,category.id')->select();
		//$cate = getCategory();
		import('Class.Category', APP_PATH);
		$this->cate = Category::toLevel($cate, '&nbsp;&nbsp;&nbsp;&nbsp;', 0);
		$this->display();
	}

	//添加分类
	public function add() {

		if (IS_POST) {
			$this->addPost();
			exit();
		}
		$this->pid = I('pid', 0, 'intval');
		$cate = M('category')->order('sort')->select();
		import('Class.Category', APP_PATH);
		$this->cate = Category::toLevel($cate, '---',0);
		$this->mlist = M('model')->where(array('status' => 1))->order('sort')->select();
		$this->groupList = M('membergroup')->order('rank')->select();
		$this->roleList = M('role')->order('id')->select();//管理员组
		$this->styleListList = getFileFolderList(APP_PATH . C('APP_GROUP_PATH') . '/Home/Tpl/' .C('cfg_themestyle') , 2, 'List_*');
		$this->styleShowList = getFileFolderList(APP_PATH . C('APP_GROUP_PATH') . '/Home/Tpl/' .C('cfg_themestyle') , 2, 'Show_*');
		$this->display();
	}

	//添加分类处理

	public function addPost() {

		$data = I('post.', '');
		$acc_groupid = I('acc_groupid', '');//会员组权限
		$acc_roleid = I('acc_roleid', '');//管理组权限


		$data['name'] = trim($data['name']);
		$data['ename'] = trim($data['ename']);
		$data['type'] = empty($data['type'])? 0 : intval($data['type']);
		$pic = $data['catpic'] = I('catpic', '', 'htmlspecialchars,trim');

		if (isset($data['type']) && $data['type'] ==1 ) {
			$data['modelid'] = 0;
		}
		//M验证
		if (empty($data['name'])) {
			$this->error('栏目名称不能为空！');
		}


		if (empty($data['ename'])) {
			$data['ename'] = get_pinyin(iconv('utf-8','GBK//ignore',$data['name']),0);
		}elseif ($data['type'] == 0) {
			if (!ctype_alnum($data['ename'])) {
				$this->error('别名只能由字母和数字组成，不能包含特殊字符！');
			}
		}


		if ($id = M('category')->add($data)) {
			//管理员组权限
			if (!empty($acc_roleid)) {
				$access = array();
				foreach ($acc_roleid as $v) {
					$tmp = explode(',', $v);
					$access[] = array(
							'catid' => $id,
							'roleid' => $tmp[1],
							'action' => $tmp[0],
							'flag' => 1,
							);
				}

				M('categoryAccess')->addAll($access);
			}

			//会员组权限
			if (!empty($acc_groupid)) {
				$access = array();
				foreach ($acc_groupid as $v) {
					$tmp = explode(',', $v);
					$access[] = array(
							'catid' => $id,
							'roleid' => $tmp[1],
							'action' => $tmp[0],
							'flag' => 0,
							);
				}
				M('categoryAccess')->addAll($access);
			}


			//更新上传附件表
			if (!empty($pic)) {

				$pic = preg_replace('/!(\d+)X(\d+)\.jpg$/i', '', $pic);//清除缩略图的!200X200.jpg后缀
				$attid = M('attachment')->where(array('filepath' => $pic))->getField('id');
				if($attid){
					M('attachmentindex')->add(array('attid' => $attid,'arcid' => $id, 'modelid' => 0, 'desc' => 'category'));
				}
			}

			getCategory(0,1);//清除栏目缓存
			getCategory(1,1);//清除栏目缓存
			getCategory(2,1);//清除栏目缓存
			$this->success('添加栏目成功<script type="text/javascript" language="javascript">window.parent.get_cate();</script>',U(GROUP_NAME. '/Category/index'));
		}else {
			$this->error('添加栏目失败');
		}

	}


	//修改分类
	public function edit() {

		if (IS_POST) {
			$this->editPost();
			exit();
		}
		$id = I('id', 0, 'intval');
		$data = M('category')->find($id);
		if (!$data) {
			$this->error('记录不存在');
		}
		$this->data = $data;
		$cate = M('category')->order('sort')->select();
		import('Class.Category', APP_PATH);
		$this->cate = Category::toLevel($cate, '---',0);
		$this->mlist = M('model')->where(array('status' => 1))->order('sort')->select();
		$this->groupList = M('membergroup')->order('rank')->select();
		$this->roleList = M('role')->order('id')->select();//管理员组

		$this->styleListList = getFileFolderList(APP_PATH . C('APP_GROUP_PATH') . '/Home/Tpl/' .C('cfg_themestyle') , 2, 'List_*');
		$this->styleShowList = getFileFolderList(APP_PATH . C('APP_GROUP_PATH') . '/Home/Tpl/' .C('cfg_themestyle') , 2, 'Show_*');

		$this->display();
	}



	//修改分类处理

	public function editPost() {

		$data = I('post.', '');
		$id = $data['id'] = intval($data['id']);
		$pid = $data['pid'];

		$acc_groupid = I('acc_groupid', '');//会员组权限
		$acc_roleid = I('acc_roleid', '');//管理组权限

		$data['name'] = trim($data['name']);
		$data['ename'] = trim($data['ename']);
		// 英文别名 2014/11/25
		$data['enname'] = trim($data['enname']);
		$data['type'] = empty($data['type'])? 0 : intval($data['type']);
		$pic = $data['catpic'] = I('catpic', '', 'htmlspecialchars,trim');

		if (isset($data['type']) && $data['type'] ==1 ) {
			$data['modelid'] = 0;
		}

		if ($id == $pid) {
			$this->error('失败！不能设置自己为自己的子栏目，请重新选择父级栏目');
		}
		//M验证
		if (empty($data['name'])) {
			$this->error('栏目名称不能为空！');
		}

		if (empty($data['ename'])) {
			$data['ename'] = get_pinyin(iconv('utf-8','GBK//ignore',$data['name']),0);
		}elseif ($data['type'] == 0) {
			if (!ctype_alnum($data['ename'])) {
				$this->error('别名只能由字母和数字组成，不能包含特殊字符！');
			}
		}


		/*
		if (M('category')->where(array('name' => $data['name'], 'id' => array('neq' , $id)))->find()) {
			$this->error('栏目名称已经存在！');
		}
		*/



		if (false !== M('category')->save($data)) {

			$msg = '';
			//判断oldmodelid 与 modelid是否不变
			if ($data['oldmodelid'] != $data['modelid']) {
				$tablename = M('model')->where(array('id' => $data['oldmodelid']))->getField('tablename');
				if (!empty($tablename) && $tablename != 'page') {
					M($tablename)->where(array('cid' => $id))->delete();
					$msg = '!!!';
				}
			}

			//清除权限
			M('categoryAccess')->where(array('catid' => $id))->delete();
			//管理员组权限
			if (!empty($acc_roleid)) {
				$access = array();
				foreach ($acc_roleid as $v) {
					$tmp = explode(',', $v);
					$access[] = array(
							'catid' => $id,
							'roleid' => $tmp[1],
							'action' => $tmp[0],
							'flag' => 1,
							);
				}

				M('categoryAccess')->addAll($access);
			}

			//会员组权限
			if (!empty($acc_groupid)) {
				$access = array();
				foreach ($acc_groupid as $v) {
					$tmp = explode(',', $v);
					$access[] = array(
							'catid' => $id,
							'roleid' => $tmp[1],
							'action' => $tmp[0],
							'flag' => 0,
							);
				}
				M('categoryAccess')->addAll($access);
			}

			//del
			M('attachmentindex')->where(array('arcid' => $id, 'modelid' => 0, 'desc' => 'category'))->delete();
			//更新上传附件表
			if (!empty($pic)) {

				$pic = preg_replace('/!(\d+)X(\d+)\.jpg$/i', '', $pic);//清除缩略图的!200X200.jpg后缀
				$attid = M('attachment')->where(array('filepath' => $pic))->getField('id');
				if($attid){
					M('attachmentindex')->add(array('attid' => $attid,'arcid' => $id, 'modelid' => 0, 'desc' => 'category'));
				}
			}

			getCategory(0,1);//清除栏目缓存
			getCategory(1,1);
			getCategory(2,1);
			$this->success('修改栏目成功'. $msg .'<script type="text/javascript" language="javascript">window.parent.get_cate();</script>',U(GROUP_NAME. '/Category/index'));
		}else {
			$this->error('修改栏目失败');
		}

	}

	//字段显示控制
	public function show_field(){
		$typeid = (int)$_REQUEST['id'];
		if ($typeid ==0) {
			$this->error('错误的分类编号');exit();
		}
		//字段默认显示
		$arr = array(
			array('txt'=>'标题','show'=>1),
			array('txt'=>'关键字','show'=>1),
			array('txt'=>'描述','show'=>1),
			array('txt'=>'作者','show'=>1),
			array('txt'=>'来源','show'=>1),
			array('txt'=>'浏览次数','show'=>1),
			array('txt'=>'分类','show'=>1),
			array('txt'=>'转向链接','show'=>1),
			array('txt'=>'缩略图','show'=>1),
			array('txt'=>'文章摘要','show'=>1),
			array('txt'=>'附件上传','show'=>1),
			array('txt'=>'内容','show'=>1),
			array('txt'=>'发布时间','show'=>1),
			array('txt'=>'附加选项','show'=>1),
			array('txt'=>'自动分页字数','show'=>1),
			array('txt'=>'本文显示投票','show'=>1)
		);
		$temp = M('type')->where('typeid='.$typeid)->find();

		if ($temp) {
    		$this->assign('field_name',$temp['typename']);
			$myarr = explode('|',$temp['show_fields']);
			//dump($myarr);
			if (count($myarr) > 10) {
				for ($i=0;$i<count($myarr);$i++) {
					$arr[$i]['show'] = $myarr[$i];
				}
			}
		}
		$this->assign('list',$arr);
		//加载扩展字段不想用JOIN个人认为效率不高
		$list_extend = M('extend_fieldes')->order('orders')->select();
		foreach ($list_extend as $k => $v) {
			$is_show = M('extend_show')->where('typeid='.$typeid.' and field_id='.$v['field_id'])->getField('is_show') == 1?1:0;
			$list_extend[$k]['is_show'] = $is_show;
		}
		// dump($list_extend);die;
		$this->assign('list_extend',$list_extend);
		$this->display();
	}

	//保存字段显示控制
	public function doshow_field(){
		$typeid = (int)$_REQUEST['typeid'];
		$nset = (int)$_REQUEST['nset'];
		$outids = htmlspecialchars($_REQUEST['outids']);
		if ($typeid ==0) {
			$this->error('错误的分类编号');exit();
		}
		$str = join('|',array_slice($_POST, 1,16));
		$data = array();
		$data['typeid'] = $typeid;
		$data['show_fields'] = $str;
		$dao = M('Category');
		$temp = $dao->where('id='.$typeid)->save($data);

		//保存扩展字段显示
		$list_extend = M('extend_fieldes')->order('orders')->select();
		foreach ($list_extend as $k => $v) {
			//不是第一次设置
			$dao = M('extend_show')->where('typeid='.$typeid.' and field_id='.$v['field_id'])->find();
			if ($dao) {
				M('extend_show')->where('typeid='.$typeid.' and field_id='.$v['field_id'])->setField('is_show',intval($_POST['field_'.$v['field_id']]));
			} else {
				//第一次设置
				$arr['typeid'] = $typeid;
				$arr['field_id'] = $v['field_id'];
				$arr['is_show'] = intval($_POST['field_'.$v['field_id']]) ;
				$arr['orders'] = $v['orders'];
				M('extend_show')->add($arr);
			}
		}
		//下一级保存该设置
		if ($nset==1) {
			$where='';
			if ($outids!='') {
				$where .= ('typeid not in('.str_replace('|',',',$outids).') and');
			}
			$where .= ('fid='.$typeid);
			M('type')->where($where)->setField('show_fields',$str);
			$childids = M('type')->where($where)->select();
			foreach ($childids as $key=>$value) {
				foreach ($list_extend as $k=>$v) {
					$dao = M('extend_show')->where('typeid='.$value['typeid'].' and field_id='.$v['field_id'])->find();
					if ($dao) {
						M('extend_show')->where('typeid='.$value['typeid'].' and field_id='.$v['field_id'])->setField('is_show',intval($_POST['field_'.$v['field_id']]));
					} else {
						$arr['typeid'] = $value['typeid'];
						$arr['field_id'] = $v['field_id'];
						$arr['is_show'] = intval($_POST['field_'.$v['field_id']]) ;
						$arr['orders'] = $v['orders'];
						M('extend_show')->add($arr);
					}
				}
			}
		}
		$this->success('保存字段显示成功');
	}

	//批量更新排序
	public function sort() {
		$sortlist = I('sortlist', array(), 'intval');
		foreach ($sortlist as $k => $v) {
			$data = array(
					'id' => $k,
					'sort' => $v,
				);
			M('category')->save($data);
		}
		$this->redirect(GROUP_NAME. '/Category/index');
	}


	//修改分类处理

	public function del() {

		$id = I('id', 0, 'intval');

		//查询是否有子类
		$childnum = M('category')->where(array('pid' => $id))->count();
		if ($childnum) {
			$this->error('删除失败：请先删除本栏目下的子栏目');
		}
		$self = D('CategoryView')->field(array('modelid', 'tablename'))->where(array('category.id'=>$id))->find();
		if (!$self) {
			$this->error('栏目不存在');
		}
		$tablename = $self['tablename'];
		$modelid = $self['modelid'];

		if (M('category')->delete($id)) {
			$msg = '';
			if (!empty($tablename) && $tablename != 'page') {
				//删除栏目下文档之前，先删除文章资源引用
				$arcid = M($tablename)->where(array('cid' => $id))->getField('id', true);
				if (!empty($arcid)) {
					M('attachmentindex')->where(array('modelid' => $modelid, 'arcid' => array('IN', $arcid)))->delete();

					M($tablename)->where(array('cid' => $id))->delete();
				}
				$msg = '!!!';
			}
			M('categoryAccess')->where(array('catid' => $id))->delete();

			M('attachmentindex')->where(array('arcid' => $id, 'modelid' => 0, 'desc' => 'category'))->delete();

			//更新栏目缓存
			getCategory(0,1);
			getCategory(1,1);
			getCategory(2,1);
			$this->success('删除栏目成功'. $msg .'<script type="text/javascript" language="javascript">window.parent.get_cate();</script>',U(GROUP_NAME. '/Category/index'));
		}else {
			$this->error('删除栏目失败');
		}
	}


}




?>