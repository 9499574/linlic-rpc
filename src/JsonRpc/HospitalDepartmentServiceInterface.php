<?php

namespace linlic\JsonRpc;

interface HospitalDepartmentServiceInterface
{
    /**
     * 获取可用的配置
     * @return array
     */
    public function getConfigs():array;


    /**
     * 根据机构id，获取本院科室选项
     *
     * @param string $orgId
     * @param array $where ['option_label'=>["眼科"],'option_value'=>["622116875481731073"]]
     * @param array $select ['option_label','option_value']
     * @param int $type  1表示返回源格式数组 2表示返回树形结构(多层级选择时调用)。默认为1
     * @return array [["option_label"=>"眼科","option_value"=>"622116875481731073"]]
     * @deprecated 请使用UserDictOptionsServiceInterface::getHdOptions
     */
    public function getOptions(string $orgId,array $where=[],array $select=[],$type = 1):array;

    /**
     * 获取本院科室列表数据
     * @param string $orgId 机构id
     * @param array $select 查询字段
     * @param array $where 查询条件
     * @param array $pageParams 分页参数['page'=>1,'limit'=>15] 空数组表示不分页
     * @param array $orderBy 排序
     * @return array
     */
    public function getHospitalDepartmentList(string $orgId,array $select,array $where,array $pageParams=[],array $orderBy=[]):array;


    /**
     * 获取本院科室容量
     * @param $hdIds ["1","2"]
     * @return array ["1"=>10,"2"=>0]
     */
    public function getDepartmentCapacity($hdIds):array;

    /*
    * 获取本院科室的名称
    * @param $hdIds ["1","2"]
    * @return array [["1"=>'心血科'],["2"=>'内科']]
    */
    public function getHdName($hdIdArr):array;

    /**
     * 根据base_id获取hd_id
     * @param int $org_id
     * @param array $base_id
     * @return array
     */
    public function baseIdGetHdId(int $org_id,array $base_id):array;
}