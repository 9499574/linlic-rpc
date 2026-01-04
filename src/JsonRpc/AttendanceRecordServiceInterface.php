<?php

namespace linlic\JsonRpc;

interface AttendanceRecordServiceInterface
{
    /*
     * 考勤记录功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 考勤记录菜单设置的接口
     * @param array $params
     * @return array
     * @Author: chengshuang
     */
    public function getConfigs(array $params): array;

}