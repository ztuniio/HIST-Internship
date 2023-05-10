<?php 











	/*$a = 5;
	while(--$a >= 1)
	{
                 
		echo "$a";

                echo " | ";
		
	}
	echo $a;*/
	
















	/*for($loop = 6; $loop>=0; --$loop)

	{
		echo " | ";
                echo $loop;
		echo "<br/>";
		if($loop == 0) break;
	}*/


















	/*for($loop = 1; $loop<=6; $loop++)
	{ 
                echo "<br />";
		echo $loop;
		echo "<br />";
		if($loop == 4) continue;
	}

	echo "<br />g";*/


















	/*for($loop = 1; $loop<=6; $loop++)
	{
		echo $loop;
		echo "<br />";
		if($loop == 2) break;
		echo "sss"; 
	}
	echo $loop;*/ //   2












	/*for($loop = 0; $loop<=6; $loop++)
	{
		if($loop == 2) break;
	}
	echo $loop;*/



















	//for($loop = 100; $loop>=10; $loop = $loop - 5)
	//break;
	//echo $loop; //  95 100; 









	/*for($a = 'a', $b = 'A'; ($a<='f' && $b<="F"); $a++)
	{
		echo "$a == $b <br />";
		if($a == "d" && $b == 'D') break;	
		
	$b++;
	}*/

	/*for($a = 'a', $b = 'A'; ($a<='f' && $b<="F"); $a++)
	{
		echo "$a == $b <br />";
		if($a == "d" || $b == 'B') break;	
		
	$b++;
	}*/

	/*$a = 1;
	while($a<=5)
	{
		echo $a;
		echo "<br />";
		if($a == 4) break;
		$a++;

	}
	echo $a;*/

	/*$a = "a";
	while($a<="g")
	{
		echo $a;
		echo "<br />";
		if($a == "e") break;
		$a++;

	}
	echo $a;*/

	/*$a = 1;
	while($a<=5)
	{
		
		if($a == 4)
		{
		$a++; 
		continue;
		}
		echo $a;
		echo "<br />";
		$a++;

	}*/

	/*$a = 0;
	while(++$a<=5)
	{
		if($a == 4)
		{ 
		continue;
		}
		echo $a;
		echo "<br />";
		

	}*/

	// 1 2 *3 4 5 *6 7 8

	/*$a = 0;
	while(++$a<=8)
	{
	
		if($a == 3 || $a == 6) continue;
		echo $a;
		echo "&nbsp;&nbsp;";
		

	}*/

	/*$a = 0;
	while(++$a<=8)
	{
	
		if($a >= 3 && $a <= 6) continue;
		echo $a;
		echo "&nbsp;&nbsp;";
		

	}
	echo $a;*/

	/*for($loop = 1; $loop<=6; $loop++)
	{
		if($loop == 2) continue;
		echo $loop;
		echo "<br />";
		
	
	}*/
	/*for($loop = 1; $loop<=6; $loop++)
	{
		continue;	
	}
	echo $loop; // 7 / 1 / 6, */

	/*for($a = 1; $a <= 3; $a++)
	{
		for($b = 1; $b <= 3; $b++)
		{
			echo "a = $a, b = $b <br />";
		}
		
		echo "<br />";
	}*/









	/*$a = 1;
	while($a<=4)
	{
		$b = 1;
		while($b<=4)
		{
			echo "a = $a, b = $b <br s/>";
			$b++;
		}
		echo "<br />";
		$a++;
	}*/









	/*$a = 1;
	while($a<=3)
	{
		
		for($b  =1; $b <= 3; $b++)
		{
			echo "[$b] &nbsp;";
		}
		echo "<br />";
		$a++;
	}*/






	for($a = 1; $a <= 4; $a++)
	{
		for($b = 1; $b <= $a; $b++)
		{
			echo "* &nbsp";
		}
		
		echo "<br/>";
	}










	/*$school = "A";
	while($school <= 'C')
	{
		echo "School ( $school ) ";
		echo "<br />";
		for($classes = 'a'; $classes<='d'; $classes++)
		{
			echo "Class ($classes) : ";
			$students = 1;
			while($students<=8)
			{
				echo "$students &nbsp";
				$students++;
			} 
		

			echo "<br />";
		}

		echo "<hr />";
		$school++;
	} */

	/*for($i = 0; $i <= 10; $i++)
	{
		for($j = 0; $j <= 10; $j++)
		{
			break 2;
		}
		
	}
	echo "$i $j";*/

	/*for($i = 0; $i <= 10; $i++)
	{	
		for($j = 0; $j <= 10; $j++)
		{
			if($i == 3 && $j == 3) continue 2;
			echo "$i $j <br />"; 
		}
		
	}*/
	//echo "$i $j";
	
	$a = 1;
	/*while($a<=10)
	{
		
		echo $a." &nbsp;";
		if($a == 3)
		{
			break;
		}
	$a++;
	}*/
	/*$a = 0;
	while(++$a<=10)
	{
		if($a == 3)
		{
			continue;
		}
		echo $a." &nbsp;";
		
	
	}*/

	/*$a = 0;
	while(++$a<=3)
	{
		for($b = 1; $b<=5; $b++)
		{
			echo $b." &nbsp;";
			if($b == 3) break 2;
		}
		echo "<br />";	
	}
	echo $a;*/

	/*$a = 0;
	while(++$a<=3)
	{
		for($b = 1; $b<=5; $b++)
		{
			if($b == 3) continue 2;
			echo $b." &nbsp;";
			
		}
		echo "<br />";	
	}
	echo $a;*/

	/*$a = 0;
	while(++$a<=3)
	{
		for($b = 1; $b<=5; $b++)
		{
			$c = 'a';
			while($c <= 'f')
			{
				if($c == 'd')
				{
					$c++;
					continue 3;
				}
				echo $c." &nbsp;";
				$c++;
			}
			echo "<br />";
			
		}
		echo "<hr />";	
	}
	echo $a;*/

	/*$a = 0;
	while(++$a<=3)
	{
		for($b = 1; $b<=5; $b++)
		{
			$c = 'a';
			while($c <= 'f')
			{
				echo $c." &nbsp;";
				
				if($c == 'c')
				{	
					//break 2;
					break 4;
				}
				$c++;
			}
			echo "<br />";
			
		}
		echo "<hr />";	
	}
	echo $a;*/

	
	


	/*$a = 0;
	while(++$a<=5)
	{
		for($b = 1; $b<=5; $b++); // 6
		for($c = 1; $c<=5; $c++)
		{
			if($c == '2')	break 2;
		}
			
	}
	echo " $a $b $c"; // 1 6 2 */
		

	
	
	/*for($i=0; $i<=3; $i++) // i = 4;
	{
		for($j=0; $j<=3; $j++) // j = 0;
		{
			
			for($k=0; $k<=3; $k++) // k = 4
			{
					
			}
			//break 2;
			break;		
		}
	 
	}
	echo "i == ".$i." j == ".$j." k == ".$k;*/  

	//$a = "1";
	//$a .= " 2 ";
	//$a .= " 3 ";	
	//echo $a;
	
	
	


	





	
	
	


?>