<?php

namespace linlic\JsonRpc;

interface FormServiceInterface
{
    /**
     * 获取可用的填报表单
     * @return array
     */
    public function getFillingForms():array;

    /**
     * 获取填报表单字段
     * @param array $params 参数数组
     * @return array
     */
    public function getFillingFormFields(array $params):array;
}