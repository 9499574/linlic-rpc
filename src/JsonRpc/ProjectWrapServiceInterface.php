<?php

namespace linlic\JsonRpc;

interface ProjectWrapServiceInterface
{
    /**
     * 功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

    /**
     * 机构设置配置
     * @param array $params
     * @return mixed
     */
    public function orgSetConf(array $params):array;

}