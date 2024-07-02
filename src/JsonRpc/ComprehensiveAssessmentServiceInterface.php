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
}