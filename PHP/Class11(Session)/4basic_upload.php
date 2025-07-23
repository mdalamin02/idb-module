<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
<h1>Select Your Photograph</h1>
</body>
</html>
<?php

	$upload_dir = "upload";

	if(isset($_FILES['fupload']))
	{
		$file_name = $_FILES['fupload']['name'];
		$file_type = $_FILES['fupload']['type'];

		if($file_type == 'image/jpg' or $file_type == 'image/png' or $file_type == 'image/jpeg')
		{
			copy($_FILES['fupload']['tmp_name'], "$upload_dir/$file_name");
			//move_uploaded_file(filename, destination)

			print "<img src='$upload_dir/$file_name' width='200' height='150'>";

			print "<br>";
			print "Path:".$_FILES['fupload']['tmp_name']."<br>";
			print "Name:$file_name<br>";
			print "Size:".$_FILES['fupload']['size']."<br>";
			print "Type of the file:$file_type";
		}

		else
		{
			echo "Only jpg, jpeg, and png file supports";
		}

	} 

?>

<form action="" method="post" enctype="multipart/form-data">

	Select Photograph: <input type="file" name="fupload"><br>
	<input type="submit" name="submit" value="Upload">
</form>