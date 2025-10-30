<?php

namespace linlic\JsonRpc;

interface SchedulingServiceInterface
{
    /**
     * 考勤排班功能字段1
     * @param array $params
     * @return array
     */
    public function getFields(array $params) :array;

    /**
     * 考勤排班菜单配置2
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

    /**
     * 考勤排班机构设置3
     * @param array $params
     * @return array
     */
    public function schedulingSetConf(array $params):array;

    /**
     * 获取某一天的考勤排班数据
     * @param string $menuId
     * @param string $date
     * @return array
     */
    public function getShiftSchedulingData(string $menuId, string $date):array;
}