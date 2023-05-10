<?php 

		//echo "working";
		//$hist = "hidaya trust";
		//$hist = "0123456789a123456789b123456789c";
		
		//$hist = "hidaya trust";
		//echo strpos($hist,"a");
		//var_dump(strpos($hist,"a"));

		$hist = "hidaya trust";
		//echo strpos($hist,"t");
		//echo strpos($hist,"aya");
		//var_dump(strpos($hist,"r",9));


		//$hist = "0123456789a123456789b123456789c";
		//var_dump(strpos($hist,"7",25)); // 27, 

		//$hist = "hidaya trust";
		//var_dump(strpos($hist,"t"));
		//var_dump(strpos($hist,"t", 2)); //##daya trust
		//var_dump(strpos($hist,"t", -2)); //##########st
		//var_dump(strpos($hist,"t", -6));// 7 

		//$hist = "1123456789a123456789b123456789c";
		//var_dump(strpos($hist,"7")); // 7	
		//var_dump(strpos($hist,"7", 25));
		//var_dump(strpos($hist,"7", -5));
		//var_dump(strpos($hist,"")); // output is 0
	//var_dump(strpos($hist,"0"));
		//strpos("","7") ;

		//var_dump(strpos("","")); false;

		//$hist = "hidaya trust";
		//echo strpos($hist,""); // 0
		//echo strpos("","");//0
		//echo strpos("","a");// false

		// $hist = "hidAya trust";

		// var_dump( strpos($hist, "a"));	//"a" == "A";
		// echo "<br />";
		// var_dump( stripos($hist, "a")); // "a" == "A" || "a" == "a"


	/*$hist = "hidAya Trust";

	var_dump( strpos($hist, "t", -5)); // 11 
	echo "<br />";
	var_dump( stripos($hist, "t", 5)); //7*/

	$hist = "hidaya trust";
	/*echo strpos($hist,"a");
	echo "<br />";
	echo strrpos($hist,"a");*/

	/*echo strpos($hist,"t"); // 7
	echo "<br />";
	echo strrpos($hist,"t"); // 11*/

	$hist = "hidaya trust";
	$hist = "thidaya ttrust";
	//var_dump( strrpos($hist,"a",4) );
	//var_dump( strrpos($hist,"a",6) );//7
	//var_dump( strrpos($hist,"t",-3) );
	//thidaya ttr

	//$hist = "hidAya traust";
	//	var_dump( strripos($hist,"A") );

	/*$hist = "hidaya trust";
	$find = "u";
	for ($i=0; isset($hist[$i]); $i++) { 
		
		if($hist[$i] == $find){ echo $i; break;}
	}*/

	/*$hist = "hidaya trUst";
	$find = "u";

	for ($i=0; isset($hist[$i]); $i++) { 
		
		if($hist[$i] == $find ||  $hist[$i] == "U"){ echo $i; break;}
	}*/

	/*$hist = "hidaya trUst";
	$find = "a";
	$flag = "";
	for ($i=0;isset($hist[$i]); $i++) 
	{ 
		if($hist[$i] == $find){ 
			$flag = $i;
		}
	}
	echo $flag;*/

	/*$hist = "Someday I will be alone ";
	echo str_replace("I", "you", $hist);*/	

	//$hist = "HIdaya Trust Trust Trust Hist";
	// echo str_replace("Trust", "Institute", $hist, $count);
	//echo str_ireplace("trust", "Institute", $hist, $count);
	//echo $count;	

	//echo strrev("Hidaya Trust");
	//echo strrev("php");
	//echo strrev("php");		

	//echo strrev(1234);
	//echo strrev(true);
	//echo strrev(ord("123"));
	//echo strrev(ord("123"));

	//echo strtoupper("hidaya trust");
	//echo strtolower("HIDAYA TRUST");


	/*$hist = "HIdaya Institute of Science & Technology";
	echo lcfirst($hist);*/

	/*$hist = "hidaya Institute of Science & Technology";
	echo ucfirst($hist);*/

	/*$hist = "hidaya Institute of Science & Technology";	
	$hist = "Hidaya Institute of Science & Technology";		
	$abc = "a";
	$ABC = "A";
	for ($b=1; $b<=26; $b++) 
	{ 
		
		if($hist[0] == $abc)
		{
			$hist[0] = $ABC;
		}
		elseif($hist[0] == $ABC)
		{
			$hist[0] = $abc;
		}
		$abc++;
		$ABC++;

	}
	echo $hist;*/


	//$hist = "hidaya institute of science & technology";

	//echo ucwords($hist);
	//echo ucwords($hist,"a");
	//echo ucwords($hist,"i");
	//echo ucwords($hist,"u");
	//echo ucwords($hist,"H");
	//echo ucwords($hist," ");

	//$hist = "hidaya institute of science & technology";
	//$data = explode(" ", $hist);
	//$data = explode("i", $hist);
	//echo "<pre>";
	//print_r($data);

	/*$a = array("One","Two","Three");
	// $data = implode($a);
	//$data = implode(" ",$a);
	$data = implode("-",$a);
	var_dump($data);*/

	// $a = 1.5;
	// echo ceil($a); 

	//-5 -4 -3 -2 -1 0 1 2 3 4 5
	//echo ceil(4.1);//5
	//echo ceil(-4.4);// -4
	//echo ceil(-3.5); //-3

	//-5 -4 -3 -2 -1 0 1 2 3 4 5
	//echo floor(2.3);//	
	//echo floor(6.6);
	//echo floor(-2.3);//-3
	//echo floor(-3.5);//-4

	//0.0 se 0.4 floor  and 0.5 se 0.9 ceil
	//-5 -4 -3 -2 -1 0 1 2 3 4 5
	//echo round(3.5); // 4

	//Nagative
	//0.0 se 0.4 ceil  and 0.5 se 0.9 floor
	//echo round(-3.4); // -3
	//echo round(-3.5); // -4

	/*echo round(1.5, 0, PHP_ROUND_HALF_UP);
	echo round(-1.5, 0, PHP_ROUND_HALF_UP);*/

	/*echo round(1.5, 0, PHP_ROUND_HALF_DOWN);
	echo round(-1.5, 0, PHP_ROUND_HALF_DOWN);*/
	
	//var_dump(rand());
	//var_dump(rand(0,10));
	///var_dump(rand(15,5));

	/*for ($i=0; $i < 100 ; $i++) { 
		echo rand(1,100);
		echo "<br />";
	}*/

	//echo "<pre>";
	//print_r(hash_algos());

	/*$hist_password = hash("md5","hidaya");
	echo $hist_password;
	echo "<br />";
	echo hash("md5","hidaya");*/


	// if($hist_password == hash("md5","hidaya"))
	// echo "your login successfull";
	// else
	// 	echo "Incorrect password";

	//echo chr(83).chr(72).chr(65).chr(72).chr(90).chr(65).chr(73).chr(66);

	/*$hist = "hidaya trust";
	for ($i=0; isset($hist[$i]); $i++) { 
		if(substr("hidaya trust",0,$i) == "hidaya")
		{
				break;
		}
	}
	echo $i;*/




		


?>