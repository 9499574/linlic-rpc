<?php

namespace linlic\JsonRpc;

interface CycleCkServiceInterface
{

    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function viewField(array $params):array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function viewConf(array $params):array;

    /**
     * 根据查询条件获取出科数据
     * @param array $params ['system_id'=>'系统ID','menu_id'=>'菜单ID','type'=>'科室类型 1-本院科室，2-标准科室','ck_type'=>'出科类型 1-当前出科，2-历史出科','search_params'=>[筛选条件]]
     * @return array
     */
    public function getCkData(array $params):array;

}