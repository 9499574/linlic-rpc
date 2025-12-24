<?php

namespace linlic\JsonRpc;

/**
 * 表单当字典服务
 */
interface FormDictionaryServiceInterface
{
    /**
     * 获取表单选项
     * 需要nacos里面配置，指定表单的id和key、value的key
     * @param string $orgId
     * @param int $systemId
     * @param string $menuId
     * @param array $select
     * @param array $where
     * @param int $limit
     * @param int $page
     * @param string $keyword
     * @param string $dict_key
     * @return array
     */
    public function getOptions(string $orgId, int $systemId, string $menuId, array $select = [], array $where = [], int $limit=0, int $page=0, string $keyword='', string $dict_key=''):array;

    /**
     * 获取宁夏培训-专业基地values
     * @param array $params string org_id string menu_id
     * @return array
     */
    public function getNingXiaTrainMajorBaseValues(array $params):array;

    /**
     * 获取宁夏培训-专业基地labels
     * @param array $params array training_base array standard_base_id int org_id
     * @return array
     */
    public function getNingXiaTrainBaseLabels(array $params):array;

    /**
     * 自选科室设置
     * @param array $menuIds
     * @param string $baseKey
     * @param string $hdKey
     * @param array $baseIds
     * @param array $ksIds
     * @return array
     */
    public function getSelfSelectedDepartment(array $menuIds,string $baseKey,string $hdKey,array $baseIds=[],array $ksIds=[]):array;
    /**
     * 考勤排班 科室-班次绑定设置
     * @param array $menuIds
     * @param array $ksIds
     * @return array
     */
    public function getSchedulingCategoryDepartment(array $menuIds,array $ksIds):array;
}