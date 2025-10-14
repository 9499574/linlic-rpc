<?php

namespace linlic\JsonRpc;

interface VideoExamMarkingServiceInterface
{
    /**
     * 视频考试阅卷功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 视频考试阅卷菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

    /**
     * 视频考试阅卷机构设置
     * @param array $params
     * @return array
     */
    public function SetConf(array $params):array;
}