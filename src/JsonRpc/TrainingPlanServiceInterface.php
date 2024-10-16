<?php

namespace linlic\JsonRpc;

interface TrainingPlanServiceInterface
{
    /**
     * 功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getFields($params):array;

    /**
     * 功能配置
     * @param $params
     * @return array
     */
    public function getConfigs($params):array;

    /**
     * 培养计划表单填报回调
     * @param $params
     * @return bool
     */
    public function submitTrainingPlanCallBack($params): bool;
}