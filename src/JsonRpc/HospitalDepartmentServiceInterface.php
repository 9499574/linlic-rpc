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

}