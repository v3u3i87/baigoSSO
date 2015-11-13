<?php
define("IN_BAIGO", 1);
define("BG_DEBUG_SYS", 0);
define("BG_DEBUG_DB", 0);
define("BG_SWITCH_LANG", 0);
define("BG_SWITCH_UI", 0);
define("BG_SWITCH_TOKEN", 1);
define("BG_SWITCH_SMARTY_DEBUG", 0);
define("BG_DEFAULT_SESSION", 1200);
define("BG_DEFAULT_PERPAGE", 30);
define("BG_DEFAULT_LANG", "zh_CN");
define("BG_DEFAULT_UI", "default");
define("BG_NAME_CONFIG", "config");
define("BG_NAME_TPL", "tpl");
define("BG_NAME_COMPILE", "compile");
define("BG_NAME_HELP", "help");
define("BG_NAME_CORE", "core");
define("BG_NAME_MODULE", "module");
define("BG_NAME_MODEL", "model");
define("BG_NAME_CONTROL", "control");
define("BG_NAME_INC", "inc");
define("BG_NAME_LANG", "lang");
define("BG_NAME_CLASS", "class");
define("BG_NAME_FUNC", "func");
define("BG_NAME_FONT", "font");
define("BG_NAME_SMARTY", "smarty");
define("BG_NAME_ADMIN", "admin");
define("BG_NAME_INSTALL", "install");
define("BG_NAME_API", "api");
define("BG_NAME_STATIC", "static");
define("BG_PATH_ROOT", str_replace("\\", "/", substr(dirname(__FILE__), 0, strrpos(dirname(__FILE__), BG_NAME_CONFIG))));
define("BG_PATH_CONFIG", BG_PATH_ROOT . BG_NAME_CONFIG . "/");
define("BG_PATH_TPL", BG_PATH_ROOT . BG_NAME_TPL . "/");
define("BG_PATH_COMPILE", BG_PATH_TPL . BG_NAME_COMPILE . "/");
define("BG_PATH_STATIC", BG_PATH_ROOT . BG_NAME_STATIC . "/");
define("BG_PATH_CORE", BG_PATH_ROOT . BG_NAME_CORE . "/");
define("BG_PATH_MODULE", BG_PATH_CORE . BG_NAME_MODULE . "/");
define("BG_PATH_CONTROL", BG_PATH_CORE . BG_NAME_CONTROL . "/");
define("BG_PATH_MODEL", BG_PATH_CORE . BG_NAME_MODEL . "/");
define("BG_PATH_FONT", BG_PATH_CORE . BG_NAME_FONT . "/");
define("BG_PATH_INC", BG_PATH_CORE . BG_NAME_INC . "/");
define("BG_PATH_LANG", BG_PATH_CORE . BG_NAME_LANG . "/");
define("BG_PATH_CLASS", BG_PATH_CORE . BG_NAME_CLASS . "/");
define("BG_PATH_FUNC", BG_PATH_CORE . BG_NAME_FUNC . "/");
define("BG_PATH_SMARTY", BG_PATH_CORE . BG_NAME_SMARTY . "/");
define("BG_URL_ROOT", str_ireplace(str_ireplace("\\", "/", $_SERVER["DOCUMENT_ROOT"]), "", str_ireplace("\\", "/", BG_PATH_ROOT)));
define("BG_URL_HELP", BG_URL_ROOT . BG_NAME_HELP . "/");
define("BG_URL_ADMIN", BG_URL_ROOT . BG_NAME_ADMIN . "/");
define("BG_URL_INSTALL", BG_URL_ROOT . BG_NAME_INSTALL . "/");
define("BG_URL_API", BG_URL_ROOT . BG_NAME_API . "/");
define("BG_URL_STATIC", BG_URL_ROOT . BG_NAME_STATIC . "/");
include_once(BG_PATH_INC . "version.inc.php");
include_once(BG_PATH_CONFIG . "opt_dbconfig.inc.php");
include_once(BG_PATH_CONFIG . "opt_base.inc.php");
include_once(BG_PATH_CONFIG . "opt_reg.inc.php");
