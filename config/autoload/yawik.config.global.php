<?php

$env = getenv('APPLICATION_ENV') ?: 'production';
$db = ($env == 'production') ? 'YAWIK':'YAWIK_TEST';
return array(
  'doctrine' => 
  array(
    'connection' => 
    array(
      'odm_default' => 
      array(
        'connectionString' => 'mongodb://172.19.0.1:27017/'.$db,
      ),
    ),
    'configuration' => 
    array(
      'odm_default' => 
      array(
        'default_db' => $db,
      ),
    ),
  ),
  'core_options' => 
  array(
    'system_message_email' => 'me@itstoni.com',
  ),
);
