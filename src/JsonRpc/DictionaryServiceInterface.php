<?php
/**
 * User: zhaodongsheng
 * Date: 2024/1/22
 * Time: 18:07
 * Created by IntelliJ IDEA.
 */

namespace linlic\JsonRpc;

interface DictionaryServiceInterface
{
    /**
     * 根据字典key获取字典选项
     *
     * @param string $dictKey 字典key
     * @param int $orgId 机构id
     * @return array
     * @user zhaodongsheng
     * @time 2024/1/22 17:26
     */
    public function getOptionByDictKey(string $dictKey, int $orgId): array;

    /**
     * 根据字典id获取字典选项
     *
     * @param int $dictId 字典id
     * @param int $orgId 机构id
     * @return array
     * @user zhaodongsheng
     * @time 2024/1/22 17:27
     */
    public function getOptionByDictId(int $dictId, int $orgId): array;

    /**
     * 获取用户字段
     *
     * @param array $select 查询字段
     * @return array
     * @user zhaodongsheng
     * @time 2024/1/22 17:27
     */
    public function getUserFields(array $select = ['field_id', 'org_id', 'field_name', 'field_en_name', 'field_key', 'field_type', 'dict_id', 'dict_key', 'field_remark']): array;

    /**
     * 获取用户字段和选项
     *
     * @return array
     * @user zhaodongsheng
     * @time 2024/1/23 18:00
     */
    public function getUserFieldsWithOptions(): array;
}