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
     * @param string $filling_form_template_id 填报表单ID
     * @return array
     */
    public function getFillingFormFields(string $filling_form_template_id):array;

    /**
     * 获取可用的个人资料模板
     * @return array
     */
    public function getPersonalDataTemplates():array;
}