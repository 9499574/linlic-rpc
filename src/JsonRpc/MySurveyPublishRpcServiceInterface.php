<?php

namespace linlic\JsonRpc;

interface MySurveyPublishRpcServiceInterface
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
     * 机构设置接口
     * @param array $params
     * @return array
     */
    public function orgSet(array $params):array;

    /**
     * 问卷提交回调接口
     * @param array $params
     * @return void
     */
    public function formFillCallback(array $params):void;

    /**
     * 问卷反馈回调接口
     * @param array $params
     * @return void
     */
    public function feedbackFillCallback(array $params):void;
}