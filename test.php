<?php
$dir = "C:\Apache24\htdocs\md";
$filelist2 = getFileList($dir);
$dirlist = getDirList($dir);

function getDirList($dir) {
  $list = array();
  // . ..は検索対象外とする->FilesystemIterator::SKIP_DOTS
  $iterator = new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS);
  echo 'Start1<br>';
  foreach ($iterator as $fileinfo) { // $fileinfoはSplFiIeInfoオブジェクト
    if( $fileinfo->isDir() ) {
	$list[] = $fileinfo->getFilename();
	echo $fileinfo->getFilename();
    }
  }
  return $list;
}


function getFileList($dir) {
  $list = array();
  foreach(new DirectoryIterator($dir) as $fileinfo) {
    if( $fileinfo->isFile() ) {
      $list[] = $fileinfo->getFilename();
      echo $fileinfo->getFilename();
    }
  }
  return $list;
}

function getFileList2($dir) {
  $list = array();
  // . ..は検索対象外とする->FilesystemIterator::SKIP_DOTS
  $iterator = new RecursiveDirectoryIterator($dir, FilesystemIterator::SKIP_DOTS);
  echo 'Start1<br>';
  foreach ($iterator as $fileinfo) { // $fileinfoはSplFiIeInfoオブジェクト
    if( $fileinfo->isDir() ) {
	$list[] = $fileinfo->getFilename();
	echo $fileinfo->getFilename();
    }
  }

  $iterator = new RecursiveIteratorIterator($iterator);
  echo 'Start2<br>';
  foreach ($iterator as $fileinfo) { // $fileinfoはSplFiIeInfoオブジェクト
    if($fileinfo->isFile()) {
      $list[] = $fileinfo->getFilename();
      echo $fileinfo->getFilename();
      echo '<br>';
    }
  }
  return $list;
}
?>
