<?php

namespace linlic\JsonRpc;

interface AskLeaveServiceInterface
{
    /**
     * 列表-功能字段列表的接口
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 列表-菜单设置的接口
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params):array;
}