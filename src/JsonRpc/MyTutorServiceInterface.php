<?php

namespace linlic\JsonRpc;

interface MyTutorServiceInterface
{
    /**
     * 功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 功能配置
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params):array;
}