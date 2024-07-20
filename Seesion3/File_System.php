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
?>