<?php
session_destroy();
session_id(uniqid());
session_start();
    if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']!='off' or $_SERVER['SERVER_PORT']==443) $protocol='https://';
    else $protocol='http://';
?>
<!--<script>location.replace('<?php echo $protocol.$_SERVER["HTTP_HOST"]; ?>');</script>
<meta http-equiv="refresh" content="0; URL="<?php echo $protocol.$_SERVER["HTTP_HOST"]; ?>">-->