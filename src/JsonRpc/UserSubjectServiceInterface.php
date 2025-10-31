<?php

namespace linlic\JsonRpc;

interface UserSubjectServiceInterface
{
    /**
     * 学科管理-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function userSubjectField($params):array;

    /**
     * 学科管理-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function userSubjectConf($params):array;

    public function getSetConf($params):array;
}