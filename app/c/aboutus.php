<?php
/**
 *  Description of Examine
 *
 * @author LJ <jun.lu.726@gmail.com>
 * @copyright @copyright
 * @history    2014-04-16 10:29:58::  Lujun  ::  Create File
 * $Id: aboutus.php.php 0 2014-04-16 10:29:58Z lujun $
 */

class c_aboutus extends c_cabstract
{

    public function indexAction()
    {
        $data = model('pageConf')->row(1);
        return array('data' => $data, 'p' => 2);
    }
}
