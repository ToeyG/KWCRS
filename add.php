<?php
	if (isset($_POST['submit1'])){
		
		include("include/config.php");

		mysql_select_db("computor_fix",$objConnect);

		$sql = "INSERT INTO faq (Author,Problem,Fix) VALUES ('$POST(author)','$POST(problem)','$POST(fix)') ";

		mysql_query($sql,$objConnect);

		mysql_close($objConnect);
		echo "OK";
	}else{
		echo "NOOOO";
	}
?>