<?php

namespace linlic\JsonRpc;

interface AnnualAssessmentBatchServicerInterface
{
    /**
     * 前置PRC
     * org_id string 机构编号
     * system_id string 系统编号
     * menu_id string 菜单编号
     * pre_params array 前置页保存参数
     */
    public function preFormConfig(array $params): array;

    /**
     * 校验RPC
     * @param array $params
     * @return array
     */
    public function validConfig(array $params):array;

    /**
     * 模板RPC
     * @param array $params
     * @return array
     */
    public function templateConfig(array $params):array;

    /**
     * 导入PRC
     * @param array $params
     * @return array
     */
    public function importData(array $params):array;
}