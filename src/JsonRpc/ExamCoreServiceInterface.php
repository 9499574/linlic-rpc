<?php

namespace linlic\JsonRpc;

interface ExamCoreServiceInterface
{

    /**
     * 考试使用端-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function examCoreField($params):array;

    /**
     * 考试使用端-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function examCoreConf($params):array;
}
