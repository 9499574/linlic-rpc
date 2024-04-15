<?php

namespace linlic\JsonRpc;

interface FieldConfServiceInterface
{
    /**
     * 机构中心同步菜单配置参数
     * @param array $params
     * @return bool
     */
    public function ConfigInit(array $params):bool;

    /**
     * 获取菜单配置参数
     * @param string $menu_id
     * @return array
     */
    public function getMenuIdConf(string $menu_id):array;

    /**
     * 获取跳转按钮ID的父级菜单id
     * @param string $menu_id
     * @return string
     */
    public function getJumpBtnIdParentMenuId(string $menu_id):string;

    /**
     * 读取页面配置参数
     * @param string $serviceName App\Service\Implement\MoudleConfServiceImpl\getPageConf
     * @param array $params ['system_id'=>'','menu_id'=>'']
     * @return array
     */
    public function getPageConf(string $serviceName,array $params):array;

    /**
     * 依赖菜单ID获取相同关联菜单ID
     * @param string $system_id
     * @param string $menu_id
     * @return array
     */
    public function relianceMenuIdGetMenuId(string $system_id,string $menu_id):array;
}