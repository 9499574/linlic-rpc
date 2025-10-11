<?php

namespace linlic\JsonRpc;

interface SupervisionFeedbackServiceInterface
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
     * 督导专家功能字段
     * @param $params
     * @return array
     */
    public function MyFields($params):array;

    /**
     * 督导专家菜单配置
     * @param $params
     * @return array
     */
    public function MyConfigs($params):array;

    //获取常量选择
    public function getConstOptions():array;

    /**
     * 打分回调
     * @param $params
     * @return void
     */
    public function scoreCallBack($params):void;
}