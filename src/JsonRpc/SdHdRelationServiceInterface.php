<?php

namespace linlic\JsonRpc;

interface SdHdRelationServiceInterface
{
    /**
     * 通过标准科室ID获取对应本院科室ID
     * @param array $sdIds
     * @param int $org_id
     * @return array ['111'=>[111,2222],'2222'=>[3333,444]]
     */
    public function getSdIdByHdId(array $sdIds,int $org_id):array;

    /**
     * 通过本院科室ID获取对应标准科室ID
     * @param array $hdIds
     * @param int $org_id
     * @return array ['111'=>[111,2222],'2222'=>[3333,444]]
     */
    public function getHdIdBySdId(array $hdIds,int $org_id):array;

    /**
     * 本院科室与标准科室关联选项 返回级联数据格式
     * @param int $org_id
     * @return array
     */
    public function hdSdRelationCascaderOptions(int $org_id):array;
}