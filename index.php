<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>CSS兼容性参考手册与使用指南</title>
<?php include "uxcommon/assets.php" ?>
<link rel="stylesheet" type="text/css" href="src/base.css" />
<link rel="stylesheet" type="text/css" href="src/index.css" />
</head>
<body>
<?php include "uxcommon/header.php" ?>
<div class="page_content">
    <div class="wrap">
        <h1>CSS兼容性参考手册与使用指南</h1>
        <div class="box">
            <h2>项目介绍</h2>
            <p><strong>CSS属性测试：</strong> 测试浏览器对CSS包含的大部分属性<不包含属性值>的支持情况，目前有收集366个属性。</p>
            <p><strong>CSS选择器测试：</strong> 测试浏览器对CSS包含的大部分选择器的支持情况，目前有50种选择器，574个测试用例。</p>
            <p><strong>成员：</strong>阿大、何敏、俊毅、王浩、玉澧、青缨</p>
        </div>
        <div class="box clear-fix">
            <h2>Test Page</h2>
            <ol class="properties">
                <li><a href="properties/index.php">CSS Properties Test</a></li>
                <li><a href="properties/test-value.php">CSS Property's Value Test</a></li>
            </ol>
            <ol class="selectors">
                <li><a href="selectors/index.php">CSS Selectors Test</a></li>
            </ol>
        </div>
        <div class="box clear-fix">
            <h2>Test Result & Demo</h2>
            <ol class="result">
                <li><a href="properties/report.php">CSS Properties 测试结果</a></li>
                <li><a href="selectors/report.php">CSS Selectors 测试结果</a></li>
                <li><a href="selectors/result.php">CSS Selectors 测试结果集</a></li>
            </ol>
            <ol class="demo">
                <li><a href="demo/properties/index.php">CSS Properties Demo</a></li>
                <li><a href="demo/selectors/index.php">CSS Selectors Demo</a></li>
            </ol>
        </div>
        <div class="box clear-fix">
            <h2>CSS属性说明文档 & CSS选择器说明文档</h2>
            <ol class="properties">
                <li><a href="http://wiki.ued.taobao.net/doku.php?id=team:search:f2e:forum:standard:css_propperties_guide" target="_blank">CSS属性说明文档 - 弹性盒模型(Flexible Box)</a></li>
                <li><a href="http://wiki.ued.taobao.net/doku.php?id=team:search:f2e:forum:standard:css_propperties2" target="_blank">CSS属性说明文档 - 多栏(Multi-column)</a></li>
                <li><a href="http://wiki.ued.taobao.net/doku.php?id=team:search:f2e:forum:standard:css%E5%B1%9E%E6%80%A7%E8%AF%B4%E6%98%8E%E6%96%87%E6%A1%A3_-_transform" target="_blank">CSS属性说明文档 - 变形(transform)</a></li>
                <li><a href="http://wiki.ued.taobao.net/doku.php?id=team:search:f2e:forum:standard:css%E5%B1%9E%E6%80%A7%E8%AF%B4%E6%98%8E%E6%96%87%E6%A1%A3_-_transition" target="_blank">CSS属性说明文档 - 过渡(transition)</a></li>
            </ol>
            <ol class="selectors">
                <li><a href="http://wiki.ued.taobao.net/doku.php?id=team:search:f2e:forum:standard:css_selector_guide" target="_blank">CSS选择器说明文档</a></li>
            </ol>
        </div>
        <div class="box">
            <h2>W3C Test</h2>
            <ol>
                <li><a href="http://www.w3.org/Style/CSS/Test/CSS3/Selectors/current/index.html">CSS3 Selectors Test Suite Index</a></li>
            </ol>
        </div>
        <div class="box">
            <h2>Other Test</h2>
            <ol>
                <li><a href="http://labs.qianduan.net/css-selector/" target="_blank">CSS选择器的浏览器支持</a></li>
                <li><a href="http://tools.css3.info/selectors-test/test.html" target="_blank">CSS3 Selectors Test</a></li>
                <li><a href="http://kb.cnblogs.com/a/925900/" target="_blank">CSS selectors: basic browser support</a></li>
                <li><a href="http://css3test.com/" target="_blank">CSS3Test</a></li>
                <li><a href="http://www.browserscope.org/browse?category=usertest_agt1YS1wcm9maWxlcnINCxIEVGVzdBidzawNDA" target="_blank">The CSS3Test Result</a></li>
                <li><a href="http://www.w3schools.com/cssref/" target="_blank">CSS Reference</a></li>
                <li><a href="http://css.doyoe.com/" target="_blank">CSS参考手册</a></li>
            </ol>
        </div>
    </div>
</div>
<?php include "uxcommon/footer.php" ?>
</body>
</html>
