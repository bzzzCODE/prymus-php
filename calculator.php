<?php
$op=$_GET['op'];
$x=$_GET['x'];
$y=$_GET['y'];
if(($_GET['op'])=="sum"){
	$eq=($_GET['x']??0)+($_GET['y']??0);
	echo "<h1>$x+$y=$eq</h1>";
};
if(($_GET['op'])=="subtract"){
        $eq=($_GET['x']??0)-($_GET['y']??0);
        echo "<h1>$x-$y=$eq</h1>";
};
if(($_GET['op'])=="multiply"){
        $eq=($_GET['x']??1)*($_GET['y']??1);
        echo "<h1>$x*$y=$eq</h1>";
};
if(($_GET['op'])=="divide"){
        $eq=($_GET['x']??1)/($_GET['y']??1);
        echo "<h1>$x/$y=$eq<h1>";
};
