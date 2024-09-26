<?php

namespace linlic\JsonRpc;

interface TeacherQualificationServiceInterface
{

    /**
     * 师资管理-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function teacherQualificationField($params):array;

    /**
     * 师资管理-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function teacherQualificationConf($params):array;

    /**
     * 获取设置配置
     * @param array $params
     * @return array
     */
    public function getSetConf($params):array;
}
