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

    /**
     * 获取学习资源配置的题目
     * @param array $resourceIds
     * @param array $field
     * field 字段释义
     * question_ids 测试题目
     * question_video_details 视频题目
     * question_before_ids 考前测试题
     * question_after_ids 考后测试题
     * @return array
     */
    public function getResourceTopic(array $resourceIds,array $field = []): array;

}