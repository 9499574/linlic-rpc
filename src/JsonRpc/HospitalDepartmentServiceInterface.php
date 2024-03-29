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
     * @param string $orgId
     * @param array $where ['option_label'=>["眼科"],'option_value'=>["622116875481731073"]]
     * @param array $select ['option_label','option_value']
     * @return array [["option_label"=>"眼科","option_value"=>"622116875481731073"]]
     */
    public function getOptions(string $orgId,array $where=[],array $select=[]):array;

    /**
     * 获取本院科室列表数据
     * @param string $orgId 机构id
     * @param array $select 查询字段
     * @param array $where 查询条件
     * @param array $pageParams 分页参数['page'=>1,'limit'=>15] 空数组表示不分页
     * @return array
     */
    public function getHospitalDepartmentList(string $orgId,array $select,array $where,array $pageParams=[]):array;


    /**
     * 获取本院科室容量
     * @param $hdIds ["1","2"]
     * @return array ["1"=>10,"2"=>0]
     */
    public function getDepartmentCapacity($hdIds):array;

}