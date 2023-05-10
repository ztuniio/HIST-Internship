<!DOCTYPE>
<html>
<head>
	        <title>HTML and PHP</title>
</head>
<body>
		<h1>List with PHP as described</h1>

	        <!--<h2>EVEN Square</h2>-->
<?php
$type="square";
?>

	        <ul type="<?php echo $type;?>">
				<?php
 for($x=1; $x<=20; $x++)
 {
    if($type=="square")
    if($x%2 == 0)
    {
    ?> <li> <?php echo  $x; ?> </li> <?php
    }

    if($type=="disc")
    if($x%2 == 1)
    {
	?> <li>  <?php echo $x; ?> </li> <?php
    }

    if($type=="circle")
   
    {
	?> <li>  <?php echo $x*$x; ?> </li> <?php	
    }

    else { echo "Not Valid"; }
}
?>	
=</ul>


</body>
</html>