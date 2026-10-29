<?php

namespace linlic\JsonRpc;

interface FormScoreServiceInterface
{
    /**
     * 计算表单分数
     * @param array $templateContent
     * @param array $fillingContent
     * @return float|int
     */
    public function computeTotalScore(array $templateContent, array $fillingContent):float|int;


    /**
     * 批量计算表单组件分值（非总分）
     * @param array $data ['业务id1'=>['widgetList'=>[单个表单模板组件数据],'fillingContent'=>["表单模板里面组件id":["xxx":"1"]]],'业务id2'=>['widgetList'=>[单个表单模板组件数据],'fillingContent'=>["表单模板里面组件id":["xxx":"1"]]]]
     * @return array ['业务id'=>100,'业务id2'=>90]
     */
    public function batchComputeFormFieldScore(array $data):array;
}