<?php

namespace linlic\JsonRpc;

interface ExcelServiceInterface
{
    /**
     * 下载excel文件
     * @param array $userInfo ['uid'=>1111,'org_id'=>1111]
     * @param string $fileName aaaa.xlxs
     * @param array $header [["表头1",""表头2"]]
     * @param array $data [["数据1","数据2"]]
     * @param array $options ['mergeCells'=>['A1:B1'],'sheetName'=>'Sheet1','NumberFormat'=>[['column'=>'B','formate'=>'yyyy-mm-dd']]]
     * @return array
     */
    public function export(array $userInfo,string $fileName,array $header,array $data,array $options=[]):array;

    /**
     * 下载excel文件
     * 多sheet
     * @param array $userInfo
     * @param string $fileName
     * @param array $params [['header'=>[],'data'=>[],'options'=>[]],['header'=>[],'data'=>[],'options'=>[]]]
     * @return array
     */
    public function exportManySheet(array $userInfo,string $fileName,array $params): array;


    /**
     * 获取excel文件内容
     * @param string $fileName 文件名称
     * @param string $ossUrl oss临时文件地址
     * @param bool $deleteOssFile 是否删除oss文件，默认true
     * @param bool $isFastRead 是否快速读取，默认false
     * @return array
     */
    public function getContent(string $fileName,string $ossUrl, bool $deleteOssFile=true,bool $isFastRead=false): array;
}