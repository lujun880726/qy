<?php

/**
 *  Description of Examine
 *
 * @author LJ <jun.lu.726@gmail.com>
 * @copyright @copyright
 * @history    2014-04-15 04:04:46::  Lujun  ::  Create File
 * $Id: goods.php 0 2014-04-15 04:04:46Z lujun $
 */
class c_goods extends c_cabstract
{

    public function indexAction()
    {
        $list     = $whereArr = array();

        $typelist = model('goods')->goodsTypeKV();

        $page     = max(1, intval($this->getInt(1)));
        $pageSize = 6;
        $start    = ($page - 1 ) * $pageSize;

        $type = $this->getInt(0);
        if ($type > 0) {
            $whereArr['goods_type'] = $type;
        }
        //查询
        $count = model('goods')->goodsCnt($whereArr);
        if ($count) {
            $list = model('goods')->goodsPage($whereArr, $start, $pageSize);
        }
        return array('typelist' => $typelist, 'type' => $type, 'list' => $list, 'page' => $page, 'cnt' => ceil($count / $pageSize), 'p' => 3);
    }

    public function viewAction()
    {
        $id  = $this->getInt(0);
        $row = model('goods')->goodsrow($id);
        if (empty($row)) {
            header("/error/index.html");
            exit;
        } else {
            return array('row' => $row, 'p' => 3);
        }
    }

}
