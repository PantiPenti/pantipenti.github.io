<?php
if(file_exists("test.txt"))
{
    echo "文件存在，正在读取..."."<br>";
    $f = fopen("test.txt","r");
    while(!feof($f))
    {
        echo fgets($f);
    }
}
else
{
    $f = fopen("test.txt","w");
    fwrite($f,"test");
    echo "文件已创建";
}
?>