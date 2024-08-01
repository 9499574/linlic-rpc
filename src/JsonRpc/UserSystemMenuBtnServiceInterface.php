<?php

namespace linlic\JsonRpc;

interface UserSystemMenuBtnServiceInterface
{
    /**
     * 获取用户系统菜单按钮列表
     * @param string $system_id
     * @param array $menu_id
     * @return array
     */
    public function getUserSystemMenuBtnList(string $system_id,array $menu_id):array;
}