<?php

namespace linlic\JsonRpc;

/**
 * 填报表单批量服务接口
 */
interface FillingFormBatchServiceInterface
{

    /**
     * 批量插入数据
     * @param string $orgId
     * @param string $uid
     * @param array $data
     * @return bool
     */
    public function batchInsert(string $orgId,string $uid,array $data):bool;

    /**
     * 批量删除并插入数据
     * @param string $orgId
     * @param string $uid
     * @param array $data
     * @param array $deleteWhere
     * @return bool
     */
    public function batchDeleteAndInsert(string $orgId,string $uid,array $data,array $deleteWhere):bool;

    /**
     * 批量插入数据(通过redis传输数据)
     * @param string $orgId
     * @param string $uid
     * @param string $redisKey
     * @return bool
     */
    public function redisBatchInsert(string $orgId,string $uid,string $redisKey):bool;

    /**
     * 批量删除并插入数据(通过redis传输数据)
     * @param string $orgId
     * @param string $uid
     * @param string $redisKey
     * @return bool
     */
    public function redisBatchDeleteAndInsert(string $orgId,string $uid,string $redisKey):bool;

    /**
     * 新增模板表单
     * @param $params
     * @return void
     */
    public function addFormTemplate($params): void;
    /**
     * 指定的表单内容修改
     * @param $params
     * @return void
     */
    public function formTemplateDesign($params): void;

}