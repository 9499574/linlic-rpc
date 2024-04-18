<?php

namespace linlic\JsonRpc;

interface ExamServiceInterface
{

    /**
     * 考试-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function examField($params):array;

    /**
     * 考试-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function examConf($params):array;

    /**
     * 考试-自动发布记录-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function examAutoPublishField($params):array;

}