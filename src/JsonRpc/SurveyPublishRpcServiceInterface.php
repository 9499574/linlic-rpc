<?php

namespace linlic\JsonRpc;

interface SurveyPublishRpcServiceInterface
{
    /**
     * 功能字段接口
     * @param array $params
     * @return array
     */
    public function moduleFields(array $params):array;


    /**
     * 功能配置接口
     * @param array $params
     * @return array
     */
    public function moduleConfig(array $params):array;


    /**
     * 机构设置接口
     * @param array $params
     * @return array
     */
    public function orgSet(array $params):array;

    /**
     * 分析报告word|pdf导出
     * @param array $businessParams
     * @return array
     */
    public function exportReportList(array $businessParams):array;
}