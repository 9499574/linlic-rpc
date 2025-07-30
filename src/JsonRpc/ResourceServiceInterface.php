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
     * @param string $videoId 媒体文件ID，处理音视频文件时必传
     * @return array
     */
    public function tempFileTransferBucket(
        string $orgId,
        string $uId,
        string $module,
        string $fileName,
        string $ossUrl,
        string $videoId = ''
    ): array;


    /**
     * 获取文件信息
     * @param array $resource_id
     * @return array
     */
    public function getFileInfo(array $resource_id): array;


    /**
     * 设置云盘大小
     * @param string $org_id 机构编号
     * @param int $size 大小（T）
     * @return bool
     */
    public function setSpaceSize(string $org_id,int $size):bool;


    /**
     * 已使用云盘空间大小
     * @param string $org_id 机构编号
     * @return array
     */
    public function getSpaceUseSize(string $org_id):array;

    /**
     * 处理富文本内图片地址
     * @param string $orgId 机构编号
     * @param string $uId 用户编号
     * @param string $module 模块名称
     * @param string $content 原始富文本内容字符串
     * @return array ['code' => 0, 'message' => '', 'content' => '转换后富文本内容']
     */
    public function handleRichText(string $orgId, string $uId, string $module, string $content): array;

    /**
     * base64上传
     * @param string $orgId 机构id
     * @param string $uId 用户id
     * @param string $module 模块
     * @param string $fileName 文件名
     * @param string $base64Data base64 图片数据（格式：data:image/png;base64,xxxx）
     * @param array $callback 回调 func 回调方法 params 回调参数
     * @return array
     */
    public function base64Upload(string $orgId, string $uId, string $module, string $fileName,string $base64Data,array $callback=[]):array;
}