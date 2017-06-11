<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">


    <meta name="description" content="Markdown renderer">
    <meta http-equiv="x-ua-compatible" content="IE=11" >
    <meta http-equiv="x-ua-compatible" content="IE=EmulateIE11" >

    <!-- CSS include  -->
    <link rel="stylesheet" type="text/css" href="./css/common.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- js libraries -->
    <script type="text/javascript" src="./js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="./js/marked.js"></script>
    <script type="text/javascript" src="./js/common.js"></script>
  </head>
  <style>
  </style>
  <body>
    <div id="mywrapper">
      <!-- S header -->
      <div id ="myheader"></div>
      <!-- E header -->

      <!-- S maincontent -->
      <div class="mycontainer mycontainer-main">
	<!-- S mycontainer-main-right -->
	<div class="mycontainer-main-right">
	  <ul class="sample1">
	    <li><a href="mysql.php">MySQL</a></li>
	    <li><a href="document.php">Memo</a></li>
	  </ul>
	</div>
	<!-- E mycontainer-main-right -->
	
	<!-- S mycontainer-main-side -->
	<div class="mycontainer-main-side">
          <li>Memo</li>
          <ul>
            <li><a href="markdown.html?page=./md/test.md">test.md</a></li>
            <li><a href="markdown.html?page=./md/test1.md">test1.md</a></li>
	    <li><a href="markdown.html?page=./md/test2.md">test2.md</a></li>
	    <li><a href="markdown.html?page=./md/test3.md">test3.md</a></li>
	    <li><a href="markdown.html?page=./md/test4.md">test4.md</a></li>
	    <li><a href="markdown.html?page=./md/test5.md">test5.md</a></li>
          </ul>
	</div>
	<!-- E mycontainer-main-side -->
      </div>
      <!-- E mycontainer-main -->
      <!-- S footer -->
      <div id ="myfooter">
      </div>
      <!-- E footer -->
    </div>
  </body>
</html>
