<?php
require_once("../../lib/config.php");
require_once("../../lib/logger.php");
require_once("../../lib/redis_models.php");
$hash =DB_PREFIX.'settings';
insert_into_hash($hash,"password",$_REQUEST['new_password']);
        setcookie('user', md5('sunstone'), time()+60*60*24*365, '/', 's.leadroot.com');
        setcookie('password', md5($_REQUEST['new_password']), time()+60*60*24*365, '/', 's.leadroot.com');
        setcookie('user', md5('sunstone'), time()+60*60*24*365, '/', 'www.s.leadroot.com');
        setcookie('password', md5($_REQUEST['new_password']), time()+60*60*24*365, '/', 'www.s.leadroot.com');

?>
