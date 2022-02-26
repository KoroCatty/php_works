<?php
// try{
//   $db = new PDO('mysql:dbname=mini_bbs;host=127.0.0.1;Charsert=utf8', 'root', '');
// //もしデータベースに正常に接続できなかった時のcatch
// }catch(PDOException $e){
//   print('DB接続エラー:' . $e ->getMessage());
// }
?> 


<?php
try {
  // $db = new PDO('mysql:dbname=login_system;host=127.0.0.1;Charsert=utf8', 'root', '');
  $db = new PDO('mysql:dbname=login_system;host=localhost;charset=utf8','root','root');

  // $db = new PDO('mysql:dbname=epiz_31157109_kay_php;host="sql206.epizy.com;charset=utf8','epiz_31157109','b3XC96GKERoUO1y');

  //もしデータベースに正常に接続できなかった時のcatch
} catch (PDOException $e) {
  print('DB connection error:' . $e->getMessage());
}
?>