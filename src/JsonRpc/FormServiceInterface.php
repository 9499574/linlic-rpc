<?php

namespace linlic\JsonRpc;

interface FormServiceInterface
{
    /**
     * 填报表单菜单配置
     * @param array $params
     * @return array
     */
    public function getFillingForms(array $params):array;

    /**
     * 获取填报表单
     * @param array $params
     * @return array
     */
    public function fillingForms(array $params):array;

    /**
     * 获取填报表单字段
     * @param array $params 参数数组
     * @return array
     */
    public function getFillingFormFields(array $params):array;

    /**
     * 根据表单ID数组获取表单标题
     *
     * @param array $filling_form_template_id_arr
     * @param array $field
     * ```
     * example:
     * template_name // 模版名称
     * template_cate_id // 模版分类
     * full_score // 满分
     *
     * ```
     * @return array
     */
    public function getFillingFormNames(array $filling_form_template_id_arr, string $field = 'template_name'): array;

    /**
     * 根据用户资料模板ID数组获取模板字段信息
     * @param array $filling_form_template_id_arr
     * @param array $colNameArr 表示要获取到的字段值数组
     * @param int $orgId
     * @param string $systemId
     * @param string $menuId
     * @return array
     */
    public function getPersonalDataTemplateNames(array $filling_form_template_id_arr,array $colNameArr= ['template_name'],int $orgId=-1, string $systemId = '', string $menuId = '',$fields=[]):array;

    /**
     * 根据用户资料模板ID数组获取模板字段信息(选项异步)
     * @param array $filling_form_template_id_arr
     * @param array $colNameArr
     * @param int $orgId
     * @param string $systemId
     * @param string $menuId
     * @return array
     */
    public function getPersonalDataTemplateNameAsyncDict(array $filling_form_template_id_arr,array $colNameArr= ['template_name'],int $orgId=-1, string $systemId = '', string $menuId = ''):array;

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
     *
     * @param string $org_id 机构id
     * @param string $option_value 表单类别
     * @param string $menuId 菜单ID
     * @param string $templateType 表单类型 1表单 2用户 3评价 4评分
     * @return array [['filling_form_template_id'=>'xxx','template_name'=>'xxx']]
     */
    public function getFillFormsByOptionValue(string $org_id, string $option_value, $menuId = '', int $templateType = 0): array;

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

    /**
     * 获取用户表单多选字段
     * @param int $org_id
     * @return array
     */
    public function getFormMultipleField(int $org_id):array;

    /**
     * 获取用户表单日期字段
     * @param int $org_id
     * @param array $select_field
     * @return array
     */
    public function getFormDateField(int $org_id,array $select_field=[]):array;

    /**
     * 获取表单非字典字段
     * @param int $orgId
     * @param array $select_field
     * @return array
     */
    public function getFormNoDictField(int $orgId, array $select_field=[]):array;

    /**
     * 获取用户表单非字典选项
     * @param int $orgId
     * @param array $userField
     * @return array
     */
    public function getUserFieldNoDictOptions(int $orgId, array $userField):array;

    /**
     * 通过模板类别ID获取填报表单列表
     * @param string $template_cate_id
     * @param int $org_id
     * @param string $menu_id
     * @return array
     */
    public function templateCateIdGetFormList(string $template_cate_id, int $org_id,string $menu_id):array;

    /**
     * 获取表单模版类型
     * @param array $filling_form_template_id
     * @return array
     */
    public function getFormTemplateType(array $filling_form_template_id):array;

    /**
     * 获取用户字段,根据字段类型过滤
     *
     * @param array $params ['belong_to'=>1,'org_id'=>'-1'] belong_to:归属 1全局 2机构 org_id:机构id
     * @param array $filter ['filter'=>['field_type'=>['input','select']] 过滤,field_type:字段类型
     * @return array
     */
    public function getUserFieldsFilterByFieldType(array $params, array $filter): array;

    /**
     * 获取填报表单填写数据
     * @param string $filling_form_id 填报表单id
     * @return array
     */
    public function getFillData(string $filling_form_id):array;

    /**
     * 获取填报表单填写结果数据
     * @param array $filling_form_ids
     * @return array
     */
    public function getFillResultData(array $filling_form_ids):array;

    /**
     * 获取菜单对应的表单字段选项
     * @param array $menu_id_arr
     * @return array
     */
    public function getFieldsOptionsByMenuId(array $menu_id_arr):array;

    /**
     * 获取填报表单列表数据
     * @param array $params
     * @return array
     */
    public function getFormListData(array $params):array;


    /**
     * 填报表单内容临时文件迁移
     * @param array $formContent
     * @param string $orgId
     * @param string $uid
     * @param string $appName
     * @return array
     */
    public function formContentTempFileMigrate(array $formContent,string $orgId,string $uid,string $appName):array;

    /**
     * 获取表单模版
     * @param array $filling_form_template_id
     * @return array
     */
    public function getFormTemplateList(array $filling_form_template_id):array;

    /**
     * 表单填写字段处理 base64转resource_id
     * @param string $org_id 系统id
     * @param string $uid 用户id
     * @param array $filling_fields 表单填写字段
     * @param string $filling_form_template_id 表单模版id
     * @param array $filling_form_template 表单模版数据
     * @return array
     */
    public function getFillingFieldHandle(string $org_id,string $uid, array $filling_fields,string $filling_form_template_id,array $filling_form_template=[]): array;

    /**
     * 表单填写字段处理 resource_id转base64
     * @param array $filling_fields 表单填写字段
     * @param string $filling_form_template_id 表单模版id
     * @param array $filling_form_template 表单模版数据
     * @return array
     */
    public function fillingFieldResourceIdToBase64(array $filling_fields,string $filling_form_template_id,array $filling_form_template=[]):array;
}