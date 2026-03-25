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

    /**
     * 获取流程日志列表
     * @param array $flowIds
     * @return array
     */
    public function getFlowLogList(array $flowIds):array;


    /**
     * 获取业务表单评分
     * @param array $flowIds
     * @return array key flowId total累加总分 node_avg节点平均分 avg_total节点平均分 avg_total_avg节点平均平均分 person_avg 个人平均分
     */
    public function getBusinessFormScore(array $flowIds):array;


    /**
     * 获取流程表单内容(包含业务表单和流程表单)
     * @param array $flowIds
     * @return array
     */
    public function getFlowFormContent(array $flowIds):array;
}