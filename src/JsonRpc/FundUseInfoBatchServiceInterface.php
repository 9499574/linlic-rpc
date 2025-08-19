<?php

namespace linlic\JsonRpc;

interface FundUseInfoBatchServiceInterface
{
    /**
     * 前置 RPC
     * org_id string 机构编号
     * system_id string 系统编号
     * menu_id string 菜单编号
     * pre_params array 前置页保存参数
     * @param array $params
     * @return array
     */
    public function preFormConfig(array $params): array;
    
    /**
     * 模板 RPC
     * org_id string 机构编号
     * system_id string 系统编号
     * menu_id string 菜单编号
     * pre_params array 前置页保存参数
     * @param array $params
     * @return array
     */
    public function templateConfig(array $params): array;

    /**
     * 校验 RPC
     *  org_id string 机构编号
     *  system_id string 系统编号
     *  menu_id string 菜单编号
     *  pre_params array 前置页保存参数
     * @param array $params
     * @return array
     */
    public function validConfig(array $params) :array;

    /**
     * 导入 RPC
     * 接口请求参数：redisKey
     * cache里面存放如下数据：
     * params:org_id、system_id、menu_id、pre_params、uid
     * data:["sheet1"=>[["user_name"=>"1111"]]]
     * @param array $params
     * @return array
     */
    public function importData(array $params): array;
}