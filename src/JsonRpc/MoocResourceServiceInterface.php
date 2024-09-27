<?php

namespace linlic\JsonRpc;

interface MoocResourceServiceInterface
{
    /**
     * @param string $funcName
     * @param array $params
     * @return array
     */
    public function getFuncName(string $funcName,array $params):array;

    /**
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params):array;

    /**
     * 获取学习资源详情
     * @param array $resourceIds
     * @return array
     */
    public function getResourceInfo(array $resourceIds): array;

}