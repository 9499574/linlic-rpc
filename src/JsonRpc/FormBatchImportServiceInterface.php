<?php

namespace linlic\JsonRpc;
/**
 * 填报表单 批量导入
 */
interface FormBatchImportServiceInterface
{
    /**
     * org_id string 机构编号
     * system_id string 系统编号
     * menu_id string 菜单编号
     * pre_params array 前置页保存参数
     */
    public function preFormConfig(array $params): array;


    /**
     * org_id string 机构编号
     * system_id string 系统编号
     * menu_id string 菜单编号
     * pre_params array 前置页保存参数
     */
    public function validConfig(array $params): array;


    /**
    org_id string 机构编号
     * system_id string 系统编号
     * menu_id string 菜单编号
     * pre_params array 前置页保存参数
     */
    public function templateConfig(array $params): array;


    /**
     * 接口请求参数：redisKey
     * cache里面存放如下数据：
     * params:org_id、system_id、menu_id、pre_params、uid
     * data:["sheet1"=>[["user_name"=>"1111"]]]
     */
    public function importData(array $params): array;
}