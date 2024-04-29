<?php

namespace linlic\JsonRpc;

interface CycleViewServiceInterface
{

    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function viewField(array $params):array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function viewConf(array $params):array;

    /**
     * 可用的出科考核项
     * @param array $params
     * @return array
     */
    public function LeaveDeptItem(array $params):array;

    /**
     * 保存机构出科设置
     * @param string $org_id 机构id
     * @param string $system_id 系统id
     * @param string $menu_id 菜单id
     * @param array $conf 菜单配置中的出科设置
     * @param string $created_by 创建时间
     * @return bool
     */
    public function saveOrgLeaveDeptSet(string $org_id,string $system_id,string $menu_id,array $conf,string $created_by):bool;

    /**
     * 数据共享
     * @param $params
     * @return array
     */
    public function dataSharing($params):array;
}