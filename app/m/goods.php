<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class m_goods extends m_mabstract
{

    function cGoodsType($dataArr)
    {
        return $this->db->insert('qy_goods_type', $dataArr);
    }

    function rowGoodsType($id)
    {
        $sql = 'select * from `qy_goods_type` where `id` = ' . $id;
        return $this->db->get_one($sql);
    }

    function uGoodsType($setArr, $whereSql)
    {
        return $this->db->update('qy_goods_type', $setArr, $whereSql);
    }

    function goodsTypeAll()
    {
        $sql = 'select *  from qy_goods_type where 1 ';
        return $this->db->get_all($sql);
    }

    /**
     * 物品分类KV
     * @return type
     */
    function goodsTypeKV()
    {
        $tmp  = array();
        $list = $this->goodsTypeAll();
        if ($list) {
            foreach ($list as $key => $val) {
                $tmp[$val['id']] = $val['type_name'];
            }
        }
        return $tmp;
    }

    function cgoods($dataArr)
    {
        return $this->db->insert('qy_goods', $dataArr);
    }

    function goodsrow($id)
    {
        $sql = 'select * from `qy_goods` where `id` = ' . $id;
        return $this->db->get_one($sql);
    }

    function goodsupdate($setArr, $whereSql)
    {
        return $this->db->update('qy_goods', $setArr, $whereSql);
    }

    public function goodsPage($whereArr, $start, $pageSize)
    {
        $sql = 'select *  from qy_goods where 1 ' . $this->db->arr2StrW($whereArr) . ' limit ' . $start . ' , ' . $pageSize;
        return $this->db->get_all($sql);
    }

    public function goodsCnt($whereArr)
    {
        $sql = 'select count(*)  as num from qy_goods where 1 ' . $this->db->arr2StrW($whereArr);
        $tmp = $this->db->get_one($sql);

        return $tmp['num'];
    }

}
