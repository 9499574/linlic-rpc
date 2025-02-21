<?php

namespace linlic\JsonRpc;

interface MenuServiceInterface
{
    /**
     * 获取基础功能名称
     * @param array $menu_ids
     * @return array
     */
    public function getMenuName(array $menu_ids):array;


    /**
     * 获取接口地址
     * @param array $menuIds
     * @return array
     */
    public function getInterfaceUrl(array $menuIds):array;
}