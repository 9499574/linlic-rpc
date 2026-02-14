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

    /**
     * 修改考勤记录的备注
     * @param string $attendance_record_id
     * @param string $remark
     * @return bool
     */
    public function editAttendanceRecordRemark(string $attendance_record_id, string $remark): bool;

    /**
     * 获取考勤记录列表
     * @param array $params
     * @return array
     */
    public function getAttendanceRecordList(array $params): array;

}