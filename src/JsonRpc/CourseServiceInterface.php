<?php

namespace linlic\JsonRpc;

interface CourseServiceInterface
{
    /**
     * 功能字段
     * @param $params
     * @return array
     */
    public function getFields($params):array;

    /**
     * 功能配置
     * @param $params
     * @return array
     */
    public function getConfigs($params):array;

    /**
     * app功能字段
     * @param $params
     * @return array
     */
    public function getAppFields($params):array;

    /**
     * app功能配置
     * @param $params
     * @return array
     */
    public function getAppConfigs($params):array;

    /**
     * 机构端设置
     * @param $params
     * @return array
     */
    public function getSetConf($params):array;

    /**
     * 考试回调
     * @param $params
     * @return array
     */
    public function examCallback($params):array;

    /**
     * 获取课程章节数据-用于课程详情筛选数据
     * @param $params
     * @return array
     */
    public function getCourseChapterData($params):array;

    /**
     * 获取证书参数
     * @param $params
     * @return array
     */
    public function getCertificateParams($params):array;

    /**
     * 获取证书详情参数
     * @param $params
     * @return array
     */
    public function getCertificateDetail($params):array;
}