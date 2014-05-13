<?php
/**
 *  Description of Examine
 *
 * @author LJ <jun.lu.726@gmail.com>
 * @copyright @copyright
 * @history    2014-04-16 10:35:40::  Lujun  ::  Create File
 * $Id: contacway.php 0 2014-04-16 10:35:40Z lujun $
 */

class c_contacway extends c_cabstract
{

    public function indexAction()
    {
        $data = model('pageConf')->row(2);
        return array('data' => $data, 'p' => 5);
    }
}

