<?php
$IS_ECOMMON_APP = false;

// 初始化信息
$subLogo = '<img width="54px" height="17px" alt="优惠券" src="http://img03.taobaocdn.com/tps/i3/T1OKmiXm8eXXXXXXXX-54-17.png">';
$hasNavBar = true;
$noBottomSearch = true;

include 'ecommon/template/inc/init.php';

$BLOCKS_PATH = $TEMPLATE_PATH.'blocks/';

if ($SOURCE_VIEW) {
    header('Content-type: text/plain; charset=gbk');
}


// 合并Assets 数组
$ASSETS = array_merge($ASSETS, array(
    // etao首页
    'base-js' => array('e/coupons/111221/base.js', 'm'),
    'coupon' => array('e/coupons/111216/coupon.css', 'm'),
    'coupon-js' => array('e/coupons/111223/coupon.js', 'm'),
    'detail' => array('e/coupons/111219/detail.css', 'm'),
    'detail-js' => array('e/coupons/111223/detail.js', 'm'),
    'headpage' => array('e/coupons/20111228/headpage.css', 'm'),
    'headpage-js' => array('e/coupons/20111228/headpage.js', 'm'),
    'receive' => array('e/coupons/111216/receive.css', 'm')
));

$page = $_GET['page'] ? $_GET['page']: 'coupon';
$file = 'template/'.$page.'.php';

//引入点号指定的子页面(eg. product.list)，点号后的部分为 $subpage 变量
//如果子页面存在则调入子页面，如果不存在则加载父页面，并传入 $subpage 变量
//有子页面时多出  $subpage 和 $pfile 变量
//$page 仍然等于 uri query 传入的 page
if (strhas($page, '.') && !file_exists($file)) {
    $tmp = explode('.', $page);
    $pfile = $tmp[0];
    //优先采用uri query里指定的subpage
    $subpage = $_GET['subpage'] ? $_GET['subpage'] : $tmp[1];
    $file = 'template/' . $pfile . ".php";
    unset($tmp);
} 

if(file_exists($file)) {
    if ($PHP_VIEW) {
        ob_clean();
        echo '<h1 align=center>你正在查看 ' . $file . ' 的php代码</h1>';
        echo '<div style="width: 80%; margin: 20px auto;">';
        echo '<ol><li><a href="' . makeurl('', 'viewphp') . '">正常查看页面</a></li>';
        echo '<li><a href="' . makeurl('viewsource', 'viewphp') . '">查看HTML源码</a></li></ol>';
        echo '<textarea style="width: 100%; margin: 10px; height: 400px;">';
        readfile ($file);
        echo '</textarea>';
        echo '</div>';
    } else {
        require $file;
    }
} else {
    header('Content-type: text/plain; charset=gbk');
    echo "找不到你要的页面！\n\n\n";
    include 'README.md' ;
}
?>
