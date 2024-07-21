<?php
/*
    File System Functions
    - disk_total_space()
    --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
    - disk_free_space() || diskfreespace()
    --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
    - file_exists(Path)
    --- Checks If A File Or Directory Exists
    - filesize(File_Name)
    --- Get Space In Bytes
*/

echo disk_total_space("c:") . "<br>"; // bytes
echo disk_total_space("c:") / 1024 / 1024 / 1024 . "<br>";
echo disk_free_space("c:") / 1024 / 1024 / 1024 . "<br>";

var_dump(file_exists("File_System.php")) ; // true
echo "<br>";
var_dump(file_exists("File_Scystem.php")) ; // false
echo "<br>";

echo filesize("File_System.php"); // bytes
echo "<br>";
echo "<hr>";

/*
    File System Functions
    - is_dir(Name)
    --- Tells If The Filename Is A Directory
    - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
    --- Permissions Is Ignored On Windows
    --- Permissions Is Octal Number Start With 0
    ------ Second Number Is => Owner Permission
    ------ Third Number Is => User Group Permission
    ------ Fourth Number Is => Others Permissions
    - rmdir(Name[Required], Context[Optional])
*/

var_dump(is_dir("one")); // folder in the same path of the file you write in now 
echo "<br>";
var_dump(is_dir("File_System.php"));
echo "<br>";

// mkdir("imgs",0700);
// mkdir("imgs/test",0700); // make folder "test" in imgs folder... imgs folder must be created before
// mkdir("one/two",0700,true); // will create folder one and two
echo "<br>";

// rmdir("one/two"); // remove two folder as it is empty
var_dump(file_exists("one")) ; // false
echo "<hr>";

/*
File System Functions
- chmod(File[Required], Mode[Required])
--- Change Mode
- fileperms(Name)
--- Gets File Permissions
- clearstatcache()
--- Clear Cache

- You Can Change Owner chown()
- You Can Change Group chgrp()
*/


// mkdir("y",0700);
echo fileperms("y")."<br>"; // numeric value ... windows ignore premission
chmod("y",0644);
clearstatcache();
echo fileperms("y"); // numeric value ... windows ignore premission // 40777 4 mean dir

echo "<hr>";

/*
File System Functions
- basename(Path[Required], Suffix[Optional])
--- Returns Trailing Name Component Of Path
- dirname(Path[Required], Levels[Optional] = 1)
--- Returns A Parent Directory's Path
--- Levels => Number of Parent Directories To Go Up
- realpath(Path[Required])
--- Returns Absolute Path
- pathinfo(Path[Required], Flags[Optional]) => Return Array
--- PATHINFO_DIRNAME
--- PATHINFO_BASENAME
--- PATHINFO_EXTENSION
--- PATHINFO_FILENAME
*/

echo basename("File_System.php"); // File_System.php
echo "<br>";
echo basename(__file__); // File_System.php
echo "<br>";
echo basename(__file__, ".php"); // File_System
echo "<br>";

echo dirname(__file__); 
echo "<br>";

echo dirname(__file__,2); 
echo "<br>";

echo realpath(__file__); 
echo "<br>";

echo "<pre>";
print_r(pathinfo(__file__));
echo "</pre>";

echo pathinfo(__file__)["basename"];
echo "<br>";
echo pathinfo(__file__,PATHINFO_BASENAME);
echo "<hr>";

/*
File System Functions
- Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

--- Mode
--- [r] For Read => Pointer At The Beginning
--- [r+] For Read & Write => Pointer At The Beginning
--- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
--- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists

- fgets(File[Required], Length[Optional])
--- Get A Line From An Open File
--- Length => Number Of Bytes To Read || End Of Line If No Length
- fread(File[Required], Length[Required])
--- Get A Data From An Open File
--- Length => Maximum Number Of Bytes To Read
- fclose(File[Required])
--- Closes An Open File Pointer
*/

$handel  = fopen("text.txt","r");
// $handel  = fopen("texvt.txt","w");

// echo fgets($handel);
echo "<br>";

// echo fgets($handel,2); // n one character
echo "<br>";

echo fread($handel,1024); 
echo "<br>";
fclose($handel);
echo "<br>";

echo "<hr>";

