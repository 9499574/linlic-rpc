<?php

namespace linlic\JsonRpc;

interface ProjectEditServiceInterface
{
    /**
     * 项目变更功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params): array;

    /**
     * 项目变更菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params): array;

    /**
     * 项目变更流程回调
     * @param array $params
     * @return bool
     */
    public function projectEditFlowCallback(array $params): bool;
}