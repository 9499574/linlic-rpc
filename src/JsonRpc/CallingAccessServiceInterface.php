<?php

namespace linlic\JsonRpc;

interface CallingAccessServiceInterface
{
    /**
     * 叫号排考功能字段
     * @param array $params
     * @return array
     */
    public function moduleField(array $params): array;

    /**
     * 叫号排考菜单配置
     * @param array $params
     * @return array
     */
    public function menuConfig(array $params): array;

    /**
     * 叫号排考字典
     * @param array $params
     * @return array
     */
    public function orgSet(array $params): array;
}