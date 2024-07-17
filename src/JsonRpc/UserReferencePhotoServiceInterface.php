<?php

namespace linlic\JsonRpc;

interface UserReferencePhotoServiceInterface
{
    /**
     * 用户管理，用户列表-功能字段列表的接口
     * @param array $params
     * @return array
     */
    public function getFields(array $params): array;
}