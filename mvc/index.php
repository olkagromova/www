<?php
/* Пути по-умолчанию для поиска файлов */
set_include_path(get_include_path()
					.PATH_SEPARATOR.'application/controllers'
					.PATH_SEPARATOR.'application/models'
					.PATH_SEPARATOR.'application/views');

/* Имена файлов: views */
const USER_DEFAULT_FILE = 'student_default.php';
const USER_ROLE_FILE = 'student_role.php';
const USER_LIST_FILE = 'student_list.php';
const USER_ADD_FILE = 'student_add.php';

/* Текстовая база данных пользователей */
define('USER_DB', $_SERVER["DOCUMENT_ROOT"].'/data/students.txt');

/* Автозагрузчик классов */
function __autoload($class){
  require_once($class.'.php');
}

/* Инициализация и запуск FrontController */
$front = FrontController::getInstance();
$front->route();

/* Вывод данных */
echo $front->getBody();