<?php
  $USERAGENT= $_SERVER['HTTP_USER_AGENT'];
  $IP = $_SERVER['REMOTE_ADDR'];
  $data = [
    'IP:' => $IP, 
    'User-Agent' => $USERAGENT
  ];

header('Content-Type: application/json; charset=utf-8');
echo json_encode($data); 
?> 
