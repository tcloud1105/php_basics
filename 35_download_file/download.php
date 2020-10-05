<?php
/*
  header("Content-type:Application/octect-stream")// tell the browser to download the file, not to open the file
  header("Accept-Ranges:bytes") //what partial content range types this server supports
  header("Accept-Length:".filesize($file_path)) // the size of the file to download
  header("Content-Disposition:Attachment;filename=".$file_name)// the name you want to download
*/
// download the picture by clicking on it
// the file name first

if(!empty($_GET['pic_name'])){
	$acceptable_ranges = array(
	  "p1.jpg",
	  "p1.jpg",
	  "p3.jpg",
	  "p4.jpg",
	  "p5.jpg",
	);
	$result = in_array($_GET['pic_name'],$acceptable_ranges,true);
	
	if($result){
	  $filepath = "./destination/".$_GET['pic_name'];
	header("Content-type:Application/octect-stream");
	header("Accept-Ranges:bytes");
	header("Accept-Length:".filesize($file_path));
	header("Content-Disposition:Attachment;filename=".$_GET['pic_name']);
	
	$handle = fopen($filepath,"r");
	while(feof($handle)){
		echo fread($handle,1024);
	}
	fclose($handle);
	}else{
		exit("illegal file");
	}
	
}
?>
<a href="download.php?pic_name=p1.jpg"><img src="./destination/p1.jpg"></a>