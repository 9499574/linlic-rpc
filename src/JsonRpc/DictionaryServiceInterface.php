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
     * // 返回示例
     * //[
     * // [
     * //     'option_id' => '608768841594490881',
     * //     'dict_id' => '608768792122671105',
     * //     'dict_key' => 'user.sex',
     * //     'org_id' => '-1',
     * //     'option_label' => '男',
     * //     'option_value' => '男',
     * //     'sort' => 1,
     * //     'is_default' => 1,
     * //     'option_status' => 1,
     * //     'option_remark' => '',
     * //   ],
     * // [
     * //     'option_id' => '608768868752609280',
     * //     'dict_id' => '608768792122671105',
     * //     'dict_key' => 'user.sex',
     * //     'org_id' => '-1',
     * //     'option_label' => '女',
     * //     'option_value' => '女',
     * //     'sort' => 2,
     * //     'is_default' => 1,
     * //     'option_status' => 1,
     * //     'option_remark' => '',
     * //   ],
     * // ]
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
     * // 返回示例
     * //[
     * // [
     * //     'option_id' => '608768841594490881',
     * //     'dict_id' => '608768792122671105',
     * //     'dict_key' => 'user.sex',
     * //     'org_id' => '-1',
     * //     'option_label' => '男',
     * //     'option_value' => '男',
     * //     'sort' => 1,
     * //     'is_default' => 1,
     * //     'option_status' => 1,
     * //     'option_remark' => '',
     * //   ],
     * // [
     * //     'option_id' => '608768868752609280',
     * //     'dict_id' => '608768792122671105',
     * //     'dict_key' => 'user.sex',
     * //     'org_id' => '-1',
     * //     'option_label' => '女',
     * //     'option_value' => '女',
     * //     'sort' => 2,
     * //     'is_default' => 1,
     * //     'option_status' => 1,
     * //     'option_remark' => '',
     * //   ],
     * // ]
     * @user zhaodongsheng
     * @time 2024/1/22 17:27
     */
    public function getOptionByDictId(int $dictId, int $orgId): array;

    /**
     * 获取用户字段
     *
     * @param array $select 查询字段
     * @return array
     * // 返回示例
     * //[
     * // [
     * //     'field_id' => '609067181930500096',
     * //     'org_id' => '0',
     * //     'field_name' => '图片',
     * //     'field_en_name' => '图片',
     * //     'field_key' => 'key-picture-upload',
     * //     'field_type' => 'picture-upload',
     * //     'dict_id' => '606137023342018561',
     * //     'dict_key' => 'test6',
     * //     'field_remark' => '图片',
     * //   ],
     * // [
     * //     'field_id' => '609067077626548224',
     * //     'org_id' => '0',
     * //     'field_name' => '富文本',
     * //     'field_en_name' => '富文本',
     * //     'field_key' => 'key-rich-editor',
     * //     'field_type' => 'rich-editor',
     * //     'dict_id' => '606135696620744705',
     * //     'dict_key' => 'test5',
     * //     'field_remark' => '富文本',
     * //   ],
     * // ]
     * @user zhaodongsheng
     * @time 2024/1/22 17:27
     */
    public function getUserFields(array $select = ['field_id', 'org_id', 'field_name', 'field_en_name', 'field_key', 'field_type', 'dict_id', 'dict_key', 'field_remark']): array;

    /**
     * 获取用户字段和选项
     *
     * @return array
     * //返回示例
     * //[
     * // [
     * //     'id' => 'input96763',
     * //     'type' => 'input',
     * //     'options' => [
     * //       'name' => 'input96763',
     * //       'label' => 'input',
     * //       'optionItems' => [
     * //       ],
     * //       'defaultValue' => '',
     * //     ],
     * //   ],
     * // [
     * //     'id' => 'textarea76503',
     * //     'type' => 'textarea',
     * //     'options' => [
     * //       'name' => 'textarea76503',
     * //       'label' => 'textarea',
     * //       'optionItems' => [
     * //       ],
     * //       'defaultValue' => '',
     * //     ],
     * //   ],
     * // [
     * //     'id' => 'radio22155',
     * //     'type' => 'radio',
     * //     'options' => [
     * //       'name' => 'radio22155',
     * //       'label' => 'radio',
     * //       'optionItems' => [
     * //       [
     * //           'label' => 'radio 1',
     * //           'value' => 1,
     * //         ],
     * //       [
     * //           'label' => 'radio 2',
     * //           'value' => 2,
     * //         ],
     * //       [
     * //           'label' => 'radio 3',
     * //           'value' => 3,
     * //         ],
     * //       ],
     * //       'defaultValue' => NULL,
     * //     ],
     * //   ],
     * // ]
     * @user zhaodongsheng
     * @time 2024/1/23 18:00
     */
    public function getUserFieldsWithOptions(): array;

    /**
     * 初始化机构系统字典数据
     *
     * @param array $systemData
     * //参数示例
     * //        $systemData = [
     * //             'system_id' => 1,
     * //             'data' => [
     * //                 [
     * //                     'menu_id' => 1,
     * //                     'func_id' => 1,
     * //                     'org_id' => 1
     * //                 ],
     * //                 [
     * //                     'menu_id' => 2,
     * //                     'func_id' => 3,
     * //                     'org_id' => 1
     * //                 ],
     * //             ],
     * //         ];
     * @return bool
     * @user zhaodongsheng
     * @time 2024/1/25 19:23
     */
    public function initOrgDict(array $systemData): bool;


    /**
     * 根据选项ID返回选项标签
     *
     * @param $optionId int 选项ID
     * @return string 选项标签
     * @user zhaodongsheng
     * @time 2024/1/26 11:15
     */
    public function getOptionLabelByOptionId(string $optionId): string;

}