<?php

namespace linlic\JsonRpc;

interface ActivityUserCountServiceInterface
{
    /**
     * 教学活动用户统计-模块字段
     * @param array $params
     * @return array
     */
    public function getFields($params):array;
    /**
     * 教学活动用户统计-功能配置
     * @param array $params
     * @return array
     */
    public function getConfigs($params):array;
}
