<?php

namespace linlic\JsonRpc;

interface VotePublishUserRpcServiceInterface
{
    /**
     * 功能字段接口
     * @param array $params
     * @return array
     */
    public function moduleFields(array $params):array;


    /**
     * 功能配置接口
     * @param array $params
     * @return array
     */
    public function moduleConfig(array $params):array;


    /**
     * 评语表单提交回调接口
     * @param array $params
     * @return void
     */
    public function formFillCallback(array $params):void;
}