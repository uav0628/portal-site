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
            <?php
            $dir = "/opt/lampp/htdocs/lab/sa/md";
	    $dir = "C:\Apache24\htdocs\md";
            $dir = "/var/www/web/md";
	    $dirlist = getDirList($dir);
	    foreach($dirlist as $dirname) {
	      echo "<li>".$dirname."</li>";
	      echo "<ul>";
	      $subdir = $dir.DIRECTORY_SEPARATOR.$dirname;
	      $filelist = getFileList($subdir);
	      foreach($filelist as $filename) {
		echo "<li><a href=\"markdown.html?page=./md/".$dirname."/".$filename."\">".$filename."</a></li>";
	      }
	      echo "</ul>";
	    }
	    function getFileList($dir) {
	      $list = array();
	      foreach(new DirectoryIterator($dir) as $fileinfo) {
		if( $fileinfo->isFile() ) {
		  $list[] = $fileinfo->getFilename();
		}
	      }
	      return $list;
	    }

	    function getDirList($dir) {
	      $list = array();
	      // . ..は検索対象外とする->FilesystemIterator::SKIP_DOTS
	      $iterator = new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS);
	      foreach ($iterator as $fileinfo) { // $fileinfoはSplFiIeInfoオブジェクト
		if( $fileinfo->isDir() ) {
		  $list[] = $fileinfo->getFilename();
		}
	      }
	      return $list;
	    }
	    ?>
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
