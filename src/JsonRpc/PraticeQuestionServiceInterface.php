<?php

namespace linlic\JsonRpc;

interface PracticeServiceInterface
{
    /**
     * 根据机构id，系统id、角色ids 获取是否开通了试题练习的 本院题库，云管家题库权限(优先角色id权限，其次是总体库开发比例)
     * @param string $orgId 机构Id
     * @param string $systemId 系统Id
     * @param array $roleId 角色Id
     * @return array 返回的数据格式返回格式如：[["option_label"=>"云管家题库","option_value"=>"yunCate"],["option_label"=>"本院题库","option_value"=>"orgCate"]]
     */
    public function getTopCateOptions(string $orgId, string $systemId, array $roleId = []): array;
}