<?php

namespace linlic\JsonRpc;

/**
 * 填报表单批量服务接口
 */
interface FillingFormBatchServiceInterface
{

    /**
     * 批量插入数据
     * @param array $data
     * @return bool
     */
    public function batchInsert(array $data):bool;

    /**
     * 批量删除并插入数据
     * @param array $data
     * @param array $deleteWhere
     * @return bool
     */
    public function batchDeleteAndInsert(array $data,array $deleteWhere):bool;

    /**
     * 批量插入数据(通过redis传输数据)
     * @param string $redisKey
     * @return bool
     */
    public function redisBatchInsert(string $redisKey):bool;

    /**
     * 批量删除并插入数据(通过redis传输数据)
     * @param string $redisKey
     * @return bool
     */
    public function redisBatchDeleteAndInsert(string $redisKey):bool;



}