<?php

function replaceSpace($str)
{
    echo str_replace(" ","%20",$str);
}

echo replaceSpace("hello world");