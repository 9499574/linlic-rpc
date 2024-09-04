<?php

namespace linlic\JsonRpc;

interface TeacherEvaluationServiceInterface
{

    /**
     * 师资评估-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function teacherEvaluationField($params):array;

    /**
     * 师资评估-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function teacherEvaluationConf($params):array;

    /**
     * 获取设置配置
     * @param array $params
     * @return array
     */
    public function getSetConf($params):array;
}
