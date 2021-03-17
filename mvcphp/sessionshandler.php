<?php

define('SESSION_SAVE_PATH', dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR . 'sessions');


class AppSessionHandler extends SessionHandler
{
    private $sessionName = 'MYAPPSESS';
    private $sessionMaxlifetime = 0;
    private $sessionssl = false;
    private $sessionHTTPOnly = true;
    private $sessionPath = '/';
    private $sessionDomain = 'localhost';
    private $sessionSavaPath = SESSION_SAVE_PATH;


    private $sessionCipherAlgo = MCRYPT_BLOWFISH;
    private $sessionCipherMode = MCRYPT_MODE_ECB;
    private $sessionCipherKey = "WYCRYPT0K3Y@2016";

    private $ttl = 1;
    public function __construct()
    {
        ini_set('session.use_cookies', 1);
        ini_set('session.use_only_cookies', 1);
        ini_set('session.use_trans_sid', 0);
        ini_set('session.save_handler', 'files');


        session_name($this->sessionName);
        session_save_path($this->sessionSavaPath);

        session_set_cookie_params(
            $this->sessionMaxlifetime,
            $this->sessionPath,
            $this->sessionDomain,
            $this->sessionssl,
            $this->sessionHTTPOnly
        );

        session_set_save_handler($this, true);
    }
    public function __get($key)
    {

        return false !== $_SESSION[$key] ? $_SESSION[$key] : false;
    }
    public function __set($key, $value)
    {

        $_SESSION[$key] = $value;
    }

    public function __isset($key)
    {
        return isset($_SESSION[$key]) ? true : false;
    }

    public function read($id)
    {
        return mcrypt_decrypt($this->sessionCipherAlgo, $this->sessionCipherKey, parent::read($id), $this->sessionCipherMode);
    }
    public function write($id, $data)
    {
        return parent::write($id, mcrypt_encrypt($this->sessionCipherAlgo, $this->sessionCipherKey, $data, $this->sessionCipherMode));
    }
    public function start()
    {

        if ('' === session_id()) {

            if (session_start()) {
                $this->setSessionStartTime();
            }
        }
    }

    private function setSessionStartTime()
    {
        if (!isset($this->sessionStartTime)) {
            $this->sessionStartTime = time();
        }
        return true;
    }

    private function checkSessionvalidtity()
    {
        if ((time() -  $this->sessionStartTime) > ($this->ttl * 60)) {
            $this->renewSession();
        }
    }
    private function renewSession()
    {
        $this->setSessionStartTime = time();
        return session_regenerate_id(true);
    }

    public function kill()
    {
        session_unset();
        setcookie($this->sessionName, '', time() - 1000, $this->sessionPath, $this->sessionDomain, $this->sessionssl, $this->sessionHTTPOnly);
        session_destroy();
    }

    public function isValidFingerPrint()
    {
        if (!isset($this->fingerPrint)) {
            $userAgentId = $_SERVER['HTTP_USER_AGENT'];
            $this->cipherKey = mcrypt_create_iv(32);
            $sessionId = session_id();
            $this->fingerPrint = md5($userAgentId . $this->cipherKey . $sessionId);
        }
        $fingerPrint = md5($_SERVER['HTTP_USER_AGENT'] . $this->cipherKey . session_id());
        if ($fingerPrint === $this->fingerPrint) {
            return true;
        }

        return false;
    }
}

$session = new AppSessionHandler();
$session->start();
//$_SESSION['msg'] = 'This Text should be ';
//var_dump($session);
//echo date('H:i:s', $session->sessionStartTime);
if (!$session->isValidFingerPrint()) {
    $session->kill();
}
//echo $session->fingerPrint;
