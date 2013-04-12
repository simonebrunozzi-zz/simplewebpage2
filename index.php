<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$start = $time;
?>

<!DOCTYPE html>
<html>
<body>
<div align="center">

<!--
<h1 style="font-family:verdana;">Simple AWS test Page</h1>
-->

<p style="font-family:verdana;font-size:130%;color:black">
<?php
echo "This machine is: ";
echo gethostname();
?>

</p>
<?php
$EC2_AZ=`curl -s http://169.254.169.254/latest/meta-data/placement/availability-zone`;
if ($EC2_AZ == 'us-west-2a') $COLOR="blue";
if ($EC2_AZ == 'us-west-2b') $COLOR="green";
if ($EC2_AZ == 'us-west-2c') $COLOR="red";
echo '<p style="font-family:verdana;font-size:180%;color:'.$COLOR.'">'.$EC2_AZ;
?>
</p>

<p style="font-family:verdana;font-size:90%;color:black">
From EC2: 
</p>

 <img src="leonardo1.jpg" width="120" height="120">
 <img src="leonardo2.jpg" width="120" height="120">
 <img src="leonardo3.jpg" width="120" height="120">
 <img src="leonardo4.jpg" width="120" height="120">
 <img src="leonardo5.jpg" width="120" height="120">

<p style="font-family:verdana;font-size:90%;color:black">
From Amazon S3: 
</p>

 <img src="https://s3-us-west-2.amazonaws.com/simone-us-west-2/leonardo1.jpg" width="120" height="120">
 <img src="https://s3-us-west-2.amazonaws.com/simone-us-west-2/leonardo2.jpg" width="120" height="120">
 <img src="https://s3-us-west-2.amazonaws.com/simone-us-west-2/leonardo3.jpg" width="120" height="120">
 <img src="https://s3-us-west-2.amazonaws.com/simone-us-west-2/leonardo4.jpg" width="120" height="120">
 <img src="https://s3-us-west-2.amazonaws.com/simone-us-west-2/leonardo5.jpg" width="120" height="120">

<p style="font-family:verdana;font-size:90%;color:black">
From Amazon CloudFront: 
</p>

 <img src="http://d2gvd8cg7m7q4d.cloudfront.net/leonardo1.jpg" width="120" height="120">
 <img src="http://d2gvd8cg7m7q4d.cloudfront.net/leonardo2.jpg" width="120" height="120">
 <img src="http://d2gvd8cg7m7q4d.cloudfront.net/leonardo3.jpg" width="120" height="120">
 <img src="http://d2gvd8cg7m7q4d.cloudfront.net/leonardo4.jpg" width="120" height="120">
 <img src="http://d2gvd8cg7m7q4d.cloudfront.net/leonardo5.jpg" width="120" height="120">

<br><br><br>
<p style="font-family:verdana;font-size:120%;color:black">
CPU Stress test performed.
</p>
<?php
// CPU stress test
for($i = 0; $i < 10000000; $i++) {
     $a += $i;
}
?>

<?php
$time = microtime();
$time = explode(' ', $time);
$time = $time[1] + $time[0];
$finish = $time;
$total_time = round(($finish - $start), 4);
echo '<p style="font-family:verdana;font-size:90%;color:black">';
echo 'Page generated in '.$total_time.' seconds.';
echo '</p>';
?>

</div>
</body>
</html>
