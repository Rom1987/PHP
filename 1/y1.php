<form name='one' method='POST'
Action='y1.php'>
N:<input type="text" name="N">
<input type="submit"> 
</form> 
 
<?php 
$N=$_POST['N'];
	do {
If ($N%10==2 ) {	
Echo 'true';
}
If (floor($N/10)==2)  {	
Echo 'true';
}
If (floor($N/100)==2)  {	
Echo 'true';
}		
Else {
	$N=$N%10;
	echo $N.'false';
}
	break;	
	}
	while ($N<>0)
	
?>