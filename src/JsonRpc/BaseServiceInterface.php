<?php

namespace linlic\JsonRpc;

interface BaseServiceInterface
{
    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function baseField(array $params):array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function baseConf(array $params):array;

    /**
     * 根据机构id，获取基地字段
     * @param string $orgId
     * @return array
     */
    public function getBaseFields(string $orgId):array;

    /**
     * 根据机构id，获取基地选项
     *
     * @param string $orgId
     * @param array $where ['option_label'=>["眼科"],'option_value'=>["622116875481731073"]]
     * @param array $select ['option_label','option_value']
     * @return array [["option_label"=>"眼科","option_value"=>"622116875481731073"]]
     * @deprecated 请使用UserDictOptionsServiceInterface::getBaseOptions
     */
    public function getBaseOptions(string $orgId, array $where = [], array $select = []): array;

    /**
     * 通过标准基地ID集合,获取标准基地名称
     * @param array $standardBaseId [1,2,3,4]
     * @return array [1=>'aaa',2=>'bbb']
     */
    public function getStandardBaseName(array $standardBaseId):array;

    /**
     * 获取基地详情字段key及字段值
     * @param string $standard_base_id
     * @return array
     */
    public function getDetailFieldVal(string $standard_base_id):array;

}