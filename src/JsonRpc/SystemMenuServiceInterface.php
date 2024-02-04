<?php

namespace linlic\JsonRpc;

interface SystemMenuServiceInterface
{
    /**
     * 通过系统编号获取系统关联的功能配置
     * @param $system_id
     * @return array
     */
    public function getSystemModuleFunConf($system_id):array;

    /**
     * 通过模块功能编号获取表数据
     * @param array $fun_id
     * @return array
     */
    public function moduleFunIdGetData(array $fun_id):array;

    /**
     * 通过菜单编号获取表数据
     * @param array $menu_id
     * @return array
     */
    public function menuIdGetData(array $menu_id):array;
}