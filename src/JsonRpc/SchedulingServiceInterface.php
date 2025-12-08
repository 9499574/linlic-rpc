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
     * @param array $menuId
     * @param string $date
     * @return array
     */
    public function getShiftSchedulingData(array $menuId, string $date):array;

    /**
     * 获取指定月份未排班的人数统计
     * @param string $month Y-m
     * @param string $orgId
     * @param string $systemId
     * @param string $menuId
     * @param array $hdId
     * @return array
     */
    public function countNoSchedulingUserNum(string $month, string $orgId, string $systemId, string $menuId, array $hdId = []): array;

    /**
     * 获取某一天没有排班的用户ID列表
     * @param string $day Y-m-d
     * @param string $orgId
     * @param string $systemId
     * @param string $menuId
     * @param array $hdId
     * @return array
     */
    public function getNoSchedulingUserIdsByDay(string $day, string $orgId, string $systemId, string $menuId, array $hdId = []): array;
}