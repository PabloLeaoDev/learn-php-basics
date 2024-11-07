<?php 
define('ROOT_PATH', __DIR__ . '/../');
define('DATABASE_FILE', ROOT_PATH . 'database.json');

require_once ROOT_PATH . '/controller/api/BaseController.php';
require_once ROOT_PATH . '/model/UserModel.php';