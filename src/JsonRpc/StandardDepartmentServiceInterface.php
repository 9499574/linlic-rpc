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
     *
     * @param string $orgId
     * @param array $select ['option_label','option_value']
     * @param array $where ['option_label'=>["眼科"],'option_value'=>["622116875481731073"]]
     * @return array [["option_label"=>"眼科","option_value"=>"622116875481731073"]]
     * @deprecated 请使用UserDictOptionsServiceInterface::getSdOptions
     */
    public function getStandardDepartmentOptions(string $orgId,array $select=[],array $where=[]):array;

    /**
     * 获取标准科室列表数据
     * @param string $orgId 机构id
     * @param array $select 查询字段
     * @param array $where 查询条件
     * @param array $pageParams 分页参数['page'=>1,'limit'=>15] 空数组表示不分页
     * @param bool $sdHdRel 关联关系限制
     * @param array $orderBy 排序
     * @return array
     */
    public function getStandardDepartmentList(string $orgId,array $select,array $where,array $pageParams=[],bool $sdHdRel=false,array $orderBy=[]):array;
}