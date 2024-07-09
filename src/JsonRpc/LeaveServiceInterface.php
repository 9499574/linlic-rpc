<?php

namespace linlic\JsonRpc;

interface LeaveServiceInterface
{
    /**
     * 获取机构的请假类型下拉选项
     * @param array $params
     * @return array
     */
    public function getLeaveTypeOptions(array $params):array;
}