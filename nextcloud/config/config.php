<?php
$CONFIG = array (
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'instanceid' => 'oc2uaawlipgu',
  'passwordsalt' => 'MG21obaR4ZVukzC902eNmp6xEKxVsB',
  'secret' => '6ILazNe00BYT9PWmQEAU1/CeYvMZBzKSAMWzjsS4OkU51HVv',
  'trusted_domains' => 
  array (
    0 => 'next.localdomain',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '14.0.0.19',
  'overwrite.cli.url' => 'http://next.localdomain',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => '[CHANGE THAT]',
  'installed' => true,
  'memcache.local' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' =>
   array (
    'host' => 'redis',
    'port' => 6379,
   ),

);
