<?php

namespace linlic\JsonRpc;

interface ProjectFinishServiceInterface
{
    /**
     * 项目结项功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params): array;

    /**
     * 项目结项菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params): array;

    /**
     * 项目结项流程回调
     * @param array $params
     * @return bool
     */
    public function projectFinishFlowCallback(array $params): bool;
}