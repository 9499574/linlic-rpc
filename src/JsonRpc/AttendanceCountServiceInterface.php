<?php

namespace linlic\JsonRpc;

interface AttendanceCountServiceInterface
{
    /**
     * 考勤统计功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params) :array;

    /**
     * 考勤统计菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

    /**
     * 考勤统计流程回调
     * @param array $params
     * @return bool
     */
    public function attendanceFlowCallback(array $params): bool;
}