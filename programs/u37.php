<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>"> 

ax1:<input type="text" name="ax1"> 
ax2:<input type="text" name="ax2"> 
ax3:<input type="text" name="ax3"> 

ay1:<input type="text" name="ay1"> 
ay2:<input type="text" name="ay2">
ay3:<input type="text" name="ay3"> 

<input type="submit"> 
</form> 
<?php 
$ax1=$_GET['ax1']; 
$ay1=$_GET['ay1'];
$ax2=$_GET['ax2']; 

$ay2=$_GET['ay2'];
$ax3=$_GET['ax3']; 
$ay3=$_GET['ay3'];


$ax=array($ax1,$ax2,$ax3);
$ay=array($ay1,$ay2,$ay3);

 
function first ($ax,$ay){
    $lx=sqrt($ax[0]*$ax[0]+$ax[1]*$ax[1]+$ax[2]*$ax[2]);
    $ly=sqrt($ay[0]*$ay[0]+$ay[1]*$ay[1]+$ay[2]*$ay[2]);
if ($lx!==$ly){
$s=array($ax[0]+$ay[0],$ax[1]+$ay[1],$ax[2]+$ay[2]);
 print_r($s);
}
else {
    echo "должна быть a не равна b";
}
   } 
first ($ax,$ay);
?>
