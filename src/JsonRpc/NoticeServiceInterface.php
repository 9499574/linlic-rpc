<?php

namespace linlic\JsonRpc;

interface NoticeServiceInterface
{
    /**
     * 获取消息推送管理列表字段数据
     * @param int $orgId  机构编号
     * @return array
     */
    public function getFields(int $orgId): array;
}