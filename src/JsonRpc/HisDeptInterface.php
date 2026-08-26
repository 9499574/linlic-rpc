<?php

namespace linlic\JsonRpc;

/**
 * his部门接口
 */
interface HisDeptInterface
{
    /**
     * 根据hdId获取hisInfo 返回his code和name
     * @param string $hdId
     * @return array
     */
    public function getHisInfo(string $hdId):array;

    /**
     * 根据hdIds获取hisInfoData
     * @param array $hdIds
     * @return array
     */
    public function getHisInfoData(array $hdIds):array;
}