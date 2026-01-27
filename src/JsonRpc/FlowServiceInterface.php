<?php

namespace linlic\JsonRpc;

interface FlowServiceInterface extends BaseModuleServiceInterface
{
    /**
     * 获取流程节点人员列表
     * @param array $flowIds
     * @return array
     */
    public function getFlowNodeUserList(array $flowIds):array;
}