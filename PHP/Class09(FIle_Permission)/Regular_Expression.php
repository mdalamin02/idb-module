<?php

// $var = "This is a main conponent that make regular expression easier";

// $string = preg_match("/make/", $var);

// if ($string) {
    
//     echo "A match was found";
// }
// else 
//     {
//         echo "No match found";    
//     }
    


// $var = "This is a main conponent that make reguar expression easier";
// $exp = preg_match_all("/is|main|conponent|easier/i", $var, $rtnArray);

// echo "<pre>";
// print_r($rtnArray);
// echo "</pre>";


// $var = "This is a main conponent that make reguar expression easier";
// $exp = preg_match_all("/[ala]/i", $var, $rtnArray);

// echo "<pre>";
// print_r($rtnArray);
// echo "</pre>";


// $var = "This is a main conponent that make reguar expression easier";
// $exp = preg_match_all("/^[ala]/i", $var, $rtnArray);

// echo "<pre>";
// print_r($rtnArray);
// echo "</pre>";

// $var = "This is a main conponent that make reguar expression easier";
// $exp = preg_match_all("/[a-zA-Z]/i", $var, $rtnArray);

// echo "<pre>";
// print_r($rtnArray);
// echo "</pre>";

// $var = "This is a main conponent 522 that make reguar expression easier";
// $exp = preg_match_all("/[0-9]/i", $var, $rtnArray);

// echo "<pre>";
// print_r($rtnArray);
// echo "</pre>";

// $string = "file1 file2 file3 file4 file5 file6 file# file? file@";

// $exp = preg_match_all("/file[1@]/", $string, $rtnArray);

//  echo "<pre>";
//  print_r($rtnArray);
//  echo "</pre>";


//  echo "<br>";
// $string = "file.txt
//           file.xlsx
//           file.docx
//           file.pptx  
//           file.pdf";

// $exp = preg_match_all("/file\w*\.(txt|pdf|pptx)", $string, $array);

// echo "<pre>";
// print_r($array);
// echo "</pre>";


//  echo "<br>";
// $string = "121-451-4574";

// $exp = preg_match_all("/\d{3}-(\d{3})-(\d{4})/", $string, $array);

// echo "<pre>";
// print_r($array);
// echo "</pre>";


echo "<br>";
$string = "August 22nd
           August 22
           Aug 22
           Aug 22nd";

$exp = preg_match_all("/Aug(ust)? 22(nd)?/i", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


echo "<br>";
$string = "bat cat rat mat";

$exp = preg_match_all("/[^bc]at/", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";

echo "<br>";
$string = "bat cat rat mat";

$exp = preg_match_all("/\w/i", $string, $array);

echo "<pre>";
print_r($array);
echo "</pre>";


?>