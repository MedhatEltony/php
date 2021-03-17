<?php
//Stateless
//session
//session_name('Medhat');

//session_set_cookie_params(0, '/', 'localhost', false, true);

$path = dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'sessions';
session_save_path($path);


session_start();

//$_SESSION['Massage'] = 'I am Medhat';
echo $_SESSION['Massage'];

echo $_SESSION['Massage'];
//session_regenerate_id(true);
//var_dump($_SESSION);
//var_dump(session_get_cookie_params());
// echo sys_get_temp_dir();

// echo '<br>';

// echo 'sess_' . session_id();

// $_SESSION['name'] = 'Medhat Eltony';
// $_SESSION['date '] = '123123212';


// echo $_SESSION['name'];


//Session Locking
//session_write_close();
//mcrypt_module_get_algo_key_size(MCRYPT_BLOWFISH);
$key = 'WYCRYPT0K3Y02016';
$encript = mcrypt_encrypt(MCRYPT_BLOWFISH, $key, 'Welcome to cryptography session', MCRYPT_MODE_ECB);
