<?php

namespace linlic\JsonRpc;

interface TtcourseServiceInterface
{
    /**
     * 功能字段
     * @param $params
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
     * 获取常量选择
     * @param $params
     * @return array
     */
    public function getConstOptions($params):array;
}