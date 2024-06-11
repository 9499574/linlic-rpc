<?php

namespace linlic\JsonRpc;

interface NoticeServiceInterface
{
    /**
     * 获取消息推送管理列表字段数据
     * @param $params
     * @return array
     */
    public function getFields(array $params): array;
}