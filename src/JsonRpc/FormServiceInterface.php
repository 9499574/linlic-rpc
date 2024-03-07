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
     * 根据用户资料模板ID数组获取模板字段信息
     * @param array $filling_form_template_id_arr
     * @param array $colNameArr 表示要获取到的字段值数组
     * @return array
     */
    public function getPersonalDataTemplateNames(array $filling_form_template_id_arr,array $colNameArr= ['template_name']):array;

    /*
    * 根据个人资料表单的template_fields信息,提取出里面的字段信息
    */
    public function getPerDataFieldList(string $fieldArrJson):array;

    /**
     * 获取菜单配置查询条件
     * @param array $params  ['field'=>'menu_conf','data'=>'613096948300275712'];data为field字段模块参数对应值
     * @return array  ['menu_conf->filling_form_template_id','613096948300275712'];返回模块参数对应的查询条件
     */
    public function getMenuConfWhere(array $params):array;
}