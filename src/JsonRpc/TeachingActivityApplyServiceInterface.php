<?php

namespace linlic\JsonRpc;

interface TeachingActivityApplyServiceInterface
{
    /**
     * 课程申请审核回调
     * @param $params
     * @return bool
     */
    public function reviewCallBack($params): bool;

    /**
     * 获取用户类型
     * @param $params
     * @return array
     */
    public function reviewUserType($params): array;
}