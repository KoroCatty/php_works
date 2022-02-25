<!-- This file is for logging out -->
<?php
session_start();

$_SESSION = array();
//sessionにcookieを使うかどうかを設定するファイル
if (ini_get('session.use_cookies')){
  // cookieの情報を削除するためのコード  cookieの有効期限を切ることで、sessionを削除するというしくみ
  $params = session_get_cookie_params();
  setcookie(
    session_name() . '',
    time() - 42000,
    array(
        'path' => $params['path'],
        'domain' => $params['domain'],
        'secure' => $params['secure'],
        'httponly' => $params['httponly']
    )
);
}
//sessionを完全に消す
session_destroy();

//cookieに保存されてるemailも消す
setcookie('email','', time()-3600);

header('Location: index.php');
exit();
?>