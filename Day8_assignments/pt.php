<?php


      

        


















	/*goto hist;
	echo "Hidaya";
	echo "<br />";
	
	hist:
	echo "hist";*/



	//goto hist;
	//goto hidaya;
	/*goto testing;

	hidaya:
	echo "Hidaya";
	echo "<hr />";
	echo "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)";

	echo "<br />";
	echo "<br />";
	
	hist:
	echo "HIST";
	echo "<hr />";
	echo "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)";

testing:
	echo echo "&nbsp;"; "Testing";*/

	

       /* $a = 1;
	
	hist:
	echo $a++; // 1 2 3 
	echo "<br/>";
	if($a >= 5) goto end;
       
	goto hist;
	end: 
	echo "End";*/




	/*$a = 0;
	while($a++ < 3)
	{
		
		echo $a;
		echo "<br />";
		if($a == 2) goto hist;
	}
	echo $a;

	hist:
	echo "Last Stmt";*/

	/*$a = 0;
	while($a++ < 3)
	{
		
		echo $a;
		echo "<br />";
		hist:
	}
	echo $a;

	goto hist;
	echo "Last Stmt";*/

	/*for($i = 1,$j=50; $i<=100; $i++)
	{	
		while($j--) 
		{
			echo $j;
			echo "<br />";
			if($j == 17) goto hist;
		}
	}

	hist:
	echo "Last Stmt ($j)";*/

	/*for($i = 1,$j=50; $i<=100; $i++)
	{	
		while($j--) 
		{
			echo $j;
			echo "<br />";
			hist:
		}
	}

	goto hist;
	echo "Last Stmt ($j)";*/

	/*switch(true)
	{
		case 1: 
			goto hist;
			echo "case 1";
			break;
		case 2: 
			echo "case 2";
			break;
	}

	hist:
	echo "Last Stmt ";*/

	/*switch(true)
	{
		case false: 
			goto hist;
			echo "case 1";
			break;
		case 2: 
			echo "case 2";
			break;
	}

	hist:
	echo "Last Stmt ";*/

	/*switch(true)
	{
		case 1: 
			hist:
			echo "case 1";
			break;
		case 2: 
			echo "case 2";
			break;
	}

	goto hist;
	echo "Last Stmt ";*/
	/*$a = 1;
	if(false)
	{	
		
		hist:
		echo "False";
		$a++;
		if($a == 2) goto end;
	}

	goto hist;

	end:
	echo "ss";*/

	/*$a = 1;
	if(true)
	{	
		if($a == 1) goto end;
		echo $a++;
		
	}

	end:
	echo "ss";*/


	/*do
	{
		echo "false";
	}while(false);*/

	/*do
	{
		echo "false";
	}while(true);*/

	
	/*$a = 1;
	do
	{
		echo $a." &nbsp; ";
		$a++;
		
	}while($a<=5);*/

	/*$a = -1;
	do
	{
		echo $a." &nbsp; ";
		$a--;
		
	}while($a>=-5);*/

	/*$a = 'a';
	do
	{
		echo $a." &nbsp; ";
		$a++;
		
	}while($a<='f');*/

	/*$a = 1;
	$a = 2;
	do
	{
		echo $a." &nbsp; ";
		
		$a = $a + 2;	
	}while($a<=50);*/

	/*$a = 0;
	do
	{	
		$a++; // 6 
		echo $a." &nbsp; ";
		
		
	}while($a<=5);*/

	/*$a = 0;
	$a = "";
	$a = null;
	$a = empty("");
	$b = "";
	$a = isset($b);
	$a = isset($x);
	do
	{	
		
		echo $a." &nbsp; ";
		
		
	}while($a);  // if(true)*/

	/*$a = 1;

	do
	{
		echo $a;
		if($a == 3) echo "*";
		echo "<br />";
	}while($a++ < 5);*/

	/*$a = 1;
	do
	{
		echo $a;
		if($a == 3) break;
		echo "<br />";
	}while($a++ < 5);*/

	/*$a = 1;
	do
	{
		if($a == 3) continue;
		echo $a;
		echo "<br />";
	}while($a++ < 5);*/

	/*$a = 1;
	do
	{
		
		echo $a;
		echo "<br />";
		if($a == 3) goto end;
	}while($a++ < 5);
	end:
	echo "End";*/


	/*$a = 1;
	do
	{
		if($a == 2 || $a == 4) echo "*";
		echo $a;
		echo "<br />";
		
	}while($a++ < 8);*/

	/*$a = 1;
	do
	{
		if($a == 2 || $a == 4) echo "*";
		echo $a;
		echo "<br />";
		
	}while($a++ < 8);*/

	/*$a = 1;
	do
	{
		if($a >= 2 && $a <= 6) echo "*";
		echo $a;
		echo "<br />";
		
	}while($a++ < 8);*/

	/*$a = "A";
	do
	{
		
		echo $a." : ";
		$b = 1;
		do
		{
			echo $b." &nbsp;";
			$b++;
		}while($b <= 8);



		echo "<hr />";
		
	}while($a++ < "E");*/

	/*$a = 1;
	$range = 100;
	do
	{
		
		echo $a." : ";
		for($b = 1; $b<=5; $b++)
		{
			echo "$b &nbsp;";
		}
	
		echo "<hr />";
		
	}while($a++ < $range);*/

	/*$a = 1;
	do
	{	
		echo "loop(1) ".$a;
		echo "<hr />";
		
		$b = 'a';
		do
		{
			if($a == 2 && $b == 'c'){ $b++; $a++; continue 2; }
			echo $b;
			echo "<br />";
			
			$b++;
		}while($b<="f");
	
		echo "******************<br />";
		
		$a++;	
	
	}while($a<=5);*/

	/*for(;;)
	{
		echo $a;
		if(++$a <= 5) break;
	}*/

	/*	
	$limit = 8;
	//output

	2 x 1 = 2
	2 x 2 = 4
	2 x 3 = 6
	2 x 4 = 8
	2 x 5 = 10
	2 x 6 = 12
	2 x 7 = 14
	2 x 8 = 16
	2 x 9 = 18
	2 x 10 = 20


	3 x 1 = 2
	3 x 2 = 6
	2 x 3 = 6
	2 x 4 = 8
	2 x 5 = 10
	2 x 6 = 12
	2 x 7 = 14
	2 x 8 = 16
	2 x 9 = 18
	2 x 10 = 20


	4 x 1 = 2
	2 x 2 = 4
	2 x 3 = 6
	2 x 4 = 8
	2 x 5 = 10
	2 x 6 = 12
	2 x 7 = 14
	2 x 8 = 16
	2 x 9 = 18
	2 x 10 = 20

	3 x 1 = 2
	2 x 2 = 4
	2 x 3 = 6
	2 x 4 = 8
	2 x 5 = 10
	2 x 6 = 12
	2 x 7 = 14
	2 x 8 = 16
	2 x 9 = 18
	2 x 10 = 20*/
	


	

	
	
















