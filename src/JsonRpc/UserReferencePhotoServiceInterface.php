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

    /**
     * 用户基准照片上传接口
     * @param array $params
     * @return int 0-成功，1-失败
     */
    public function addReferencePhoto(array $params): int;
}