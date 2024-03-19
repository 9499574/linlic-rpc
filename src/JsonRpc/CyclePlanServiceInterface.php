<?php

namespace linlic\JsonRpc;

interface CyclePlanServiceInterface
{
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
}