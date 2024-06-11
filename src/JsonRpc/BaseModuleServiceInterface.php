<?php

namespace linlic\JsonRpc;

/**
 * 模块配置 RPC接口
 */
interface BaseModuleServiceInterface
{
    /**
     * 功能字段
     * https://thoughts.aliyun.com/workspaces/656d4c93bc80e5001b7d0d9b/docs/65f121ddffa6570001c48c28
     * @param array $params
     * @return array
     */
    public function moduleField(array $params):array;

    /**
     * 菜单配置
     * https://thoughts.aliyun.com/workspaces/656d4c93bc80e5001b7d0d9b/docs/65f105eb5e119400015a55d2
     * @param array $params
     * @return array
     */
    public function menuConfig(array $params):array;


    /**
     * 数据共享
     * https://thoughts.aliyun.com/workspaces/656d4c93bc80e5001b7d0d9b/docs/65f13251ffa6570001c49a90
     * @param array $params
     * @return array
     */
    public function shareData(array $params):array;

    /**
     * 机构设置
     * https://thoughts.aliyun.com/workspaces/656d4c93bc80e5001b7d0d9b/docs/6606388b51244b0001850790
     * @param array $params
     * @return array
     */
    public function orgSet(array $params):array;
}