<?php

namespace linlic\JsonRpc;

interface ExamServiceInterface
{

    /**
     * 获取考试发布表单字段
     * @param array $params 参数数组
     * @return array
     */
    public function getExamFormFields(array $params = []):array;

    /**
     * 根据机构id，获取考试选项
     * @param string $orgId
     * @param array $select ['option_label','option_value']
     * @param array $where ['option_label'=>["眼科"],'option_value'=>["622116875481731073"]]
     * @return array [["option_label"=>"眼科","option_value"=>"622116875481731073"]]
     */
    public function getExamOptions(string $orgId,array $select=[],array $where=[]):array;

}