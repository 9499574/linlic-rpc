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
     * @return string 返回下载请求id request_record_id
     */
    public function handleRequest(string $userId, string $orgId, string $moduleName, string $fileName):string;

    /**
     * 生成导出文件
     * $params参数结构如下
     * [
     *      ["header" => [["表头1",""表头2"]], "data" => [["数据1","数据2"]], "options" => ['mergeCells'=>['A1:B1'],'sheetName'=>'Sheet1','NumberFormat'=>[['column'=>'B','formate'=>'yyyy-mm-dd']]]],
     *      ["header" => [["表头3",""表头4"]], "data" => [["数据3","数据4"]], "options" => ['mergeCells'=>['A1:B1'],'sheetName'=>'Sheet2','NumberFormat'=>[['column'=>'B','formate'=>'yyyy-mm-dd']]]],
     * ]
     * $param中的元素个数代表sheet个数, 当只有一个元素时，按单个sheet表格文件处理， options可为空
     * @param string $requestRecordId 下载请求id
     * @param array $params
     * @return bool 是否生成成功
     */
    public function generateFile(string $requestRecordId, array $params):bool;


}