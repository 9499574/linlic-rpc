<?php

namespace linlic\JsonRpc;

interface ResourceServiceInterface
{
    /**
     * 前端文件转机构目录
     * @param string $orgId 机构编号
     * @param string $uId 用户编号
     * @param string $module 模块名称
     * @param string $fileName 原文件名称
     * @param string $ossUrl 临时文件地址
     * @return array
     */
    public function tempFileTransferBucket(
        string $orgId,
        string $uId,
        string $module,
        string $fileName,
        string $ossUrl
    ): array;


    /**
     * 获取文件信息
     * @param array $resource_id
     * @return array
     */
    public function getFileInfo(array $resource_id): array;
}