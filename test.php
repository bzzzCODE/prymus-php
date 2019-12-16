<?php
$name=$_GET["name"]??"World";
for($number=1;$number<7;$number++) echo "<h$number>Hello $name!</h$number>";
