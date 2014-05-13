<?php

/**
 *  Description of Examine
 *
 * @author LJ <jun.lu.726@gmail.com>
 * @copyright @copyright
 * @history    2014-04-14 06:01:05::  Lujun  ::  Create File
 * $Id: new.php.php 0 2014-04-14 06:01:05Z lujun $
 */
class c_job extends c_cabstract
{

    public function indexAction()
    {
        $page     = max(1, intval($this->getInt(0)));
        $pageSize = 15;
        $start    = ($page - 1 ) * $pageSize;
        $listNews = array();
        $whereArr = array('news_type' => 2);
        //查询
        $count    = model('news')->getCnt($whereArr);

        if ($count) {
            $listNews = model('news')->getPage($whereArr, $start, $pageSize);
        }

        return array('listNews' => $listNews, 'page' => $page, 'cnt' => ceil($count / $pageSize), 'p' => 4);
    }

    public function viewAction()
    {
        $id  = $this->getInt(0);
        $row = model('news')->row($id);
        if (empty($row)) {
            header("/error/index.html");
            exit;
        } else {
            return array('row' => $row, 'p' => 4);
        }
    }

}
