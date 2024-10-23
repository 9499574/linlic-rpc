<?php

namespace linlic\JsonRpc;

interface CertificateDemoServiceInterface
{
    /**
     * 资源模块参数
     * @param array $params
     * @return array
     */
    public function params(array $params):array;

    /**
     * 资源模块详情
     * @param array $params
     * @return array
     */
    public function detail(array $params):array;

    /**
     * 资源模块列表
     * @param array $params
     * @return array
     */
    public function dataList(array $params):array;

    /**
     * 资源模块规则
     * @param array $params
     * @return array
     */
    public function rule(array $params):array;

    /**
     * 资源模块用户
     * @param array $params
     * @return array
     */
    public function user(array $params):array;
}