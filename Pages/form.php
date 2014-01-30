<?php
//change file to database info
$File = "users.txt";
$fd = fopen($File, "r");
while(!feof($fd))
{
 $Line = fgets($fd);
 $name = explode(" ", $Line);

//compares strings line by line, should return 0 if they are equal other wise the else statement executes.

if(strcasecmp($_POST["firstName"],$name[0]) == 0 && strcasecmp($_POST["lastName"],$name[1]) == 0)
{
 header("Location:Blog.html");
 break;
}
else
{
header("Location:Blog.html");
}

}

fclose($fd);
?>