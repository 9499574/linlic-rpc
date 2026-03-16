<?php

namespace linlic\JsonRpc;

/**
 * 待办事宜基础接口
 */
interface TodoBaseServiceInterface
{
    /**
     * 获取todo列表
     * @param int $orgId 当前机构ID
     * @param int $uid 当前用户ID
     * @param array $menuId 菜单ID集合
     * @param int $port 1电脑端 2手机端
     * @return array [['system_id'=>'系统编号','menu_id'=>'菜单编号','todo_title'=>'数据标题','start_time'=>'开始时间','end_time'=>'结束时间','create_time'=>'创建时间','detail_url'=>'详情URL']]
     */
    public function getTodoList(int $orgId,int $uid,array $menuId,int $port):array;

    /**
     * 获取todo数量
     * @param int $orgId 当前机构ID
     * @param int $uid 当前用户ID
     * @param array $menuId 菜单ID集合
     * @param int $port 1电脑端 2手机端
     * @return int
     */
    public function getTodoNumber(int $orgId,int $uid,array $menuId,int $port): int;

    /**
     * 判断todo是否存在
     * @param int $orgId 当前机构ID
     * @param int $uid 当前用户ID
     * @param array $menuId 菜单ID集合
     * @param int $port 1电脑端 2手机端
     * @return bool
     */
    public function getTodoExist(int $orgId,int $uid,array $menuId,int $port):bool;
}