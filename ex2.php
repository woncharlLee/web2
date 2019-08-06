<meta charset="utf-8" content="">
<?
session_start();

echo "세션의 시작!<br/>";
$_SESSION['userid']='kang';
$_SESSION['username']='홍길동';
$_SESSION['time']=time();

echo "세개의 변수 등록 완료!!<br/>";
echo $_SESSION['userid']."<br/>";
echo $_SESSION['username']."<br/>";
echo $_SESSION['time'];

?>
