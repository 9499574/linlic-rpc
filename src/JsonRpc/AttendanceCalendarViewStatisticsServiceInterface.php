<?php

namespace linlic\JsonRpc;

interface AttendanceCalendarViewStatisticsServiceInterface
{
    /**
     * 日历视图考勤统计-功能配置
     * @param array $params
     * @return array
     */
    public function getConfigs($params):array;
}