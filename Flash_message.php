<?php

class flash_msg {
  function setFlashMsg($text){
    return $_SESSION['FlashMsg'] = $text;
  }

  function getFlashMsg(){
    if (!empty($_SESSION['FlashMsg'])){
        echo $_SESSION['FlashMsg'];
    }
    unset($_SESSION['FlashMsg']);
  }

  function setFlashMsg_status($text){
    if (!empty($_SESSION['FlashMsg'])){
      $_SESSION['FlashMsg_status'] = $text;
  }
  }

  function getFlashMsg_status(){
    echo $_SESSION['FlashMsg_status'];
  }
}


