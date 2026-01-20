<?php

namespace linlic\JsonRpc;

interface CycleBookServiceInterface
{
    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /**
     * 功能配置
     * @return array
     */
    public function getConfigs():array;

    /**
     * 数据共享
     * @return array
     */
    public function getMenuConfWhere():array;

    /**
     * 获取设置配置
     *
     * @param array $params
     * @return array
     * @user zhaodongsheng
     * @time 2024/3/29 13:32
     */
    public function getSettingConf(array $params): array;

    /**
     * 流程参数
     *
     * @param array $params
     * @return array
     * @user zhaodongsheng
     * @time 2024/7/12 下午5:48
     */
    public function flowParams(array $params): array;

    /**
     * 流程回调
     *
     * @param array $params
     * @return bool
     * @user zhaodongsheng
     * @time 2024/7/12 下午5:49
     */
    public function flowCallBack(array $params): bool;

    /**
     * 流程人员类型
     *
     * @param array $params
     * @return array
     * @user zhaodongsheng
     * @time 2024/7/12 下午5:49
     */
    public function flowCustomUserType(array $params): array;

    /**
     * 我的轮转手册菜单字段设置
     */
    public function myBookFields(): array;

    /**
     * 我的轮转手册菜单设置
     */
    public function myBookConfigs(): array;

    /**
     * 轮转手册导入模版下载
     */
    public function downloadSubTpl(array $params): array;
    /**
     * 轮转手册绩效规则配置
     */
    public function getCycleBookRuleConf(string $orgId, array $menuIds): array;

    /**
     * 轮转手册完成情况
     * @param array $params {"org_id":"692476229400604673","menu_id":"menu-715928095764918273-692770740211326976","user_gen_id":"760504013518630912","status":["submit","review"],"rate":true}
     * @return array {"status":{"submit":true,"review":true},"rate":'50%'}
     */
    public function bookFinishCase(array $params):array;

}