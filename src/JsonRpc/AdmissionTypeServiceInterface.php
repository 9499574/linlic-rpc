<?php

namespace linlic\JsonRpc;

interface AdmissionTypeServiceInterface
{
    /**
     * 招录类型-获取选中需要填写的报名字段（根据招录计划ID查询）
     * @param int $orgId 机构ID
     * @param array $admissionPlanId 招录计划ID
     * @return array
     */
    public function getAdmissionTypeSignWriteFields(int $orgId, array $admissionPlanId): array;
}