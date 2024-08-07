<?php

namespace linlic\JsonRpc;

interface SystemMenuServiceInterface
{
    /**
     * 通过基础菜单编号获取关联相同的菜单配置数据
     * @param int $org_id
     * @param array $menu_id
     * @param string $system_id
     * @return array
     */
    public function menuIdGetSystemModuleData(int $org_id,array $menu_id,string $system_id=''):array;

    /**
     * 通过系统编号获取系统关联的功能配置
     * @param $system_id
     * @param array $where
     * @param string $where_raw
     * @return array
     */
    public function getSystemModuleFunConf($system_id, array $where = [],string $where_raw=''): array;


    /**
     * 通过系统组件编号获取数据
     * @param array $system_module_id
     * @param array $where
     * @return array
     */
    public function systemModuleIdGetData(array $system_module_id, array $where = []): array;

    /**
     * 通过模块功能编号获取表数据
     * @param array $fun_id
     * @return array
     */
    public function moduleFunIdGetData(array $fun_id): array;

    /**
     * 通过菜单编号获取表数据
     * @param array $menu_id
     * @return array
     */
    public function menuIdGetData(array $menu_id): array;

    /**
     * 通过基础功能ID获取机构系统菜单列表
     * @param array $menu_id
     * @param $org_id
     * @param $system_id
     * @return array
     */
    public function baseMenuIdGetOrgSystemMenuList($org_id, $system_id, array $menu_id): array;

    /**
     * 获取机构菜单数据
     * @param int $org_id
     * @param array $select
     * @param array $where
     * @param string $where_raw
     * @return array
     */
    public function getOrgMenuList(int $org_id,array $select =['*'],array $where=[],string $where_raw=''):array;

    /**
     * 通过基础菜单id获取机构菜单
     * @param array $menu_id
     * @return array
     */
    public function getOrgMenuListByBaseMenuId(array $menu_id):array;

}