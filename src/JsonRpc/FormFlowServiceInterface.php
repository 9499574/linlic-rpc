<?php

namespace linlic\JsonRpc;

interface FormFlowServiceInterface
{
    /**
     * 表单字段
     * @param array $params
     * @return array
     */
    public function params(array $params):array;

    /**
     * 流程回调
     * @param array $params
     * @return bool
     */
    public function callBack(array $params):bool;

    /**
     * 自定义用户类型
     * @param array $params
     * @return array
     */
    public function customUserType(array $params):array;
}