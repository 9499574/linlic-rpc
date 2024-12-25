<?php

namespace linlic\JsonRpc;

interface AdmissionManageServiceInterface
{
    /**
     * 录取管理功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getAdmissionField(array $params):array;

    /**
     * 录取管理功能配置
     * @param array $params
     * @return array
     */
    public function getAdmissionConf(array $params):array;

    /**
     * 报到管理功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getReportField(array $params):array;

    /**
     * 报到管理功能配置
     * @param array $params
     * @return array
     */
    public function getReportConf(array $params):array;

    /**
     * 报名管理功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getApplyField(array $params):array;

    /**
     * 报名管理功能配置
     * @param array $params
     * @return array
     */
    public function getApplyConf(array $params):array;

    /**
     * 获取筛选下拉选项
     * @param array $params
     * @param string $key
     * @return array
     */
    public function getFilterOptions(array $params, string $key):array;


}