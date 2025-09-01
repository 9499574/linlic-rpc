<?php

namespace linlic\JsonRpc;

interface PracticeQuestionServiceInterface
{
    /**
     * 根据机构org_id、菜单menu_id 获取是否开通了试题练习的 本院题库，云管家题库权限(优先角色id权限，其次是总体题库开放比例)
     * @param string $org_id 机构Id
     * @param string $menu_id 菜单Id
     * @return array 返回的数据格式返回格式如：[["option_label"=>"云管家题库","option_value"=>"yunCate"],["option_label"=>"本院题库","option_value"=>"orgCate"]]
     */
    public function getTopCateOptions(string $org_id, string $menu_id): array;
}