<?php

namespace linlic\JsonRpc;

interface DormServiceInterface
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
     * 我的宿舍功能字段
     * @param $params
     * @return array
     */
    public function myDormFields($params):array;

    /**
     * 我的宿舍功能配置
     * @param $params
     * @return array
     */
    public function myDormConfigs($params):array;

    /**
     * 入住流程参数
     * @param array $params
     * @return array
     */
    public function flowParams(array $params): array;

    /**
     * 入住流程回调
     * @param array $params
     * @return bool
     */
    public function flowCallBack(array $params): bool;

    /**
     * 退宿流程参数
     * @param array $params
     * @return array
     */
    public function flowParamsOut(array $params): array;

    /**
     * 退宿流程回调
     * @param array $params
     * @return bool
     */
    public function flowCallBackOut(array $params): bool;

    //获取常量选择
    public function getConstOptions():array;

    /**
     * 获取页面配置
     * @param array $params
     * @return bool
     */
    public function getSetConf(array $params):array;
}