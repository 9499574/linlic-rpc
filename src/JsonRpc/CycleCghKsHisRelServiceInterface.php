<?php


namespace linlic\JsonRpc;

/**
 * 本院科室-HIS科室关系 RPC 服务接口
 *
 * 说明：如需被其他微服务调用，请把本接口迁移到 linlic/rpc 包（命名空间 linlic\JsonRpc）后发布，
 * 再把实现类 CycleCghKsHisRelService 的 implements 换为包内接口。
 */
interface CycleCghKsHisRelServiceInterface
{
    /**
     * 通过本院科室ID获取HIS科室关系
     * @param array $params ['hd_id'=>'本院科室ID']
     * @return array
     */
    public function getRelByHdId(array $params): array;

    /**
     * 通过多个本院科室ID批量获取HIS科室关系
     * @param array $params ['hd_ids'=>['本院科室ID',...]]
     * @return array
     */
    public function mapRelByHdIds(array $params): array;

    /**
     * 删除HIS科室关系
     * @param array $params ['hd_id'=>'本院科室ID','his_dpt_ids'=>['HIS科室ID',...]]
     * @return bool
     */
    public function delRelByHdId(array $params): bool;

    /**
     * 重建HIS科室关系（先删后加，全量覆盖）
     * @param array $params ['hd_id'=>'本院科室ID','his_list'=>[['his_dpt_id'=>'','his_dpt_name'=>''],...]]
     * @return array
     */
    public function rebuildRelByHdId(array $params): array;
}
