<?php 

session_start();

include('Flash_message.php');

$flash_msg = new flash_msg();?>
<h2 style="color: <?php if(!empty($_SESSION['FlashMsg_status'])){ $flash_msg->getFlashMsg_status(); }?>">
<?php $flash_msg->getFlashMsg();

?>
</h2>
<a href="sendler.php">Перейти</a>
