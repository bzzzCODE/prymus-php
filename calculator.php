<?php
$op=$_GET['op'];
$x=$_GET['x'];
$y=$_GET['y'];
if(($_GET['op'])=="sum"){
	$eq=$_GET['x']+$_GET['y'];
	echo "$x+$y=$eq";
};
if(($_GET['op'])=="subtract"){
        $eq=$_GET['x']-$_GET['y'];
        echo "$x-$y=$eq";
};
if(($_GET['op'])=="multiply"){
        $eq=$_GET['x']*$_GET['y'];
        echo "$x*$y=$eq";
};
if(($_GET['op'])=="divide"){
        $eq=$_GET['x']/$_GET['y'];
        echo "$x/$y=$eq";
};
