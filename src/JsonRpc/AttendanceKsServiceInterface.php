<?php

namespace linlic\JsonRpc;

interface AttendanceKsServiceInterface
{
    /**
     * 科室考勤统计-模块字段
     * @param array $params
     * @return array
     */
    public function getFields($params):array;
    /**
     * 科室考勤统计-功能配置
     * @param array $params
     * @return array
     */
    public function getConfigs($params):array;
}
