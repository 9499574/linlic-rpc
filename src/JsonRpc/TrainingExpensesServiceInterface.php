<?php

namespace linlic\JsonRpc;

interface TrainingExpensesServiceInterface
{

    /**
     * 经费管理培训费用-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function trainingExpensesField($params):array;

    /**
     * 经费管理培训费用-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function trainingExpensesConf($params):array;

    /**
     * 获取设置配置
     * @param array $params
     * @return array
     */
    public function getSetConf(array $params):array;
}
