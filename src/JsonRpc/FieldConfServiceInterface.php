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

    /*
    * 根据父级菜单，找到下面所有的跳转按钮的信息
    * $menu_id：单个菜单id 或者菜单id的数组 均可以
    */
    public function getParentMenuIdJumpBtnIds($menu_id):array;

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
     * @param string $reliance_menu_id
     * @return array
     */
    public function relianceMenuIdGetMenuId(string $system_id,string $reliance_menu_id):array;


    /**
     * 通过依赖菜单编号和基础菜单编号获取菜单编号
     * @param int $org_id
     * @param array $reliance_menu_id
     * @param string $base_menu_id
     * @param string $system_id
     * @return array
     */
    public function relianceMenuIdBaseMenuIdGetMenuId(int $org_id, array $reliance_menu_id, string $base_menu_id,string $system_id=''):array;
}