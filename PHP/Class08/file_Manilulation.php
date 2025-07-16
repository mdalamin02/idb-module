<?php

// $var = readfile("readme.txt");
// echo $var."<br>";

// $file = "readme.txt";

// if (file_exists($file)) {
//     copy($file, "readme2.txt");
// }
// else
// {
//     echo "No file found";
// }

// $file = "readme.txt";

// if (file_exists($file)) {
//     rename($file, "myFile.txt");
//     echo "FIle renamed";
// }
// else
// {
//     echo "No file found";
// }

// $file = "readme.txt";

// if (file_exists($file)) {
//     unlink($file, "myFile.txt");
//     echo "FIle renamed";
// }
// else
// {
//     echo "No file found";
// }


// $filename = "readme.txt";

// if (!file_exists($filename)) {
//     fopen($filename, "w");
// }
// else 
// {
//     echo "File already opened";
// }


// $filename = "readme.txt";
// $content = "This file automatically creted in server and it should contain user details informatin.";


// if (is_writable($filename)) 
//     {
   
//     if (!$handle = fopen($filename, "a")) 
//     {
//         echo "Cannot open this file";
//         exit;
//     }

//     if(fwrite($handle, $content)===FALSE)
//     {
//         echo "Cannot write in the file";
//         exit;
//     }
//     echo "Wrote the content Successfully";
// }
// else
// {
//     echo "this file is not writable";
//     return exit;
// }


$file = "readme.txt";

echo filesize($file)."<br>";
echo filetype($file)."<br>";
echo realpath($file)."<br>";

echo "<pre>";
print_r(pathinfo($file));
echo "</pre>";

echo   "<BR>";

echo pathinfo($file, PATHINFO_EXTENSION);

echo   "<BR>";

$path = realpath($file);
echo basename($path);
?>



