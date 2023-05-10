<?php 
	
		//echo "working";

	//$hist = "hidaya trust";
	//$hist = "0123456789a123456789b123456789c";

	$hist = "hidaya trust";
	//echo strpos($hist, "a"); 
	//echo strpos($hist, "t"); 
	//echo strpos($hist, "a", 5); // 5
	//echo strpos($hist, "t", 8); 
	//echo strpos($hist, "u", 8); // ########rust

	//$hist = "0123456789a123456789b123456789c";
	//var_dump(strpos($hist, "4", 25));

	//$hist = "hidaya trust";
	//var_dump( strpos($hist,"t", -5) );
	//var_dump( strpos($hist,"t", -4) );
	//var_dump( strpos($hist,"ayas") );
	// var_dump( strpos($hist,"") ); // int(0)
	//var_dump( strpos("","") ); // int(0)
	//var_dump( strpos("","a") );

	//$hist = "0123456789a123456789b123456789c";
	//var_dump(strpos($hist,2,11));

	/*$hist = "hidaya trust";
	var_dump( strpos($hist, "a"));
	echo "<br />";
	var_dump( stripos($hist, "A"));*/	

	/*$hist = "hidaya trust";
	var_dump( strpos($hist, "a"));
	echo "<br />";
	var_dump( strrpos($hist, "a"));*/

	//$hist = "hidaya atrust";
	//var_dump( strpos($hist, "a", 5));
	//echo "<br />";
	//var_dump( strrpos($hist, "a", 5));

	// $hist = "hidaya trust";
	// var_dump( strpos($hist, "a", -5)); // false
	// echo "<br />";
	// var_dump( strrpos($hist, "a", -5)); // 5

	/* $hist = "hidaya trust";
	 var_dump( strrpos($hist, "a")); // 
	 echo "<br />";
	 var_dump( strripos($hist, "A")); //*/ 

	 //$hist = "0123456789a123456789b123456789c";
	 //var_dump( strrpos($hist, "6", -10));	

	 //$hist = "Someday I will be alone";
	 //echo str_replace("I", "you", $hist);

	 // $hist = "hidaya Trust Trust Trust Hist";
	 // echo str_replace("Trust","Institute", $hist);

	 /*$hist = "hidaya Trust Trust Trust Hist";
	 echo str_replace("Trust","Institute", $hist, $sum);
	 echo "<br />".$sum;*/

	 /*$hist = "hidaya Trust Trust Trust Hist";
	 echo str_replace("a","A", $hist, $sum);
	 echo "<br />".$sum;*/

	 /*$hist = "hidaya Trust Trust Trust Hist";
	 echo str_replace("hist","@", $hist, $sum);
	 echo "<br />".$sum;*/

	 /*$hist = "hidaya Trust Trust Trust Hist";
	 echo str_ireplace("hist","@", $hist, $sum);
	 echo "<br />".$sum;*/

	/* $hist = "hidaya Trust Trust Trust Hist";
	 echo str_ireplace(" ","_", $hist, $sum);
	 echo "<br />".$sum;*/

	 //echo strrev("hidaya");
	 // echo strrev("php");
	 // echo strrev(123);
	 // echo strrev(false);
	 //echo strrev(true);
	 //echo strrev( gettype("1" == 1) );

	 // $hist = "HIDAYA INSTITUTE OF SCIENCE & TECHNOLOGY";
	 // echo strtolower($hist);
	 // $hist = "hidaya institute of science & technology";
	 // echo strtoupper($hist);

	 /*$hist = "hidaya trust";
	 echo ucfirst($hist);*/

	 // $hist = "Hidaya trust";
	 // echo lcfirst($hist);

	 //$hist = "hidaya institute of science & technology";
	 //echo ucwords($hist);
	 //echo ucwords($hist,"a");
	 //echo ucwords($hist,"i");


	 //$hist = "hidaya institute of science & technology";

	 //$data = explode(" ", $hist);
	 //$data = explode("i", $hist);
	 //echo "<pre>";
	 //print_r($data);


	 //$hist = array("One","Two","Three");
	 // var_dump(implode($hist));
	 // var_dump(implode(" ",$hist));
	 //var_dump(implode("-",$hist));

	 //echo ceil(4.3); // 
	 //echo ceil(4.5);
	 //echo ceil(4.1);
	 //echo ceil(4.02);
	 ///-5 -4 -3 -2 -1 0 1 2 3 4 5
	 //echo ceil(-3.5);
	 //echo ceil(-4.9);

	 ///-5 -4 -3 -2 -1 0 1 2 3 4 5
	 //echo floor(4.3);
	 //echo floor(5.9);
	 //echo floor(-3.5);
	 //echo floor(-5.9);

//-5 -4 -3 -2 -1 0 1 2 3 4 5 
//note .0 se .4 floor and 0.5 se 0.9 ceil
// if value is postive;
//echo round(3.2);
//echo round(3.9);
//echo round(3.49);

//note .0 se .4 ceil and 0.5 se 0.9 floor
// if value is nagative;
// echo round(-3.5);
//echo round(-3.4);

/*echo round(1.5,0,PHP_ROUND_HALF_UP);
echo round(-1.5,0,PHP_ROUND_HALF_UP);

echo round(1.5,0,PHP_ROUND_HALF_DOWN);
echo round(-1.5,0,PHP_ROUND_HALF_DOWN);*/

//echo round(1.999,3,PHP_ROUND_HALF_EVEN);


//echo rand();
//echo rand(1, 10);
//echo rand("A", "Z");

//echo rand(1, 10);
//echo rand(100, 10);
//echo rand(90, 100);

//echo getrandmax();

 $hist = "A1B$2CD#E3G";
 for ($i=0; isset($hist[$i]) ; $i++) {
  
	echo $hist[1];
 }

//ucfirst(str)
/*$hist = "hidaya trust";

$abc = "a";
$ABC = "A";
$cond = "ucfirst";

for ($i=0; $i<=26; $i++) 
{ 
	if($hist[0] == $abc && $cond == "ucfirst")
	{
			$hist[0] = $ABC;

	}elseif($hist[0] == $ABC && $cond == "lcfirst")
	{
			$hist[0] = $abc;
	}
	$abc++;
	$ABC++;
}
echo $hist;*/

$hist = "Hidaya trust";

//$abc = "a";
// $ABC = "A";
// $cond = "lcfirst";
// for ($i=1; $i<=26; $i++) 
// { 
// 	if($hist[0] == $abc && $cond == "ucfirst")
// 	{
// 			$hist[0] = $ABC;

// 	}
// 	elseif($hist[0]  == $ABC && $cond == "lcfirst")
// 	{
// 			$hist[0] = $abc;
// 	}
// 	$abc++;
// 	$ABC++;
// }
// echo $hist;

	// echo "<pre>";
	// print_r(hash_algos());
	// die();
	//echo hash("md5","hidaya");
	// $password = hash("sha1","Aa@11111");

	// if($password == hash("sha1","Aa@11111"))
	// 	echo "login successfull !...";
	// else
	// 	echo "Incorrect password";

	
	// $hist = "hidaya trust";
	// for ($i=0; isset($hist[$i]); $i++) { 
	// 	if(substr("hidaya trust",0,$i) == "hidaya")
	// 	{
	// 			break;
	// 	}
	// }
	// echo $i;//6



	





?>