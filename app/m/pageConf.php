<?php
/**
 *  Description of Examine
 *
 * @author LJ <jun.lu.726@gmail.com>
 * @copyright @copyright
 * @history    2014-04-16 10:19:40::  Lujun  ::  Create File
 * $Id: pageConf.php 0 2014-04-16 10:19:40Z lujun $
 */

class m_pageConf extends m_mabstract
{

    /**
     * 新建一条新闻
     * @param type $dataArr
     * @return type
     */
    function cpageconf($dataArr)
    {
        return $this->db->insert('qy_page_conf', $dataArr);
    }

    function row($id)
    {
        $sql = 'select * from `qy_page_conf` where `id` = ' . $id;
        return $this->db->get_one($sql);
    }

    function update($setArr, $whereSql)
    {
        return $this->db->update('qy_page_conf', $setArr, $whereSql);
    }

    public function getPage($whereArr, $start, $pageSize)
    {
        $sql = 'select *  from qy_page_conf where 1 ' . $this->db->arr2StrW($whereArr) . ' limit ' . $start . ' , ' . $pageSize;
        return $this->db->get_all($sql);
    }

    public function getCnt($whereArr)
    {
        $sql = 'select count(*)  as num from qy_page_conf where 1 ' . $this->db->arr2StrW($whereArr);
        $tmp = $this->db->get_one($sql);

        return $tmp['num'];
    }

}