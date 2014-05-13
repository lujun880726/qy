<?php

/* 新闻数据
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class m_news extends m_mabstract
{

    /**
     * 新建一条新闻
     * @param type $dataArr
     * @return type
     */
    function cnews($dataArr)
    {
        return $this->db->insert('qy_news', $dataArr);
    }

    function row($id)
    {
        $sql = 'select * from `qy_news` where `id` = ' . $id;
        return $this->db->get_one($sql);
    }

    function update($setArr, $whereSql)
    {
        return $this->db->update('qy_news', $setArr, $whereSql);
    }

    public function getPage($whereArr, $start, $pageSize)
    {
        $sql = 'select *  from qy_news where 1 ' . $this->db->arr2StrW($whereArr) . ' limit ' . $start . ' , ' . $pageSize;
        return $this->db->get_all($sql);
    }

    public function getCnt($whereArr)
    {
        $sql = 'select count(*)  as num from qy_news where 1 ' . $this->db->arr2StrW($whereArr);
        $tmp = $this->db->get_one($sql);

        return $tmp['num'];
    }

}
