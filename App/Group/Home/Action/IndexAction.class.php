<?php
//控制器：IndexAction
class IndexAction extends Action{
	//方法：index
	public function index(){
		
		goMobile();
		$this->title = C('cfg_webname');

		// 这里是直接写在index控制器里面 使用的是damicms源代码 后面考虑是否使用自定义标签库 2014-11-21
		//首页幻灯内容
		//先模式判断

		$hd = M('flash');
		$hd = $hd->where('status=1')->order('rank asc')->select();
		foreach ($hd as $k => $v) {
			$hd[$k]['imgurl'] = $v['pic'];
			if (empty($v['pic'])) {
				$hd[$k]['imgurl'] = TMPL_PATH.cookie('think_template')."/images/nopic.png";
			}
		}
		
		$this->assign('flash',$hd);
		unset($flash);

		$this->display();

	}
}

?>