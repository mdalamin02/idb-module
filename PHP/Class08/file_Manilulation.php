<?php

// Output a file
/* $fileName = "readme.txt";
echo readfile($fileName); */

// Check a file exist and Copy
/* $fileName = "readme.txt";

if (file_exists($fileName)) {
    copy($fileName, "readme2.txt");
    echo "File existing";
} else {
    echo "File not existing";
}

 */
// File Rename
/* $fileName = "readme2.txt";

if (file_exists($fileName)) {
    rename($fileName, "readme.txt");
} else {
    echo "Nothing to say anymore";
}
 */

// File Delete

/* $fileName = "readme2.txt";

if (file_exists(($fileName))) {
    
    unlink($fileName);
    echo "File deleted successfully";
}
else
{
    echo "File not found";
} */


// Folder Create

/* if (!file_exists("Testing")) {

    mkdir("Testing"); // mkdir = Make Directory
    echo "Folder created";
}
else    
{
    echo "Folder already Exist";
}
 */

// File Read
/* $fileName = "readme.txt";

if (!file_exists($fileName)) {

    fopen($fileName, "w");
}
else
{
    echo "File not exist";
}
 */

// File Write

$fileName = "readme.txt";
$appendContent = "This is a new paragraph to write the content where everything are written successfully";

if (is_writeable($fileName)) {

    if (!$$handle = fopen($fileName, "a")) {
        echo "Cannot open this file";
        exit;
    }
    if (fwrite($handle, $appendContent) == FALSE) {
        echo "Cannot Write in the file";
        exit;
    }
    echo "File wrote successfully";
    fclose($handle);
} else {
    echo "This is not writable";
}


// File Size

/* $fileName = "readme.txt";

echo filesize($fileName);
echo "<br>";
echo filetype($fileName);
echo "<br>";
echo filetype("Testing");
echo "<br>";
echo realpath($fileName);
echo "<br>";

echo "<pre>";
print_r(pathinfo($fileName));
echo "</pre>";

echo "<br>";
echo pathinfo($fileName, PATHINFO_EXTENSION);

echo "<br>";
$path = realpath($fileName);

echo basename($path); */