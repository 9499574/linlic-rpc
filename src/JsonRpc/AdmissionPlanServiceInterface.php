<?php

namespace linlic\JsonRpc;

interface AdmissionPlanServiceInterface
{
    /**
     * 功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function admissionPlanField(array $params):array;

    /**
     * 功能配置
     * @param array $params
     * @return array
     */
    public function admissionPlanConf(array $params):array;

    /**
     * 获取筛选下拉选项
     * @param array $params
     * @param string $key
     * @return array
     */
    public function getFilterOptions(array $params, string $key):array;


}