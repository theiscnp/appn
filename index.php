<?php
class index
{
    function __construct()
    {
    	return glob('*',GLOB_NOSORT);
    }

    function __toString(){

    	exit('tostringggg');
    }
}



if(__FILE__===$_SERVER['SCRIPT_FILENAME'])

	echo new index;
