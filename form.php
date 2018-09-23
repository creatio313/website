<?php
mb_language('japanese');
mb_internal_encoding('UTF-8');

$tel = mb_convert_kana($_REQUEST['Tel'],'n','UTF-8');

$success=mb_send_mail('shirotani@seginus.jp',$_POST['Question'],$_POST['Naiyou'].$_POST['Name'].$tel,$_POST['Mail']);

if($success)echo("お問い合わせを送信しました。お返事までお時間をいただくことがございますが、何とぞご了承ください。");
?>