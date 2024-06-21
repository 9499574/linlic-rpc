<?php

namespace linlic\JsonRpc;
/**
 * 获取用户科室编号
 */
interface UserHdIdsServiceInterface
{
    /**
     * 查询用户绑定的科室或者轮转的科室编号
     * 优先查询用户的科室 当没有查询到时候则查询轮转科室
     * @param array $uid
     * @param string $menu_id 如果有菜单id，则查询依赖菜单的轮转计划科室编号
     * @param string $start_date 2024-06-20
     * @param string $end_date 2024-06-20
     * @return array [123=>[],456=>[111222,33333]]
     */
    public function getUserBindCyclePlanHdIds(array $uid,string $menu_id ,string $start_date,string $end_date): array;
}