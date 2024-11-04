<?php

namespace linlic\JsonRpc;

interface CyclePlanServiceInterface
{
    /**
     * 数据共享
     * @param $params
     * @return array
     */
    public function dataSharing($params):array;
    /**
     * 新建排班-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function planField($params):array;

    /**
     * 新建排班-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function planConf($params):array;

    /**
     * 排班记录-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function planLogField($params):array;

    /**
     * 获取轮转排班已存在的用户ID
     * @param array $params ['system_id'=>'111','start_date'=>'2024-3-20']
     * @return array
     */
    public function getCyclePlanExistsUserId(array $params):array;

    /**
     * 获取轮转排班计划名称下拉框
     * @param int $org_id
     * @param string $system_id
     * @param string $menu_id
     * @return array
     */
    public function getPlanNameOptions(int $org_id,string$system_id,string $menu_id):array;

    /**
     * 获取轮转排班用户列表
     * @param int $org_id
     * @param string $system_id
     * @param string $menu_id
     * @return array
     */
    public function getUserList(int $org_id, string $system_id, string $menu_id):array;

    /**
     * 获取我的轮转计划列表字段
     * @param array $params
     * @return array
     */
    public function getMyCyclePlanFields(array $params):array;

    /**
     * 获取轮转模板筛选条件
     * @param array $params
     * @return array
     */
    public function getCycleTemplateFilter(array $params):array;

    /**
     * 获取轮转子模板筛选条件
     * @param array $params
     * @return array
     */
    public function getCycleSubTemplateFilter(array $params):array;
}