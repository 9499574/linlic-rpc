<?php

namespace linlic\JsonRpc;

interface SystemMenuServiceInterface
{
    /**
     * 通过菜单ID获取详情数据
     * @param array $menu_id
     * @return array
     */
    public function menuIdGetDataList(array $menu_id):array;

    /**
     * 通过系统ID获取菜单
     * @param $system_id
     * @return array
     */
    public function getSystemMenuList($system_id):array;
}