<?php

namespace linlic\JsonRpc;

interface AnnualAssessmentServiceInterface
{
    /**
     * 年度审核功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params): array;

    /**
     * 年度审核菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params): array;

    /**
     * 获取考核项目配置
     * @param array $params
     * @return array
     */
    public function getAssessmentItemsConfig(array $params): array;

    /**
     * 更新填报记录ID
     * @param array $params
     * @return array
     */
    public function updateFillingFormId(array $params): array;
}