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
    /**
     * 根据菜单menu_id 获取是否开通了试题练习的 云管家题库权限(优先角色id权限，其次是总体题库开放比例(所有分类))
     * @param string $menu_id 菜单Id
     * @param string $pid 上级分类Id
     * @return array 返回题库分类数组
     */
    public function getYunCateList(string $menu_id,string $pid=''): array;
    /**
     * 根据菜单menu_id 获取是否开通了试题练习的 本院题库，云管家题库权限(优先角色id权限，其次是总体题库开放比例其次是总体题库开放比例(所有分类))
     * @param string $menu_id 菜单Id
     * @param string $pid 上级分类Id
     * @return array 返回题库分类数组
     */
    public function getOrgCateList(string $menu_id,string $pid=''): array;

}