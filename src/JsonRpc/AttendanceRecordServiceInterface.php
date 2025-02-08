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

}