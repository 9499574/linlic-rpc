<?php

namespace linlic\JsonRpc;

interface LeaveServiceInterface
{
    /**
     * 获取机构的请假类型下拉选项
     * @param int $orgId
     * @param int $systemId
     * @param string $menuId
     * @param array $select
     * @param array $where
     * @return array
     */
    public function getLeaveTypeOptions(int $orgId, int $systemId, string $menuId, array $select = [], array $where = []): array;

    /*
    * 请假管理-根据方法名和参数，调用rpc接口
    * @param string $funcName
    * @param array $params
    * @return array
    */
    public function getFuncName(string $funcName,array $params):array;

    /*
     * 请假管理-请假列表-功能字段列表的接口
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /*
     * 请假管理-请假列表-菜单设置的接口
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params):array;

    /**
     * 请假流程审核回调
     * @param array $params
     * @return bool
     */
    public function leaveAuditCallback(array $params): bool;

    /**
     * 销假流程审核回调
     * @param array $params
     * @return bool
     */
    public function RevokeAuditCallback(array $params): bool;

    /**
     * 请假流程参数
     * @param array $params
     * @return array
     */
    public function leaveFlowParams(array $params): array;

    /**
     * 销假流程参数
     * @param array $params
     * @return array
     */
    public function revokeFlowParams(array $params): array;

    /**
     * 请假流程自定义用户类型
     * @param array $params
     * @return array
     */
    public function LeaveFlowCustomUserType(array $params): array;

    /**
     * 销假流程自定义用户类型
     * @param array $params
     * @return array
     */
    public function RevokeFlowCustomUserType(array $params): array;

    /**
     * 获取请假统计数据
     * leave_type_ids,org_id,system_id,menu_id 非必填
     * @param array $params 'start_at' => '2024-07-10 00:00:00', 'end_at' => '2024-07-12 00:00:00', 'uids' => [], 'leave_type_ids' => [], 'org_id' => '', 'system_id' => '', 'menu_id' => '',
     * @return array
     */
    public function getLeaveStatisticData(array $params): array;
    /**
     * 获取每日请假类型记录
     * menu_ids 必填,conditions 必填 month=>uids,月份key=>uids value用户ids数组 ;
     * @param array $params  'menu_ids' => [],'conditions'=>['2026-01' => ['1','2'], '2026-02' => ['1','2']]
     * @return array [['uid1'=>[‘2026-01-01’=>'事假',‘2026-01-02’=>'年假'],'uid2'=>[‘2026-01-01’=>'病假',‘2026-01-02’=>'年假']]]
     */
    public function getLeaveRecordData(array $params): array;
}