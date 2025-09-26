<?php

namespace linlic\JsonRpc;

interface VideoExamTopicServiceInterface
{
    /**
     * 音视频题目功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 音视频题目菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

    /**
     * 音视频题目机构设置
     * @param array $params
     * @return array
     */
    public function SetConf(array $params):array;
}