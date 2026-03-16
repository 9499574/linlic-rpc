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
}