<?php

namespace linlic\JsonRpc;

interface ScheduleServiceInterface
{

    /**
     * 模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function cheduleField($params):array;

    /**
     * 配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function cheduleConf($params):array;

    /**
     * 添加日程
     * @param $params
     * @return array
     */
    public function addSchedule($params): array;

    /**
     * 修改日程
     * @param $params
     * @return array
     */
    public function updateSchedule($params): array;

    /**
     * 删除日程
     * @param $params
     * @return array
     */
    public function deleteSchedule($params): array;
}
