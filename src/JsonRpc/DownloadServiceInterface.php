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


    /**
     * 生成导出文件 generateFile 参数 储存在redis内
     * @param string $requestRecordId
     * @param string $redisKey
     * @return bool
     */
    public function generateFileRedisKey(string $requestRecordId, string $redisKey):bool;


    /**
     * 生成PDF、Word文件
     * $businessParams参数结构如下：business_id模块某业务编号 file_name导出文件名（不要加具体后缀）
     * [
     *      ["business_id" => "692476229400604673", "file_name" => "张三作答成绩"], //可继续增加业务模块参数
     *      ["business_id" => "692476229400604674", "file_name" => "李四作答成绩"],
     * ]
     * @param array $businessParams
     * @param string $businessRpc 获取业务模块数据体的rpc接口
     * @param string $moduleName  模块名称一般为APP_NAME
     * @param string $moduleKey  使用的静态资源key标识 不可重复 (在资源中心DownloadServiceImpl->getModuleHtml()方法中创建自己模块的静态资源模板)
     * @param string $fileType  导出资源类型 word|pdf  小写
     * @param string $compressName 多业务资源时压缩文件的名称（可以不传，为空时默认使用第一个业务的文件名称）
     * @return bool 是否生成成功
     */
    public function generatePdfWordFileRequest(array $businessParams, string $businessRpc, string $moduleName,string $moduleKey, string $fileType, string $compressName=''):bool;

    /**
     * 生成ZIP文件
     * [
     *      "org_id"=>"100000",
     *      "uid"=>"1000",
     *      "module_name"=>"exam_plan",
     *      "file_name"=>"xxx.zip",
     *      "rpc_url"=>"linlic\JsonRpc\xxxServiceInterface\getData",
     *      "rpc_params"=>[
     *          "这里是请求rpc url的参数，根据模块所需编写"
     *      ]
     * ]
     * @param array $params
     * @return bool true 弹出下载中心
     */
    public function generateZipFileRequest(array $params):bool;


    /**
     * 更新下载请求
     * @param int $request_record_id download_request_records表业务ID
     * @param array $data generated_file_endpoint generated_file_url  generated_file_size
     * @return bool
     */
    public function updateDownloadRequest(int $request_record_id,array $data):bool;


    /**
     * 生成压缩文件 根据URL列表
     * @param int $request_record_id
     * @param array $data [{name:'1.pdf',url:'',resource_id:''}]
     * @return bool
     */
    public function generateFileUrlZip(int $request_record_id,array $data):bool;
}