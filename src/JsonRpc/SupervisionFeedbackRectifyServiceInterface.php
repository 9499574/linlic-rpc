<?php

namespace linlic\JsonRpc;

interface SupervisionFeedbackRectifyServiceInterface
{
    /**
     * 功能字段
     * @param $params
     * @return array
     */
    public function getFields($params):array;

    /**
     * 功能配置
     * @param $params
     * @return array
     */
    public function getConfigs($params):array;

    /**
     * 流程参数
     * @param array $params
     * @return array
     */
    public function flowParams(array $params): array;

    /**
     * 流程回调
     * @param array $params
     * @return bool
     */
    public function flowCallBack(array $params): bool;

}