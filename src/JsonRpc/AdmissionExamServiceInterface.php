<?php

namespace linlic\JsonRpc;

interface AdmissionExamServiceInterface
{
    /**
     * 功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function admissionExamField(array $params):array;

    /**
     * 功能配置
     * @param array $params
     * @return array
     */
    public function admissionExamConf(array $params):array;

    /**
     * 获取筛选下拉选项
     * @param array $params
     * @param string $key
     * @return array
     */
    public function getFilterOptions(array $params, string $key):array;


}