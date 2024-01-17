<?php

namespace linlic\JsonRpc;

interface OssTempFileServiceInterface
{
    /**
     * 临时文件转机构目录
     * @param int $orgId 机构编号
     * @param int $uId 用户编号
     * @param string $module 模块名称
     * @param string $fileName 原文件名称
     * @param string $ossUrl 临时文件地址
     * @return array
     */
    public function fileTransferBucket(int $orgId, int $uId, string $module,string $fileName, string $ossUrl): array;
}