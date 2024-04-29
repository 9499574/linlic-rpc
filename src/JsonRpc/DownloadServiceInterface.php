<?php

namespace linlic\JsonRpc;

interface DownloadServiceInterface
{
    /**
     * 生成下载请求
     * @param string $userId 用户id
     * @param string $orgId 机构id
     * @param string $moduleName 模块名称，如 exam-center
     * @param string $fileName 需要生成的文件名称
     * @return array
     */
    public function handleRequest(string $userId, string $orgId, string $moduleName, string $fileName):array;

    /**
     * 生成导出文件
     * @param string $requestRecordId 下载请求id
     * @param array $header [["表头1",""表头2"]]
     * @param array $data [["数据1","数据2"]]
     * @param array $options ['mergeCells'=>['A1:B1'],'sheetName'=>'Sheet1','NumberFormat'=>[['column'=>'B','formate'=>'yyyy-mm-dd']]]
     * @return array
     */
    public function generateFile(string $requestRecordId, array $header, array $data, array $options=[]):array;

    /**
     * 获取文件下载地址
     * @param string $userId 用户id
     * @param string $orgId 机构id
     * @param string $moduleName 模块名称
     * @param int $type 下载文件类型，1：导出文件下载 2：资源文件下载
     * @param string $relatedId 关联文件id，type=1，给下载请求id，requestRecordId type=2, 给resourceId
     * @return array
     */
    public function getDownloadUrl(string $userId, string $orgId, string $moduleName, int $type, string $relatedId): array;

    /**
     * 根据uid获取用户下载请求记录
     * @param string $userId
     * @return array
     */
    public function getRecordsByUser(string $userId): array;

}