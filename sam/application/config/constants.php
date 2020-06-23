<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code



// Endpoint BASE
// define('SAM_API_URL','http://103.8.79.125/sam_api/api/');
define('SAM_API_URL','localhost/sam_api/api/');

// Endpoint LOGIN
define('AUTH_TOKEN_PATH','auth/token');
define('AUTH_LOGIN_CHECK','auth/check');
define('AUTH_CAPTCHA','auth/captcha');

// Endpoint MENU
define('MENU_LIST','menu/lists');

// Endpoint REGION
define('REGION_GET','outlet/get_wilayah');
define('REGION_LIST','outlet/list_wilayah');
define('REGION_CREATE','outlet/create_wilayah');
define('REGION_UPDATE','outlet/update_wilayah');

// Endpoint BRANCH
define('BRANCH_GET','outlet/get_cabang');
define('BRANCH_LIST','outlet/list_cabang');
define('BRANCH_CREATE','outlet/create_cabang');
define('BRANCH_UPDATE','outlet/update_cabang');

// Endpoint USERPOSITION
define('USERPOSITION_GET','userposition/get');
define('USERPOSITION_LIST','userposition/lists');
define('USERPOSITION_CREATE','userposition/create');
define('USERPOSITION_UPDATE','userposition/update');
define('USERPOSITION_DELETE','userposition/remove');

// Endpoint PRODUCT
define('PRODUCT_GET','product/get');
define('PRODUCT_LIST','product/lists');
define('PRODUCT_CREATE','product/create');
define('PRODUCT_UPDATE','product/update');

// Endpoint MENU PERMISSION
define('PERMISSION_GET','menu_permission/get');
define('PERMISSION_LIST','menu_permission/lists');
define('PERMISSION_CREATE','menu_permission/create');
define('PERMISSION_UPDATE','menu_permission/update');

// Endpoint USER
define('USER_GET','user/get');
define('USER_LIST','user/lists');
define('USER_CREATE','user/create');
define('USER_UPDATE','user/update');

// Endpoint ADDRESS
define('PROVINCE_LIST','address/list_province');
define('REGENCY_LIST','address/list_regency');
define('DISTRICT_LIST','address/list_district');
define('VILLAGE_LIST','address/list_village');

// Endpoint USER HISTORY
define('USERHISTORY_LIST','user/history_lists');

// Endpoint LEAD
define('LEAD_LIST','lead/lists');
define('LEAD_SEARCH','lead/get');
define('LEAD_GET','lead/detail');
define('LEAD_CREATE','lead/create');
define('LEAD_UPDATE','lead/update');
define('LEAD_APPROVE','lead/approval');

// Endpoint REPORT
define('ACTIVITY_REPORT','report/activity');