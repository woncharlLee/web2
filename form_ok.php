<meta charset="utf-8" content="">
<?

$connect=mysql_connect('localhost','cs4','dotori21') or die('서버접속에 실패하였습니다.');
$dbcon=mysql_select_db('cs4',$connect);

$query="insert into runners(first_name,last_name,gender,finish_time) values ('$first_name','$last_name','$gender','$finisher_time')";
$result=mysql_query($query,$connect);

mysql_close($connect);



?>