/*
File System Functions
- Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

--- Mode

--- [a] For Write => Pointer At The End + Create If Not Exists
--- [a+] For Read & Write => Pointer At The End + Create If Not Exists
--- [x] Create + Open For Write => Pointer At The Beginning
--- [x+] Create + Open For Read & Write => Pointer At The Beginning

- fwrite(File[Required], String[Required], Length[Optional])
--- Write To An Open File
--- Length => Maximum Number Of Bytes To Write
*/

echo "<br>";

$handel  = fopen("text.txt", "a");
fwrite($handel, " string from php ");
fwrite($handel, "\rstring from php2 ", 6); // length

/*
File System Functions
- Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

--- [c]
------ For Write
------ Create If Not Exists
------ No Problem If Its Exists
------ No Truncation
------ Pointer At The Beginning
--- [c+] For Read &#038; Write

- file(File[Required], Flag[Optional], Context[Optional])
--- Read Entire File Into Array
- feof(File[Required])      => end of file
--- Tests For EOF On A File Pointer
*/
echo "<pre>";
print_r(file("txt.txt"));
echo "</pre>";
echo "<br>";
echo count(file("txt.txt"));
echo "<br>";


$handel = fopen("txt.txt", "r");

while(!feof($handel)){
    echo fgets($handel) . "<br>";
}
fclose($handel);
echo "<hr>";

/*
File System Functions
- Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

- rewind(File[Required])
--- Return The Pointer To The Beginning Of The File

- ftell(File[Required])
--- Return Current Position Of The Pointer

- fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
--- Go To A Position
--- Offset In Bytes
--- SEEK_SET => Equal To Offset
--- SEEK_CUR => Current + Offset
--- SEEK_END => EOF + Offset [Accept Negative]
*/

$handel = fopen("txt.txt", "r");
echo ftell($handel) . "<br>";

echo fgets($handel) . "<br>";
echo ftell($handel) . "<br>";

rewind($handel); // return pointer to 0
echo fgets($handel) . "<br>"; // line number two

fseek($handel, 0);
echo fgets($handel) . "<br>"; 

echo ftell($handel) . "<br>";
fseek($handel, 5,SEEK_CUR);

echo fgets($handel) . "<br>"; 
fclose($handel);

echo "<hr>";

/*
File System Functions

- glob(Pattern[Required], Flags[Optional])
--- Find Pathnames Matching A Pattern And Return Array

- rename(Old[Required], New[Required]) => Move
--- Renames A File Or Directory

- copy(Old[Required], New[Required], Context[Optional])
--- Copy A File

- unlink(File[Required], Context[Optional])
--- Delete A File

Same Concept
- opendir()
- readdir()
- closedir()
*/

echo "<pre>";
print_r(glob("*.*")); // all file with all extentios
echo "</pre>";

echo "<pre>";
print_r(glob("oo/*.*")); // all file with all extentios in folder oo
echo "</pre>";

rename("oo/d.txt", "oo/test.txt"); // rename in the same place

rename("oo/test.txt", "other/test2.txt"); // rename in other place

rename("other/test2.txt", "oo/test2.txt"); // move to other place

copy("oo/test2.txt", "other/test2.txt");   // copy without rename

copy("oo/test2.txt", "other/test3copy.txt");   // copy with rename

// delete("oo/test2.txt");
echo "<hr>";
/*
    File System Functions

    - file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength(Optional))
    --- Reads Entire File Into A String

    - file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
    --- Write Data To File
    --- Mode
    ------ FILE_APPEND => If File Exists Append To It

    - Create If Not Exists
    - Open And Close
    - Return Number Of Bytes

    Search
    - Get Set Include Path

*/
echo file_get_contents("txt.txt");
echo "<br>";

echo get_include_path();
echo "<br>";
echo file_get_contents("txt.txt",true); // true => search in include path
echo "<br>";
echo file_get_contents("txt.txt",true, null, 4, 10); // search in include path
echo "<br>";
// echo file_get_contents("https://elzero.net/theme/"); 
echo "<br>";
file_put_contents("txt.txt", "from php"); // override the old content
file_put_contents("txt.txt", "from php", FILE_APPEND); // add to the old content
echo file_put_contents("txt.txt", " new from php", FILE_APPEND); // add to the old content

echo "<hr>";
?>