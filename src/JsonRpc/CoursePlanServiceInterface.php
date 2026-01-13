<?php

namespace linlic\JsonRpc;

interface CoursePlanServiceInterface
{

    /**
     * 排课计划-模块字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function coursePlanField($params):array;

    /**
     * 排课计划-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function coursePlanConf($params):array;

    /**
     * 获取设置配置
     * @param array $params
     * @return array
     */
    public function getSetConf($params):array;

    /**
     * 消息配置
     * @param $params
     * @return array
     */
    public function messageConf($params):array;


    /**
     * 节次数据获取
     * @param $params
     * @return array
     */
    public function getFestivalTime($params):array;

}