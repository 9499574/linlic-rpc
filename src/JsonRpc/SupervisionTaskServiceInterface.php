<?php

namespace linlic\JsonRpc;

interface SupervisionTaskServiceInterface
{
    /**
     * 任务督导-功能字段
     * @param array $params
     * @return array
     */
    public function supervisionField(array $params):array;

    /**
     * 任务督导-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function taskConf(array $params):array;

    /**
     * 自动任务督导-功能字段
     * @param array $params
     * @return array
     */
    public function supervisionTaskAutoField(array $params):array;

    /**
     * 自动任务督导-配置字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function taskAutoConf(array $params):array;

    /**
     * 获取设置配置
     * @param array $params
     * @return array
     */
    public function getSetConf($params):array;

}