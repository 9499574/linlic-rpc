<?php

namespace linlic\JsonRpc;

interface FestivalLimitWeekServiceInterface
{
    //功能字段
    public function weekField($params):array;
    //菜单配置
    public function weekConf($params):array;
    //机构设置
    public function getSetConf($params):array;
}