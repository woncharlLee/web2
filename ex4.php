<meta charset="utf-8" content="">
<?
$connect=mysql_connect('localhost','cs4','dotori21') or die('서버접속에 실패하였습니다');

$dbcon=mysql_select_db('cs4',$conn);

$query="select*from sample";
$result=mysql_query($query,$connect);

while ($row=mysql_) {
	// code...
}

mysql_close($connect);
?>
