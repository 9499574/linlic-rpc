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
}