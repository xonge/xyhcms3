<?php
//组成多维数组
//unction nodeForLayer($node, $pid = 0) {
//$access是从数据库读出来的权限数据数组
function nodeForLayer($node, $access = null, $pid = 0) {

	if($node == '') return array();
	$arr = array();

	foreach ($node as $v) {
		if (is_array($access)) {

			$v['access'] =in_array($v['id'], $access)? 1 : 0;
		}
		if ($v['pid'] == $pid) {
			$v['child'] = nodeForLayer($node, $access, $v['id']);
			$arr[] =$v;
		}
	}

	return $arr;
}

//返回
function flag2Str($flag, $delimiter=' ', $iskey = false, $isarray = false) {
	if (empty($flag)) {
		return $isarray? array(): '';
	}
	$flagStr = array();
	$flagtype = getArrayOfItem('flagtype');//文档属性
	foreach ($flagtype as $k => $v) {
		if ($flag & $k) {
			$flagStr[] = $iskey? $k : $v;
		}
	}
	if ($isarray) {
		return $flagStr;
	} else {
		return implode($delimiter, $flagStr);
	}

}


/**
* 检查栏目权限
* @param $catid 栏目ID
* @param $action 动作
* @param $roleid 角色
* @param $flag 是否为管理组[0会员组,1管理员组]
* @return boolean $value 返回true|false
*/
function check_category_access($catid, $action, $roleid, $flag = 1) {
	$value = false;
	static $access = null;
	static $access_cid = 0;
	if (!is_array($access) || $access_cid != $catid) {
		$access = M('categoryAccess')->where(array('catid' => $catid))->select();
		if (empty($access)) {
			$access = array();
		}
		$access_cid = $catid;
	}

	foreach ($access as $v) {
		if($v['flag']==$flag && $v['roleid']==$roleid && $v['action']==$action) {
			$value = true;
			break;
		}
	}
	return $value;
}

/**
* 返回有权限的栏目(添加文档或修改文档时)
* @param array $cate 栏目数组
* @param string $action 动作
* @return array
*/
function get_category_access($cate, $action = 'add') {
	if (empty($cate)) {
		return array();
	}
	//权限检测//超级管理员
	if (!empty($_SESSION[C('ADMIN_AUTH_KEY')])) {
    	return $cate;
    }

    $where = array('flag' => 1, 'roleid' => intval($_SESSION['yang_adm_roleid']));
    if (!empty($action)) {
    	$where['action'] = $action;
    }

	$checkaccess = M('categoryAccess')->distinct(true)->where($where)->getField('catid', true);
    if(empty($checkaccess)) {
		$checkaccess= array();
	}

	$array = array();
	foreach ($cate as $v) {
		if (in_array($v['id'], $checkaccess) ) {
			$array[] = $v;
		}
	}

	return $array;
}

// 以下代码来自damicms 4.0 开源版 2014/11/24
// 栏目的扩展字段 这里还不能用 public或者protected前缀 不然显示空白 完全不懂
function list_extend_field($typeid) {
	$extend_field =M('extend_show')->join(C('DB_PREFIX').'extend_fieldes on '.C('DB_PREFIX').'extend_show.field_id='.C('DB_PREFIX').'extend_fieldes.field_id')->where(C('DB_PREFIX').'extend_show.is_show=1 and '.C('DB_PREFIX').'extend_show.typeid='.$typeid)->field(C('DB_PREFIX').'extend_fieldes.*')->order(C('DB_PREFIX').'extend_fieldes.orders')->select();
	//echo M('extend_show')->getLastSql();
	return  $extend_field;
}

// 让其支持PHP代码 eval大丈夫？
function zy_php_value($v) {
	if (eregi("<php>(.*)</php>", $v, $temp)) {
		eval($temp[1]);
	} else {
		echo $v;
	}
}

