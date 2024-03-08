<?php

namespace linlic\JsonRpc;

interface StandardDepartmentServiceInterface
{

    /**
     * 根据机构id，获取标准科室字段
     * @param string $orgId
     * @return array
     */
    public function getStandardDepartmentFields(string $orgId):array;

    /**
     * 根据机构id，获取标准科室选项
     * @param string $orgId
     * @param array $select ['option_label','option_value']
     * @param array $where ['option_label'=>["眼科"],'option_value'=>["622116875481731073"]]
     * @return array [["option_label"=>"眼科","option_value"=>"622116875481731073"]]
     */
    public function getStandardDepartmentOptions(string $orgId,array $select=[],array $where=[]):array;

}