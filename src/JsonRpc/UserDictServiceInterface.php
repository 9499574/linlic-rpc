<?php
/**
 * User: zhaodongsheng
 * Date: 2024/5/9
 * Time: 下午6:17
 * Created by IntelliJ IDEA.
 */

namespace linlic\JsonRpc;

interface UserDictServiceInterface
{
    /**
     * 获取基地选项
     *
     * @param string $orgId
     * @param string $systemId
     * @param string $menuId
     * @param array $where ['option_label'=>["眼科"],'option_value'=>["622116875481731073"]]
     * @param array $select ['option_label','option_value']
     * @return array [["option_label"=>"眼科","option_value"=>"622116875481731073"]]
     */
    public function getBaseOptions(string $orgId, int $systemId, string $menuId, array $select = [], array $where = []): array;

    /**
     * 获取标准科室选项
     *
     * @param string $orgId
     * @param string $systemId
     * @param string $menuId
     * @param array $select ['option_label','option_value']
     * @param array $where ['option_label'=>["眼科"],'option_value'=>["622116875481731073"]]
     * @return array [["option_label"=>"眼科","option_value"=>"622116875481731073"]]
     */
    public function getSdOptions(string $orgId, int $systemId, string $menuId, array $select = [], array $where = []): array;


    /**
     * 获取本院科室选项
     *
     * @param string $orgId
     * @param string $systemId
     * @param string $menuId
     * @param array $where ['option_label'=>["眼科"],'option_value'=>["622116875481731073"]]
     * @param array $select ['option_label','option_value']
     * @return array [["option_label"=>"眼科","option_value"=>"622116875481731073"]]
     */
    public function getHdOptions(string $orgId, int $systemId, string $menuId, array $select = [], array $where = []): array;

    /**
     * 获取机构系统角色组选项
     *
     * @param int $org_id
     * @param string $system_id
     * @param string $menuId
     * @param array $select
     * @param array $where
     * @return array
     * @user zhaodongsheng
     * @time 2024/5/9 下午7:36
     */
    public function getRoleGroupOptions(int $orgId, int $systemId, string $menuId, array $select = [], array $where = []): array;

    /**
     * 获取机构系统角色选项
     *
     * @param int $org_id
     * @param string $system_id
     * @param string $menuId
     * @param array $select
     * @param array $where
     * @return array
     * @user zhaodongsheng
     * @time 2024/5/9 下午7:36
     */
    public function getRoleOptions(int $orgId, int $systemId, string $menuId, array $select = [], array $where = []): array;
}