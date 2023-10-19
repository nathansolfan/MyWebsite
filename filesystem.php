<?php 
// file system

$quotes = readfile('read.txt');
echo $quotes;


if(file_exists('read.txt')){
    
    // read the file to the screen
    echo readfile('read.txt');
    // copy file
    // copy($quotes, 'quotes.txt');
    
     // absolute path
    echo realpath($quotes);
    // file size
    echo filesize('read.txt');
    // rename file
    if (rename($quotes, '/quotes/quotes.txt')) {
        echo "File renamed successfully.";
    } else {
        echo "Error renaming file.";
    }
} else{
    echo "File not found";
}
// create directory

mkdir('quotes')


?>