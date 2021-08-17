<?php 

session_start();

include('Flash_message.php');

$flash_msg = new flash_msg();
$flash_msg->setFlashMsg('Любое другое сообщение!');
$flash_msg->setFlashMsg_status('red');

header("Location: http://localhost:8888/setFlashMsg/");