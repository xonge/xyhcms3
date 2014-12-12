<?php
/***
*用户自定义函数文件，二次开发，可将函数写于此，升级不会覆盖此文件
***/

	//XXXtest为测试数据
	function xxxtest() {
		echo "xxxtest function";
	}

	/**
 * 字符串截取，支持中文和其他编码
 * @static
 * @access public
 * @param string $str 需要转换的字符串
 * @param string $start 开始位置
 * @param string $length 截取长度
 * @param string $charset 编码格式
 * @param string $suffix 截断显示字符
 * @return string
 */
function msubstr($str, $start=0, $length, $charset="utf-8", $suffix=true) {
    if(function_exists("mb_substr"))
        $slice = mb_substr($str, $start, $length, $charset);
    elseif(function_exists('iconv_substr')) {
        $slice = iconv_substr($str,$start,$length,$charset);
        if(false === $slice) {
            $slice = '';
        }
    }else{
        $re['utf-8']   = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|[\xe0-\xef][\x80-\xbf]{2}|[\xf0-\xff][\x80-\xbf]{3}/";
        $re['gb2312'] = "/[\x01-\x7f]|[\xb0-\xf7][\xa0-\xfe]/";
        $re['gbk']    = "/[\x01-\x7f]|[\x81-\xfe][\x40-\xfe]/";
        $re['big5']   = "/[\x01-\x7f]|[\x81-\xfe]([\x40-\x7e]|\xa1-\xfe])/";
        preg_match_all($re[$charset], $str, $match);
        $slice = join("",array_slice($match[0], $start, $length));
    }
    return $suffix ? $slice.'...' : $slice;
}

/*get url */
//jumpflag针对文档跳转属性 测试用 到时候删除即可
function getContentUrlx($id, $cid, $ename, $jumpflag = false, $jumpurl = '') {
    echo "hhhhhhhh";
    $url = '';
    //如果是跳转，直接就返回跳转网址
    if ($jumpflag && !empty($jumpurl)) {
        return $jumpurl;
    }
    if (empty($id) || empty($cid) || empty($ename)) {
        return $url;
    }
    

    //开启路由
    if(C('URL_ROUTER_ON') == true) {
        $url = $id > 0 ? U(''.$ename.'/'.$id,'') : U('/'.$ename,'', '');
    }else {
        $url  = U('Show/index', array('cid' => $cid, 'id'=> $id));
     
        
    }

    dump($id);
    echo "gggggggg";
    return $url;
}

// 获得指定自定义字段的文章列表 2014/11/24 部分代码来自damicms
function listx($str) {
    $list = M('article');
    // $lista = $list->where(array('guanlian'=>$str))->select();
    $_list = D2('ArcView',"article")->nofield('pictureurls')->where(array('guanlian'=>$str))->order()->limit()->select();
    // dump($_list);
    foreach ($_list as $k => $v) {
        // $_jumpflag = ($v['flag'] & B_JUMP) == B_JUMP? true : false;
        // echo $_jumpflag;
        // echo "gggggggg";
        // $lista[$k]['url']
        // echo $v['id'];
        // echo $v['cid'];
        $test = getContentUrl($v['id'], $v['cid'], $v['ename'], false, '');
        // echo $test;
        $_list[$k]['url'] = $test;
    }
    // dump($lista);die;
    return $_list;
}



?>