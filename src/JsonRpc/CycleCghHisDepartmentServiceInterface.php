<?php


namespace linlic\JsonRpc;

/**
 * HIS科室数据（cycle_cgh_his_department）RPC 服务接口
 */
interface CycleCghHisDepartmentServiceInterface
{
    /**
     * 功能字段
     * @param array $params ['org_id'=>'','system_id'=>'','menu_id'=>'']
     * @return array
     */
    public function cycleCghHisDepartmentField(array $params): array;

    /**
     * 菜单配置
     * @param array $params ['org_id'=>'','system_id'=>'','menu_id'=>'']
     * @return array
     */
    public function cycleCghHisDepartmentConf(array $params): array;
}
