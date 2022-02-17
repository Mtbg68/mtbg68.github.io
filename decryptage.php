<?php
$i="";
$c="";
$n=0;
while ($i!=$c)
{
    $n++;
    $c= md5($n);
}
echo $n;