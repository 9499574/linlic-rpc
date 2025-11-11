<?php

namespace linlic\JsonRpc;

interface SupervisionKsServiceInterface
{
    /**
     * 科室督导-功能字段
     * @param array $params
     * @return array
     */
    public function supervisionKsFields(array $params):array;
    //菜单设置
    public function menuConf(array $params): array;
    /**
     * 获取设置配置
     * @param array $params
     * @return array
     */
    public function getSetConf(array $params):array;

    /**
     * 打分回调
     * @param array $params
     * @return array
     */
    public function formScoreCallback(array $params):array;

    /**
     * 督导组功能字段
     * @param array $params
     * @return array
     */
    public function supervisionTeamFields(array $params):array;

    /**
     * 督导组菜单设置
     * @param array $params
     * @return array
     */
    public function supervisionTeamConf(array $params):array;

    /**
     * 督导流-自定义用户类型
     * @param array $params
     * @return array
     */
    public function supervisionFlowCustomUserType(array $params): array;
}