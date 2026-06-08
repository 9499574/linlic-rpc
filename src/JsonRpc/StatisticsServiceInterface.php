<?php

namespace linlic\JsonRpc;

interface StatisticsServiceInterface
{
    /**
     * 个人进度看板-模块字段
     */
    public function personalProgressDashboardField($params): array;

    /**
     * 个人进度看板-配置字段
     */
    public function personalProgressDashboardConf($params): array;

    /**
     * 科室进度看板-模块字段
     */
    public function ksProgressDashboardField($params): array;

    /**
     * 科室进度看板-配置字段
     */
    public function ksProgressDashboardConf($params): array;

    /**
     * 科室进度看板数据分析
     */
    public function ksProgressDashboardAnalyze(array $params): bool;
}