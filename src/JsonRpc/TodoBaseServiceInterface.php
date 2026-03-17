<?php

namespace linlic\JsonRpc;

/**
 * 待办事宜基础接口
 */
interface TodoBaseServiceInterface
{
    /**
     * 获取todo列表
     * @param array $params int $orgId 当前机构ID int $uid 当前用户ID array $menuId 菜单ID集合 int $port 1电脑端 2手机端 int $page int $limit string $keyword 搜索关键字
     * @return array [['todo_id'=>'业务ID','system_id'=>'系统编号','menu_id'=>'菜单编号','todo_title'=>'数据标题','start_time'=>'开始时间','end_time'=>'结束时间','sort_time'=>'排序时间','detail_url'=>'详情URL']]
     */
    public function getTodoList(array $params):array;

    /**
     * 获取todo数量
     * @param array $params int $orgId 当前机构ID int $uid 当前用户ID array $menuId 菜单ID集合 int $port 1电脑端 2手机端
     * @return int
     */
    public function getTodoNumber(array $params): int;

    /**
     * 判断todo是否存在
     * @param array $params int $orgId 当前机构ID int $uid 当前用户ID array $menuId 菜单ID集合 int $port 1电脑端 2手机端
     * @return bool
     */
    public function getTodoExist(array $params):bool;
}