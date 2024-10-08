<?php

namespace linlic\JsonRpc;

interface TeacherServiceInterface
{
    /**
     * 功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getFields($params):array;

    /**
     * 功能配置
     * @return array
     */
    public function getConfigs():array;
}