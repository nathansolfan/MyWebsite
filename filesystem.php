<?php 
// // file system

// $quotes = readfile('read.txt');
// echo $quotes;

// if(file_exists('read.txt')){
//     // read the file to the screen
//     echo readfile('read.txt');
//     // copy file
//     // copy($quotes, 'quotes.txt');
//     // absolute path
//     echo realpath($quotes);
//     // file size
//     echo filesize('read.txt');
//     // rename file
//     if (rename($quotes, '/quotes/quotes.txt')) {
//         echo "File renamed successfully.";
//     } else {
//         echo "Error renaming file.";
//     }
// } else{
//     echo "File not found";
// }
// // create directory

// mkdir('quotes')

// FILE SYSTEM 

$file = 'read.txt';
// open file - 'r' for reading, 'w' for writing, 'a' for appending.
$handle = fopen($file, 'a+');
// read - 2 arguments, we use the handle and the size
echo fread($handle, filesize($file));
// read single line - f get single
echo fgets($handle);
// read single char f get character
echo fgetc($handle);
// writing to file 
echo fwrite($handle, 'Hello World');
// delete
unlink($file);


?>