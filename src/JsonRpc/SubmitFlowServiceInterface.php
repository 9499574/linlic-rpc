<?php

namespace linlic\JsonRpc;

/**
 * 提交流程服务
 */
interface SubmitFlowServiceInterface
{
    /**
     * 新流程提交
     * @param int $org_id 机构编号
     * @param string $system_id 系统编号
     * @param string $menu_id 菜单编号
     * @param string $business_id 业务ID
     * @param string $uid 提交人编号
     * @param array $hd_id 提交人科室 ["1","2"]
     * @param array $business_params 业务参数 ['ask_type'=>1,'ask_number'=>3]
     * @return array
     */
    public function newSubmit(
        int $org_id,
        string $system_id,
        string $menu_id,
        string $business_id,
        string $uid,
        array $hd_id,
        array $business_params = []
    ): array;

    /**
     * 重新提交流程
     * @param int $org_id 机构编号
     * @param string $system_id 系统编号
     * @param string $menu_id 菜单编号
     * @param string $flow_id 流程编号
     * @param string $business_id 业务ID
     * @param string $uid 提交人编号
     * @param array $hd_id 提交人科室 ["1","2"]
     * @param array $business_params 业务参数 ['ask_type'=>1,'ask_number'=>3]
     * @return array
     */
    public function reSubmit(
        int $org_id,
        string $system_id,
        string $menu_id,
        string $flow_id,
        string $business_id,
        string $uid,
        array $hd_id,
        array $business_params = []
    ):array;

    /**
     * 销毁提交的流程
     * @param int $org_id
     * @param string $system_id
     * @param string $menu_id
     * @param string $flow_id
     * @param string $uid
     * @return array
     */
    public function destroySubmit(
        int $org_id,
        string $system_id,
        string $menu_id,
        string $flow_id,
        string $uid
    ):array;

    /**
     * 获取审核表单
     * @param string $flow_id
     * @return array
     */
    public function getAuditingForms(string $flow_id): array;
}