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

    /**
     * 根据表单ID数组获取表单标题
     * @param array $filling_form_template_id_arr
     * @return array
     */
    public function getFillingFormNames(array $filling_form_template_id_arr):array;

    /**
     * 根据用户资料模板ID数组获取模板标题
     * @param array $personal_data_template_id_arr
     * @return array
     */
    public function getPersonalDataTemplateNames(array $personal_data_template_id_arr):array;


}