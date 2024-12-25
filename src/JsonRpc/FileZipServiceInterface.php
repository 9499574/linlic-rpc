<?php

namespace linlic\JsonRpc;

/**
 * 文件压缩服务接口
 */
interface FileZipServiceInterface
{
    /**
     * 通过资源ID压缩文件
     * @param String $requestRecordId 生成的下载请求id
     * @param String $redisKey resourceIdFileZip.xxxx 对应数据格式为 [{resource_id:xxx, file_name:xxx.jpg}]
     * @return bool
     */
    function resourceIdFileZip(string $requestRecordId, String $redisKey):bool;
}