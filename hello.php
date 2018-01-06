<html>
<head>
</head>
<body>
<?php
echo "Hello World";

$x=0;
$y=10;

  print_r($GLOBALS);
  //echo $GLOBALS['x']+$GLOBALS['y'];

	//$txt1="Hello";
	//$txt2="World";
	//echo "$txt1 $txt2";
	
	
	for($x;$x<=6;$x++){
	echo "<h$x>Hello World<h$x>"; 
	}
	 
	 $arr=array("one","two","three");
	 foreach($arr as $value){
		 echo "Value:".$value. "<br/>";
	 }
	 
	 $cars=array("Volvo","BMW","Toyota");
	 foreach($cars as $c) 
	{
		 echo "<br/> $c";
	}
	
	
	 
	 
?>
</body>
</html>