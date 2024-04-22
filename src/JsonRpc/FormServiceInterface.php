<?php

namespace linlic\JsonRpc;

interface FormServiceInterface
{
    /**
     * 获取可用的填报表单
     * @return array
     */
    public function getFillingForms(array $params):array;

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
     * @param int $orgId
     * @param string $systemId
     * @param string $menuId
     * @return array
     */
    public function getPersonalDataTemplateNames(array $filling_form_template_id_arr,array $colNameArr= ['template_name'],int $orgId=-1, string $systemId = '', string $menuId = ''):array;

    /*
    * 根据个人资料表单的template_fields信息,提取出里面的字段信息
    */
    public function getPerDataFieldList(string $fieldArrJson):array;

    /**
     * 获取菜单配置查询条件
     * @param array $params ['field'=>'menu_conf','data'=>'613096948300275712'];data为field字段模块参数对应值
     * @return array|string ['menu_conf->filling_form_template_id','613096948300275712'];返回模块参数对应的查询条件
     */
    public function getMenuConfWhere(array $params):array|string;

    /**
     * 获取用户字段
     * @param array $params ['belong_to'=>1,'org_id'=>'-1'] belong_to:归属 1全局 2机构 org_id:机构id
     * @return array
     */
    public function getUserFields(array $params): array;

    /**
     * 通过用户字段获取字段字典key
     * @param array $params ['belong_to'=>1,'org_id'=>'-1'] belong_to:归属 1全局 2机构 org_id:机构id
     * @param array $userField ['standard_base_id','sd_id']
     * @return array ['standard_base_id'=>'base_options']
     */
    public function getUserFieldDictKey(array $params, array $userField):array;

    /**
     * 通过表单ID获取字段字典KEY
     * @param array $filling_form_template_ids
     * @param array $userField
     * @return array ['standard_base_id'=>'base_options']
     */
    public function formIdGetUserFieldDictKey(array $filling_form_template_ids, array $userField):array;

    /**
     * 通过类别选项值获取填报表单
     * @param string $org_id 机构id
     * @param string $option_value 类别选项值
     * @return array [['filling_form_template_id'=>'xxx','template_name'=>'xxx']]
     */
    public function getFillFormsByOptionValue(string $org_id,string $option_value):array;

    /**
     * 机构设置
     * @param array $params 参数数组
     * @return array
     */
    public function formSetConf(array $params):array;

    /**
     * 通过表单ID获取字典key
     * @param array $filling_form_template_id_arr
     * @return array ['user_status','user_sex','ask_type']
     */
    public function getFormDictKey(array $filling_form_template_id_arr):array;

    /**
     * 通过表单Id获取字段name和label
     * @param string $filling_form_template_id
     * @return array
     */
    public function getFieldsNameLabel(string $filling_form_template_id):array;

    /**
     * 通过表单Id获取字段
     * @param string $filling_form_template_id
     * @param int $orgId
     * @param string $systemId
     * @param string $menuId
     * @return array
     */
    public function getFields(string $filling_form_template_id,int $orgId, string $systemId, string $menuId):array;

    /**
     * 获取机构设置PRC接口
     * @param array $params
     * @return array
     */
    public function getOrgConf(array $params):array;
}