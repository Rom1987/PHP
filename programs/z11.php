﻿<?php
$h = fopen("p.txt","a");
/*�������� ���������� �� ���������� ����� ��� ������ ������� PHP.
�������� ���������� �� PHP � ����� ��������� ����. ����������: ���� ������� ���� ��� ������ PHP.
�������� ���������� ��� ������ ������� PHP �  ������������ ����. ����������: ����������� ���������� ��  ������ ������������ ���������� �����.
���������� ��� ������ PHP �������� ������ � �����, ������� ��������� � ������� ����������.
 */
$text = "???? ????? ??????? ? ????.";
if (fwrite($h,$text)){
echo '?????? ?????? ???????'.'<br>';
} 
else 
{echo "????????? ?????? ??? ?????? ??????";} 
readfile ("p.txt");
echo '<br>'.__FILE__.'<br>';
echo __DIR__.'<br>';
$path = ".";
    $filelist = array();
    if($handle = opendir($path)){
        while($entry = readdir($handle)){
            echo $entry."<br>";
        }
       
        closedir($handle);
    }
	echo '/////////////'.'<br>';
	$filelist = glob("*");
    foreach ($filelist as $filename){
        echo $filename." ? ??? ??????: ".filesize($filename)." ???? <br>";
}
fclose($h);
?>
