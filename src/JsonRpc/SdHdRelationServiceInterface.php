<?php

namespace linlic\JsonRpc;

interface SdHdRelationServiceInterface
{
    /**
     * 通过标准科室ID获取对应本院科室ID
     * @param array $sdIds
     * @return array ['111'=>[111,2222],'2222'=>[3333,444]]
     */
    public function getSdIdByHdId(array $sdIds):array;

    /**
     * 通过本院科室ID获取对应标准科室ID
     * @param array $hdIds
     * @return array ['111'=>[111,2222],'2222'=>[3333,444]]
     */
    public function getHdIdBySdId(array $hdIds):array;
}