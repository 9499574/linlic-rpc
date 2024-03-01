<?php

namespace linlic\JsonRpc;

interface BaseServiceInterface
{

    /**
     * 根据机构id，获取基地字段
     * @param string $orgId
     * @return array
     */
    public function getBaseFields(string $orgId):array;

    /**
     * 根据机构id，获取基地选项
     * @param string $orgId
     * @param array $where ['option_label'=>["眼科"],'option_value'=>["622116875481731073"]]
     * @param array $select ['option_label','option_value']
     * @return array [["option_label"=>"眼科","option_value"=>"622116875481731073"]]
     */
    public function getBaseOptions(string $orgId,array $where=[],array $select=[]):array;

}