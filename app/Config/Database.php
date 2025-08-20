<?php

namespace Config;

use CodeIgniter\Database\Config as DatabaseConfig;

class Database extends DatabaseConfig
{
    public $defaultGroup = 'default'; // Add this line

public $default = [
       'DSN'      => '',
       'hostname' => 'localhost',
       'username' => 'root',       // Default XAMPP username
       'password' => '',           // Default XAMPP has no password
       'database' => 'lms_herrada', // Your database name
       'DBDriver' => 'MySQLi',
       'DBPrefix' => '',
       'pConnect' => false,
       'DBDebug'  => true,
       'charset'  => 'utf8',
       'DBCollat' => 'utf8_general_ci',
       'swapPre'  => '',
       'encrypt'  => false,
       'compress' => false,
       'strictOn' => false,
       'failover' => [],
       'port'     => 3307,
   ];








}
