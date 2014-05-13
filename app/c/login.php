<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class c_login extends c_cabstract
{

    public function __construct()
    {
        $this->_bg = true;
    }

    public function indexAction()
    {
        if ($this->isPost()) {
            if ($_POST['name'] == 'admin' && $_POST['psd'] == 'admin') {

                $_SESSION['username'] = 'admin';

                header("Location: /admin/index.html");
            } else {
                return $this->jsonx('账号或密码错误', 'err');
            }
        }
    }

}