// 在模板中显示拓展字段
function show_field($type,$name,$value="",$option="",$css="") {
	// dump($type);die;
	switch ($type) {
		case 0: //单行文本
			echo "<input type=\"text\" name=\"{$name}\" id=\"{$name}\" value=\"";
			// dump($value);
			zy_php_value($value);
			echo "\" {$css} />";
			break;
		case 1: //多行文本
			echo "<textarea name=\"{$name}\" {$css}>";
			zy_php_value($value);
			echo "</textarea>";
			break;
		case 2://html编辑器
			echo "<script>KindEditor.ready(function(K) {K.create(\"#{$name}\",{ afterBlur: function(){ this.sync(); }});});</script><textarea id=\"{$name}\" name=\"{$name}\" style=\"width:700px;height:300px;\" {$css}>";
			zy_php_value($value);
			echo "</textarea>";
			break;
		case 3://单选下拉列表
			if ($option != '') {
				echo "<select name=\"{$name}\" {$css}>";
				if (eregi("<php>(.*)</php>", $option, $temp)) {
					eval($temp[1]);
				} else {
					$arr = explode(",",$option);
					for ($i=0;$i<count($arr);$i++) {
						$select ='';
						$temp = explode("|",$arr[$i]);
						if (count($temp) == 2) {
							if ($temp[1] == $value) {
								$select = 'selected="selected"';
							}
							echo "<option value=\"".$temp[1]."\" $select>".$temp[0]."</option>";
						} else if(count($temp) == 1) {
							if ($temp[0] == $value) {
								$select = 'selected="selected"';
							}
							echo "<option value=\"".$temp[0]."\" $select>".$temp[0]."</option>";
						}
					}
				}
				echo "</select>";
			}
			break;
		case 4://单选按钮
		// dump($option);die;
			if ($option != '') {
				$arr = explode(",",$option);
				for ($i=0;$i<count($arr);$i++) {
					$select ='';
					$temp = explode("|",$arr[$i]);
					if (count($temp) == 2) {
						if ($temp[1] == $value) {
							$select = 'checked="checked"';
						}
						echo "<input name=\"{$name}\" type=\"radio\" value=\"".$temp[1]."\" $select {$css}/>".$temp[0]."&nbsp;";
					} else if(count($temp) == 1) {
						if ($temp[0] == $value) {
							$select = 'checked="checked"';
						}
						echo "<input name=\"{$name}\" type=\"radio\" value=\"".$temp[0]."\" $select {$css}/>".$temp[0]."&nbsp;";
					}
				}

			}
			break;
		case 5://多选列表
			if ($option != '') {
				echo "<select name=\"{$name}[]\" size=\"4\" multiple=\"multiple\" {$css}>";
				if (eregi("<php>(.*)</php>", $option, $temp)) {
					eval($temp[1]);
				} else {
					$arr = explode(",",$option);
					$value_arr = explode(",",$value);
					for ($i=0;$i<count($arr);$i++) {
						$select ='';
						$temp = explode("|",$arr[$i]);
						if (count($temp) == 2) {
							if (in_array($temp[1],$value_arr)) {
								$select = 'selected="selected"';
							}
							echo "<option value=\"".$temp[1]."\" $select>".$temp[0]."</option>";
						} else if(count($temp) == 1) {
							if (in_array($temp[0],$value_arr)) {
								$select = 'selected="selected"';
							}
							echo "<option value=\"".$temp[0]."\" $select>".$temp[0]."</option>";
						}
					}
				}
				echo "</select>";
			}
			break;
		case 6://多选按钮checkbox
			if ($option != '') {
				$arr = explode(",",$option);
				$value_arr = explode(",",$value);
				for ($i=0;$i<count($arr);$i++) {
					$select ='';
					$temp = explode("|",$arr[$i]);
					if (count($temp) == 2) {
						if (in_array($temp[1],$value_arr)) {
							$select = 'checked="checked"';
						}
						echo "<input name=\"{$name}[]\" type=\"checkbox\" value=\"".$temp[1]."\" $select {$css}/>".$temp[0]."&nbsp;";
					} else if(count($temp) == 1) {
						if (in_array($temp[0],$value_arr)) {
							$select = 'checked="checked"';
						}
						echo "<input name=\"{$name}[]\" type=\"checkbox\" value=\"".$temp[0]."\" $select {$css}/>".$temp[0]."&nbsp;";
					}
				}
			}
			break;
		case 7://文件上传
			echo "<script>KindEditor.ready(function(K){var editor = K.editor({allowFileManager : true});K(\"#insertfile_{$name}\").click(function() {					editor.loadPlugin(\"insertfile\", function() {editor.plugin.fileDialog({fileUrl : K(\"#{$name}\").val(),clickFn : function(url, title) {								K(\"#{$name}\").val(url);editor.hideDialog();}});});});});</script><input type=\"text\" id=\"{$name}\" name=\"{$name}\" value=\"";
			zy_php_value($value);
			echo "\" {$css}/> <input type=\"button\" id=\"insertfile_{$name}\" value=\"选择文件\" />";
			break;
		case 8:
			echo "<script>KindEditor.ready(function(K){var editor = K.editor({allowFileManager : true});K(\"#{$name}_btn\").click(function() {editor.loadPlugin(\"multifile\", function() {editor.plugin.multiFileDialog({clickFn : function(urlList) {var div = K('#{$name}');div.html('');var temp='';K.each(urlList, function (i, data) {temp = (temp + data.url + ';');});ret=temp.substring(0,temp.length-1);div.val(ret);editor.hideDialog(); }});});});});</script><input type=\"text\" id=\"{$name}\" name=\"{$name}\" value=\"";
			zy_php_value($value);
			echo "\" {$css}/> <input type=\"button\" id=\"{$name}_btn\" value=\"选择上传\" />";
			break;
	}
}


?>