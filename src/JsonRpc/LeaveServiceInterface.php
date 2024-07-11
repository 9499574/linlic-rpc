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

}