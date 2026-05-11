<?php

namespace linlic\JsonRpc;

/**
 * 清华长庚数据上报日志 RPC接口
 */
interface QhcgDataReportLogServiceInterface
{
    /**
     * 获取数量
     * @param array $where
     * @return int
     */
    public function getCount(array $where):int;

    /**
     * 获取数据
     * @param array $select
     * @param array $where
     * @param int $page
     * @param int $limit
     * @param string $orderBy
     * @param string $sort
     * @return array
     */
    public function getLimitResult(array $select,array $where,int $page,int $limit,string $orderBy='',string $sort='desc'): array;
}