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
    /**
     * 调查问卷接口
     * @param array $params
     * @return array
     */
    public function surveyPublishList(array $params): array;

    /**
     * 新增调查问卷
     * @param array $params
     * @return bool
     */
    public function addSurveyPublish(array $params): bool;

    /**
     * 获取调查问卷用户填写信息
     * @param array $params
     * @return array
     * */
    public function getSurveyPublishUserData(array $params): array;
}