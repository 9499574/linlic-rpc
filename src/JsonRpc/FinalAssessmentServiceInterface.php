<?php

namespace linlic\JsonRpc;

interface FinalAssessmentServiceInterface
{
    /**
     * 结业考核功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params): array;

    /**
     * 结业考核菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params): array;

    /**
     * 结业考核机构配置
     * @param array $params
     * @return array
     */
    public function orgSet(array $params): array;

    /**
     * 结业考核流程回调
     * @param array $params
     * @return bool
     */
    public function finalAssessmentFlowCallback(array $params): bool;

    /**
     * 获取结业考核项目数据
     * @param array $params
     * @return array
     */
    public function getFinalAssessmentItem(array $params): array;

    /**
     * 更新承诺书填报记录ID
     * @param array $params
     * @return array
     */
    public function updatePromiseFormId(array $params): array;
}