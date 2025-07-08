<?php

namespace linlic\JsonRpc;

interface UserBatchRpcServiceInterface
{
    /**
     * 前置PRC
     * org_id string 机构编号
     * system_id string 系统编号
     * menu_id string 菜单编号
     * pre_params array 前置页保存参数
     */
    public function preFormConfigAdd(array $params): array;


    /**
     * 校验RPC
     * org_id string 机构编号
     * system_id string 系统编号
     * menu_id string 菜单编号
     * pre_params array 前置页保存参数
     */
    public function validConfigAdd(array $params): array;


    /**
     * 模板RPC
     * org_id string 机构编号
     * system_id string 系统编号
     * menu_id string 菜单编号
     * pre_params array 前置页保存参数
     */
    public function templateConfigAdd(array $params): array;

    /**
     * 导入PRC
     * 接口请求参数：redisKey
     * cache里面存放如下数据：
     * params:org_id、system_id、menu_id、pre_params、uid
     * data:["sheet1"=>[["user_name"=>"1111"]]]
     */
    public function importDataAdd(array $params): array;


    /**
     * 前置PRC
     * org_id string 机构编号
     * system_id string 系统编号
     * menu_id string 菜单编号
     * pre_params array 前置页保存参数
     */
    public function preFormConfigUpdate(array $params): array;


    /**
     * 校验RPC
     * org_id string 机构编号
     * system_id string 系统编号
     * menu_id string 菜单编号
     * pre_params array 前置页保存参数
     */
    public function validConfigUpdate(array $params): array;


    /**
     * 模板RPC
     * org_id string 机构编号
     * system_id string 系统编号
     * menu_id string 菜单编号
     * pre_params array 前置页保存参数
     */
    public function templateConfigUpdate(array $params): array;

    /**
     * 导入PRC
     * 接口请求参数：redisKey
     * cache里面存放如下数据：
     * params:org_id、system_id、menu_id、pre_params、uid
     * data:["sheet1"=>[["user_name"=>"1111"]]]
     */
    public function importDataUpdate(array $params): array;
}