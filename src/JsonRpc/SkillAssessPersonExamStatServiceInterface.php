<?php

namespace linlic\JsonRpc;

interface SkillAssessPersonExamStatServiceInterface
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
     * 考核类型权重得分选项
     * @param $params
     * @return array
     */
    public function assessTypeWeightScoreOptions($params):array;

    /**
     * 考生完成度
     * @param $params $params = ['reliance_menu_id'=>[],'uid'=>[]]
     * @return array
     */
    public function userFinishDegree($params):array;

}