<?php

namespace linlic\JsonRpc;

interface CourseServiceInterface
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
     * app功能字段
     * @param $params
     * @return array
     */
    public function getAppFields($params):array;

    /**
     * app功能配置
     * @param $params
     * @return array
     */
    public function getAppConfigs($params):array;

}