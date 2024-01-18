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
     * 设置填报表单配置
     * @param string $org_id 机构id
     * @param string $uid 登录用户uid
     * @param string $system_id 系统id
     * @param string $menu_id 菜单id
     * @param string $filling_form_template_id 填报表单id
     * @return void
     */
    public function setFillingFormConfig(
        string $org_id,
        string $uid,
        string $system_id,
        string $menu_id,
        string $filling_form_template_id
    ):void;

    /**
     * 获取填报表单字段
     * @return array
     */
    public function getFillingFormFields():array;

    /**
     * 获取可用的个人资料模板
     * @return array
     */
    public function getPersonalDataTemplates():array;
}