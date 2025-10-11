<?php

namespace linlic\JsonRpc;

interface VideoExamServiceInterface
{
    /**
     * 音视频考试功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 音视频考试菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

    /**
     * 音视频考试机构设置
     * @param array $params
     * @return array
     */
    public function SetConf(array $params):array;
}