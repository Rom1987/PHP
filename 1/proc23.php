<form name="authForm" method="GET" 
action="<?=$_SERVER['PHP_SELF']?>" > 
x1:<input type="text" name="x1"> 
y1:<input type="text" name="y1">
x2:<input type="text" name="x2"> 
y2:<input type="text" name="y2">
x3:<input type="text" name="x3"> 
y3:<input type="text" name="y3">
<input type="submit"> 
</form> 
<?php 
/*Proc23. ������� ������� Quarter(x, y) ������ ����, ������������ �����
������������ ��������, � ������� ��������� ����� � ���������� ����-
��������� ������������ (x, y). � ������� ���� ������� ����� ������
������������ ��������� ��� ���� ����� � ������� ���������� ������-
������.
*/  
  $x1=$_GET['x1']; 
  $y1=$_GET['y1']; 
 $x2=$_GET['x2']; 
  $y2=$_GET['y2']; 
   $x3=$_GET['x3']; 
  $y3=$_GET['y3']; 
function Quarter(&$x,&$y){
 if($x>0 and $y>0){
  echo '������ ��������';
 }
 if ($x>0 and $y<0){
  echo '�������� ��������';
 }
 if ($x<0 and $y<0){
  echo '������ ��������';
 }
 if ($x<0 and $y>0){
  echo '������ ��������';
 }
 if ($x==0 or $y==0){
  echo 'x � y ������� 0!!!';
 }
  } 
Quarter($x1, $y1);
echo '<br>';
Quarter($x2, $y2);
echo '<br>';
Quarter($x3, $y3);
?>