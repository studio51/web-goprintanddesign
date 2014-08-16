<?php

  require_once('src/facebook.php');

  // SDK Settings

  $config = array();
  $config['appId'] = '1396666950555797';
  $config['secret'] = '9798d41a2de5a25b26ce60002a06b216';

  $facebook = new Facebook($config);

  $pageid = "531858863558454";
  $app_name = 'Go Print & Design';

  $pagefeed = $facebook->api("/" . $pageid . "/feed");

  $items = 5;
