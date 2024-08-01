<?php

namespace linlic\JsonRpc;

/**
 * 流程设置 PRC接口
 */
interface FlowConfServiceInterface
{
    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function fields(array $params):array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function config(array $params):array;

    /**
     * 消息配置
     * @param array $params
     * @return array
     */
    public function message(array $params):array;
}