<?php

namespace linlic\JsonRpc;

interface NoticeServiceInterface
{
    /**
     * 获取公告管理列表字段数据
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getFields(array $params): array;
    /**
     * 公告管理-功能配置
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function noticeConf($params):array;

    /**
     * 公告管理-数量详情列表
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getNumberInfoFields($params):array;
}