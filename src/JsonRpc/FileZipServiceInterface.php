<?php

namespace linlic\JsonRpc;

/**
 * 文件压缩服务接口
 */
interface FileZipServiceInterface
{
    /**
     * 通过资源ID压缩文件
     * @param String $fileName 文件名（无需后缀）
     * @param String $redisKey resourceIdFileZip.xxxx 对应数据格式为 [{resource_id:xxx, file_name:xxx.jpg}]
     * @return bool
     */
    function resourceIdFileZip(String $fileName, String $redisKey):bool;
}