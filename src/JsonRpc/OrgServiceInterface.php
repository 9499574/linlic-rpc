<?php

namespace linlic\JsonRpc;

interface OrgServiceInterface
{
    /**
     * 获取机构信息
     *
     * @param int $orgId 机构ID
     * @return array
     * // 返回示例
     * //   [
     * //     "id": 48,
     * //     "org_id": 610427129594953728,
     * //     "org_name": "成都市第七人民医院",
     * //     "customer_id": 19009,
     * //     "org_logo": "610427135601168384",
     * //     "org_status": 1,
     * //     "account_type": 1,
     * //     "org_account": "cddqrmyy",
     * //     "org_domain": "cddqrmyy.ccmtv.cn",
     * //     "account_num": 0,
     * //     "storage_capacity": 0,
     * //     "sms_num": 0,
     * //     "created_at": "2024-01-29 10:59:28",
     * //     "updated_at": "2024-01-29 10:59:30",
     * //     "deleted_at": null,
     * //     "created_by": 608729674080534529,
     * //     "updated_by": 608729674080534529,
     * //     "deleted_by": 0
     * //   ]
     * @user zhaodongsheng
     * @time 2024/1/29 10:57
     */
    public function getInfoByOrgId(string $orgId): array;

    /**
     * 根据状态获取机构列表
     *
     * @param int $status 状态 1:正常,0:停用
     * @return array
     * @user zhaodongsheng
     * @time 2024/6/17 下午3:22
     */
    public function getOrgsByStatus(int $status): array;

    /**
     * 获取机构RSA公钥
     * @param int $orgId
     * @return array
     */
    public function getOrgRsaKey(int $orgId):array;

    /**
     * 域名前缀
     * @param int $orgId
     * @return string
     */
    public function getOrgDomainPrefix(int $orgId):string;

    /**
     * 根据域名前缀获取机构编号
     * @param string $domainPrefix
     * @return string
     */
    public function getDomainPrefixByOrgId(string $domainPrefix):string;
}