<?php

namespace linlic\JsonRpc;

interface CertificateTemplateServiceInterface
{
    /**
     * 模块字段
     * @param array $params
     * @return array
     */
    public function fields(array $params):array;


    /**
     * 机构设置
     * @param array $params
     * @return array
     */
    public function orgSet(array $params):array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function menuConf(array $params):array;

    /**
     * 获取模板列表
     * @param array $params
     * @return array
     */
    public function getTemplateList(array $params):array;

    /**
     * 获取模板预览图片
     * @param int $templateId
     * @return string
     */
    public function getTemplatePreviewImage(int $templateId):string;
}