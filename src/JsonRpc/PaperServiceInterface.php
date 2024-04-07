<?php

namespace linlic\JsonRpc;

interface PaperServiceInterface
{
    /**
     * 考试管理-试卷列表-功能字段列表的接口
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 考试管理-试卷列表-菜单设置的接口
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params):array;

    /**
     * 考试管理-试卷列表-数据共享信息的接口
     * @param array $params
     * @return array
     */
    public function getShareFields(array $params):array;
}