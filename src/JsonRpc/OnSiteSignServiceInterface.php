<?php

namespace linlic\JsonRpc;

interface OnSiteSignServiceInterface
{
    /**
     * 日常考勤列表-功能字段列表的接口
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 日常考勤列表-菜单设置的接口
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params):array;
}