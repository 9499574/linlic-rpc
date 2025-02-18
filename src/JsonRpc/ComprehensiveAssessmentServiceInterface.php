<?php

namespace linlic\JsonRpc;

interface ComprehensiveAssessmentServiceInterface
{
    /**
     * 功能字段
     *
     * @return array
     */
    public function getFields($params): array;

    /**
     * 功能配置
     *
     * @return array
     */
    public function getConfigs($params): array;

    /**
     * 数据共享
     *
     * @return array
     */
    public function getMenuConfWhere(array $params): array;

    /**
     * 机构端设置项配置
     */
    public function getSettingConf(array $params): array;

    /**
     * 表单中心保存表单后的回调
     */
    public function saveFormCallback(array $params): bool;

    /**
     * 流程参数
     */
    public function flowParams(array $params): array;

    /**
     * 流程回调
     */
    public function callBack(array $params): bool;

    /**
     * 流程人员类型
     */
    public function flowCustomUserType(array $params): array;

    /**
     * 获取出科百分比数据
     */
    public function getLeaveDeptPercentData($params): array;

    /**
     * 获取出科分数数据
     */
    public function getLeaveDeptScoreData($params): array;

    /**
     * 获取出科数量数据
     */
    public function getLeaveDeptNumData($params): array;

    /**
     * 导出详情数据
     * @param array $businessParams
     * @return array
     *
     */
    public function exportDetailData(array $businessParams):array;

    /**
     * 获取评估列表
     * @param array $params
     * @return array
     */
    public function getAssessList(array $params):array;

    /**
     * 综合评估消息注册 
     * @return array
     */
    public function caNoticeReg():array;

}