?><?php 

	//echo "working";
	
	/*goto hist;
	echo "Hidaya";
	echo "<br />";
	
	hist:
	echo "Hist";*/

	//goto hist;
	//goto hidaya;
	/*goto testing;
	hidaya:
	echo "Hidaya";
	echo "<hr />";
	echo "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)";

	echo "<br />";
	echo "<br />";
	
	hist:
	echo "HIST";
	echo "<hr />";
	echo "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)";

testing:
	echo "Testing";*/

	/*$a = 1;
	
	hist:
	echo $a++; // 1 2 3 
	echo "&nbsp;";
	if($a == 4) goto end;
	goto hist;
	end:
	echo "<br />End"; */

	/*$a = 0;
	while($a++ < 3)
	{
		
		echo $a;
		echo "<br />";
		if($a == 2) goto hist;
	}
	echo $a;

	hist:
	echo "Last Stmt";*/

	/*$a = 0;
	while($a++ < 3)
	{
		
		echo $a;
		echo "<br />";
		hist:
	}
	echo $a;

	goto hist;
	echo "Last Stmt";*/

	/*for($i = 1,$j=50; $i<=100; $i++)
	{	
		while($j--) 
		{
			echo $j;
			echo "<br />";
			if($j == 17) goto hist;
		}
	}

	hist:
	echo "Last Stmt ($j)";*/

	/*for($i = 1,$j=50; $i<=100; $i++)
	{	
		while($j--) 
		{
			echo $j;
			echo "<br />";
			hist:
		}
	}

	goto hist;
	echo "Last Stmt ($j)";*/

	/*switch(true)
	{
		case 1: 
			goto hist;
			echo "case 1";
			break;
		case 2: 
			echo "case 2";
			break;
	}

	hist:
	echo "Last Stmt ";*/

	/*switch(true)
	{
		case false: 
			goto hist;
			echo "case 1";
			break;
		case 2: 
			echo "case 2";
			break;
	}

	hist:
	echo "Last Stmt ";*/

	/*switch(true)
	{
		case 1: 
			hist:
			echo "case 1";
			break;
		case 2: 
			echo "case 2";
			break;
	}

	goto hist;
	echo "Last Stmt ";*/
	/*$a = 1;
	if(false)
	{	
		
		hist:
		echo "False";
		$a++;
		if($a == 2) goto end;
	}

	goto hist;

	end:
	echo "ss";*/

	/*$a = 1;
	if(true)
	{	
		if($a == 1) goto end;
		echo $a++;
		
	}

	end:
	echo "ss";*/


	/*do
	{
		echo "false";
	}while(false);*/

	/*do
	{
		echo "false";
	}while(true);*/

	
	/*$a = 1;
	do
	{
		echo $a." &nbsp; ";
		$a++;
		
	}while($a<=5);*/

	/*$a = -1;
	do
	{
		echo $a." &nbsp; ";
		$a--;
		
	}while($a>=-5);*/

	/*$a = 'a';
	do
	{
		echo $a." &nbsp; ";
		$a++;
		
	}while($a<='f');*/

	/*$a = 1;
	$a = 2;
	do
	{
		echo $a." &nbsp; ";
		
		$a = $a + 2;	
	}while($a<=50);*/

	/*$a = 0;
	do
	{	
		$a++; // 6 
		echo $a." &nbsp; ";
		
		
	}while($a<=5);*/

	/*$a = 0;
	$a = "";
	$a = null;
	$a = empty("");
	$b = "";
	$a = isset($b);
	$a = isset($x);
	do
	{	
		
		echo $a." &nbsp; ";
		
		
	}while($a);  // if(true)*/

	/*$a = 1;

	do
	{
		echo $a;
		if($a == 3) echo "*";
		echo "<br />";
	}while($a++ < 5);*/

	/*$a = 1;
	do
	{
		echo $a;
		if($a == 3) break;
		echo "<br />";
	}while($a++ < 5);*/

	/*$a = 1;
	do
	{
		if($a == 3) continue;
		echo $a;
		echo "<br />";
	}while($a++ < 5);*/

	/*$a = 1;
	do
	{
		
		echo $a;
		echo "<br />";
		if($a == 3) goto end;
	}while($a++ < 5);
	end:
	echo "End";*/


	/*$a = 1;
	do
	{
		if($a == 2 || $a == 4) echo "*";
		echo $a;
		echo "<br />";
		
	}while($a++ < 8);*/

	/*$a = 1;
	do
	{
		if($a == 2 || $a == 4) echo "*";
		echo $a;
		echo "<br />";
		
	}while($a++ < 8);*/

	/*$a = 1;
	do
	{
		if($a >= 2 && $a <= 6) echo "*";
		echo $a;
		echo "<br />";
		
	}while($a++ < 8);*/

	/*$a = "A";
	do
	{
		
		echo $a." : ";
		$b = 1;
		do
		{
			echo $b." &nbsp;";
			$b++;
		}while($b <= 8);



		echo "<hr />";
		
	}while($a++ < "E");*/

	/*$a = 1;
	$range = 100;
	do
	{
		
		echo $a." : ";
		for($b = 1; $b<=5; $b++)
		{
			echo "$b &nbsp;";
		}
	
		echo "<hr />";
		
	}while($a++ < $range);*/

	/*$a = 1;
	do
	{	
		echo "loop(1) ".$a;
		echo "<hr />";
		
		$b = 'a';
		do
		{
			if($a == 2 && $b == 'c'){ $b++; $a++; continue 2; }
			echo $b;
			echo "<br />";
			
			$b++;
		}while($b<="f");
	
		echo "******************<br />";
		
		$a++;	
	
	}while($a<=5);*/

	/*for(;;)
	{
		echo $a;
		if(++$a <= 5) break;
	}*/

	/*	
	$limit = 8;
	//output

	2 x 1 = 2
	2 x 2 = 4
	2 x 3 = 6
	2 x 4 = 8
	2 x 5 = 10
	2 x 6 = 12
	2 x 7 = 14
	2 x 8 = 16
	2 x 9 = 18
	2 x 10 = 20


	3 x 1 = 2
	3 x 2 = 6
	2 x 3 = 6
	2 x 4 = 8
	2 x 5 = 10
	2 x 6 = 12
	2 x 7 = 14
	2 x 8 = 16
	2 x 9 = 18
	2 x 10 = 20


	4 x 1 = 2
	2 x 2 = 4
	2 x 3 = 6
	2 x 4 = 8
	2 x 5 = 10
	2 x 6 = 12
	2 x 7 = 14
	2 x 8 = 16
	2 x 9 = 18
	2 x 10 = 20

	3 x 1 = 2
	2 x 2 = 4
	2 x 3 = 6
	2 x 4 = 8
	2 x 5 = 10
	2 x 6 = 12
	2 x 7 = 14
	2 x 8 = 16
	2 x 9 = 18
	2 x 10 = 20*/
	


	

	
	














?>

