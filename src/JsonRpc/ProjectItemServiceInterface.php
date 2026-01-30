<?php

namespace linlic\JsonRpc;

interface ProjectItemServiceInterface
{
    /**
     * 项目评审功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params): array;

    /**
     * 项目评审菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params): array;

    /**
     * 项目立项流程回调
     * @param array $params
     * @return bool
     */
    public function projectItemFlowCallback(array $params): bool;
}