<?php echo file_get_contents("html/header.html"); ?>
<title>Welcome to Anashe,Egenia Nyamhuri's lovely daughter</title>
<?php

function timeDiff($firstTime,$lastTime)
{

// convert to unix timestamps
$firstTime=strtotime($firstTime);
$lastTime=strtotime($lastTime);

// perform subtraction to get the difference (in seconds) between times
$timeDiff=$lastTime-$firstTime;

// return the difference
return $timeDiff;
}

//Usage :
echo timeDiff("2002-04-16 10:00:00","2002-03-16 18:56:32");

?> 
<!--?php echo file_get_contents("html/header2.html"); ?-->
Anashe is a toddler who is very naughty and interesting.
<?php echo file_get_contents("html/footer.html"); ?>
