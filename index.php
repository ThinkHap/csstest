<?php
$IS_ECOMMON_APP = false;

// ��ʼ����Ϣ
$subLogo = '<img width="54px" height="17px" alt="�Ż�ȯ" src="http://img03.taobaocdn.com/tps/i3/T1OKmiXm8eXXXXXXXX-54-17.png">';
$hasNavBar = true;
$noBottomSearch = true;

include 'ecommon/template/inc/init.php';

$BLOCKS_PATH = $TEMPLATE_PATH.'blocks/';

if ($SOURCE_VIEW) {
    header('Content-type: text/plain; charset=gbk');
}


// �ϲ�Assets ����
$ASSETS = array_merge($ASSETS, array(
    // etao��ҳ
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

//������ָ������ҳ��(eg. product.list)����ź�Ĳ���Ϊ $subpage ����
//�����ҳ������������ҳ�棬�������������ظ�ҳ�棬������ $subpage ����
//����ҳ��ʱ���  $subpage �� $pfile ����
//$page ��Ȼ���� uri query ����� page
if (strhas($page, '.') && !file_exists($file)) {
    $tmp = explode('.', $page);
    $pfile = $tmp[0];
    //���Ȳ���uri query��ָ����subpage
    $subpage = $_GET['subpage'] ? $_GET['subpage'] : $tmp[1];
    $file = 'template/' . $pfile . ".php";
    unset($tmp);
} 

if(file_exists($file)) {
    if ($PHP_VIEW) {
        ob_clean();
        echo '<h1 align=center>�����ڲ鿴 ' . $file . ' ��php����</h1>';
        echo '<div style="width: 80%; margin: 20px auto;">';
        echo '<ol><li><a href="' . makeurl('', 'viewphp') . '">�����鿴ҳ��</a></li>';
        echo '<li><a href="' . makeurl('viewsource', 'viewphp') . '">�鿴HTMLԴ��</a></li></ol>';
        echo '<textarea style="width: 100%; margin: 10px; height: 400px;">';
        readfile ($file);
        echo '</textarea>';
        echo '</div>';
    } else {
        require $file;
    }
} else {
    header('Content-type: text/plain; charset=gbk');
    echo "�Ҳ�����Ҫ��ҳ�棡\n\n\n";
    include 'README.md' ;
}
?>
