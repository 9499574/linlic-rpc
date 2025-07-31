<?php

namespace linlic\JsonRpc;

interface SchedulingServiceInterface
{
    /**
     * 考勤排班功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params) :array;

    /**
     * 考勤排班菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

    /**
     * 考勤排班机构设置
     * @param array $params
     * @return array
     */
    public function schedulingSetConf(array $params):array;

}