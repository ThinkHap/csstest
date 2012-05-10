<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>检测浏览器样式支持</title>
        <?php include "../uxcommon/assets.php" ?>
        <link rel="stylesheet" type="text/css" href="../src/base.css" />
        <link rel="stylesheet" type="text/css" href="../src/nav.css" />
        <link rel="stylesheet" type="text/css" href="../src/properties/csstest.css" />
        <link rel="stylesheet" type="text/css" href="../src/properties/value.css" />
        <script src="http://a.tbcdn.cn/s/kissy/1.2.0/kissy-min.js"></script>
    </head>
    <body>
        <?php include "../uxcommon/header.php" ?>
        <div class="page_content">
            <div class="wrap">
                <div class="header">
                    <h1>CSS Property's Value Test</h1>
                    <a href="../" title="" class="return">返回首页>></a>
                </div>
                <div id="content" class="content clear-fix">
                    <div id="main" class="main">
                        <div id="browser" class="browser"></div>
                        <div id="browser-score" class="browser-score">
		                    <h2>Your browser scores <strong id="score">0%</strong></h2>
		                    <h3>Determined by passing <strong id="passedTests"></strong> tests out of <strong id="totalTests"></strong> total for <strong id="total"></strong> Properties</h3>
                        </div>
	                    <div id="all" class="all"></div>
                    </div>
                    <div id="aside" class="aside">
                        <div class="caution">
                            <p><strong>Caution:</strong>
                            This test checks which CSS features the browser recognizes, <em>not</em> whether they are implemented correctly.</p>
                        </div>
                        
	                    <p>Time taken: <strong id="timeTaken"></strong></p>
		                <ul id="specsTested"></ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include "../uxcommon/footer.php" ?>
        <script src="../src/properties/tests.js"></script>
        <script src="../src/properties/value.js"></script>
        <script src="../src/properties/utopia.js"></script>
        <script src="../src/properties/supports.js"></script>
        <script src="../src/properties/csstest.js"></script>
        <!--
        <script>
        </script>
        -->
    </body>
</html>

