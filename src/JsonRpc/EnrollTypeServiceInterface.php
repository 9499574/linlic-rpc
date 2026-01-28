<?php

namespace linlic\JsonRpc;

interface EnrollTypeServiceInterface
{
    /**
     * 报名类型-获取选中需要填写的报名字段（根据计划ID查询）
     * @param int $orgId 机构ID
     * @param array $enroll_ids 报名计划ID
     * @return array
     */
    public function getEnrollTypeSignWriteFields(int $orgId, array $enroll_ids): array;
}