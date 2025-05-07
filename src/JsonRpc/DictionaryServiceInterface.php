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
     * @param string $systemId 系统ID
     * @param string $menuId 菜单ID
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
    public function getOptionByDictKey(string $dictKey, int $orgId, string $systemId = null, $menuId = null): array;

    /**
     * 根据字典id获取字典选项
     *
     * @param int $dictId 字典id
     * @param int $orgId 机构id
     * @param string $systemId 系统ID
     * @param string $menuId 菜单ID
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
    public function getOptionByDictId(int $dictId, int $orgId, string $systemId = null, string $menuId = null): array;

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
    public function getFields(array $select = ['field_id', 'org_id', 'field_name', 'field_en_name', 'field_key', 'field_type', 'dict_id', 'dict_key', 'field_remark']): array;

    /**
     * 获取用户字段和选项
     *
     * @param string $orgId 机构ID
     * @param string $systemId 系统ID
     * @param string $menuId 菜单ID
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
    public function getFieldsWithOptions(string $orgId = null, string $systemId = null, string $menuId = null): array;

    /**
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
     * @deprecated
     * 初始化机构系统字典数据
     * @deprecated 请使用initMenuDict方法
     */
    // public function initOrgDict(array $systemData): bool;


    /**
     * 根据选项ID返回选项标签
     *
     * @param $optionId int 选项ID
     * @param $dictKey string 字典key
     * @param string $orgId 机构ID
     * @param string $systemId 系统ID
     * @param string $menuId 菜单ID
     * @return string 选项标签
     * @user zhaodongsheng
     * @time 2024/1/26 11:15
     * @deprecated 不应该使用option_id查询标签,应使用option_value查询标签,请使用getOptionLabelByOptionValue方法
     */
    public function getOptionLabelByOptionId(string $optionId, string $dictKey, string $orgId = null, string $systemId = null, string $menuId = null): string;


    /**
     * 根据选项IDS返回选项标签
     *
     * @param $optionIds array 选项IDs
     * @param $dictKey string 字典key
     * @param string $orgId 机构ID
     * @param string $systemId 系统ID
     * @param string $menuId 菜单ID
     * @return array
     * // 返回示例
     * //{
     * //         "610484296108838912": "ce22",
     * //         "610484253918334976": "ceshi11"
     * //}
     * @user zhaodongsheng
     * @time 2024/2/2 10:43
     * @deprecated 不应该使用option_id查询标签,应使用option_value查询标签,请使用getOptionLabelsByOptionValues方法
     */
    public function getOptionLabelsByOptionIds(array $optionIds, string $dictKey, string $orgId = null, string $systemId = null, string $menuId = null): array;


    /**
     * 根据字典keys获取字典选项
     *
     * @param array $dictKey 字典keys
     * @param int $orgId 机构id
     * @param string $systemId 系统ID
     * @param string $menuId 菜单ID
     * @return array
     * // 返回示例
     *  // {
     *  //         "user_ks": [
     *  //             {
     *  //                 "option_id": "613058205140955136",
     *  //                 "dict_id": "613057726751223808",
     *  //                 "dict_key": "user_ks",
     *  //                 "org_id": "-1",
     *  //                 "option_label": "心内科",
     *  //                 "option_value": "1",
     *  //                 "sort": 1,
     *  //                 "is_default": 0,
     *  //                 "option_status": 1,
     *  //                 "option_remark": ""
     *  //             },
     *  //             {
     *  //                 "option_id": "613063633212059648",
     *  //                 "dict_id": "613057726751223808",
     *  //                 "dict_key": "user_ks",
     *  //                 "org_id": "-1",
     *  //                 "option_label": "科室2",
     *  //                 "option_value": "",
     *  //                 "sort": 1,
     *  //                 "is_default": 1,
     *  //                 "option_status": 1,
     *  //                 "option_remark": ""
     *  //             }
     *  //         ],
     *  //         "ask_type": [
     *  //             {
     *  //                 "option_id": "613377780214816769",
     *  //                 "dict_id": "613096597807509504",
     *  //                 "dict_key": "ask_type",
     *  //                 "org_id": "613069846708518912",
     *  //                 "option_label": "年假1",
     *  //                 "option_value": "613096655735042048",
     *  //                 "sort": 1,
     *  //                 "is_default": 0,
     *  //                 "option_status": 1,
     *  //                 "option_remark": ""
     *  //             },
     *  //             {
     *  //                 "option_id": "613377780281925632",
     *  //                 "dict_id": "613096597807509504",
     *  //                 "dict_key": "ask_type",
     *  //                 "org_id": "613069846708518912",
     *  //                 "option_label": "病假",
     *  //                 "option_value": "613096683220316160",
     *  //                 "sort": 2,
     *  //                 "is_default": 1,
     *  //                 "option_status": 1,
     *  //                 "option_remark": ""
     *  //             }
     *  //         ]
     *  //     }
     * @user zhaodongsheng
     * @time 2024/1/22 17:26
     */
    public function getOptionByDictKeys(array $dictKeys, int $orgId, string $systemId = null, $menuId = null): array;

    public function getOptionByDictKeysRedis(string $redisKey,array $dictKeys, int $orgId, string $systemId = null, $menuId = null): array;

    /**
     * 根据字典labels获取字典values
     *
     * @param int $orgId
     * @param array $optionLabels
     * @param string $systemId 系统ID
     * @param string $menuId 菜单ID
     * 示例:
     * //{"ask_type":["陪产假","产假"],"xxx_dict_key":["xx_label","xx1_label"]}
     *
     * @return array
     * 示例:
     * //{
     * //         "ask_type": {
     * //             "产假": "613096764782751744",
     * //             "陪产假": "613096847628644352"
     * //         },
     * //        'xxx_dict_key': {
     * //             "xx_label": "613096764782751744",
     * //             "xx1_label": "613096847628644352"
     * //         }
     * //}
     * @user zhaodongsheng
     * @time 2024/2/26 11:54
     */
    public function getOptionValuesByOptionLabels(int $orgId, array $optionLabels, string $systemId = null, string $menuId = null): array;

    /**
     * 根据选项value返回选项标签
     *
     * @param $optionId int 选项value
     * @param $dictKey string 字典key
     * @param string $orgId 机构ID
     * @param string $systemId 系统ID
     * @param string $menuId 菜单ID
     * @return string 选项标签
     * @user zhaodongsheng
     * @time 2024/1/26 11:15
     */
    public function getOptionLabelByOptionValue(string $optionValue, string $dictKey, string $orgId = null, string $systemId = null, string $menuId = null): string;


    /**
     * 根据选项values返回选项标签
     *
     * @param $optionIds array 选项values
     * @param $dictKey string 字典key
     * @param string $orgId 机构ID
     * @param string $systemId 系统ID
     * @param string $menuId 菜单ID
     * @return array
     * // 返回示例
     * //{
     * //         "610484296108838912": "ce22",
     * //         "610484253918334976": "ceshi11"
     * //}
     * @user zhaodongsheng
     * @time 2024/2/2 10:43
     */
    public function getOptionLabelsByOptionValues(array $optionValues, string $dictKey, string $orgId = null, string $systemId = null, string $menuId = null): array;

    /**
     * 过滤全局字典key
     *
     * @param array $dictKeys
     * @param string|null $orgId
     * @param string|null $systemId
     * @param string|null $menuId
     * @return array
     * @user zhaodongsheng
     * @time 2024/3/29 13:09
     */
    public function filterGlobalDictKeys(array $dictKeys): array;

    /**
     * 初始化菜单字典
     *
     * @param array $dictKeys
     * @param string $orgId
     * @param string $systemId
     * @param string $menuId
     * @return bool
     * @user zhaodongsheng
     * @time 2024/3/29 14:05
     */
    public function initMenuDict(array $dictKeys, string $orgId, string $systemId, string $menuId): bool;

    /**
     * 获取不可编辑的字典key
     *
     * @return array
     * @user zhaodongsheng
     * @time 2024/4/23 下午8:42
     */
    public function getNotEditableDictKey(): array;

    /**
     * 根据字典类别获取字典key选项
     *
     * @return array
     * @example
     * [
     *  [
     *      'label'=>'督导类型',
     *      'value'=>'dict_key1',
     *  ],
     *  [
     *       'label'=>'教学活动院区',
     *       'value'=>'dict_key2',
     *  ],
     * ]
     * @user zhaodongsheng
     * @time 2024/6/4 上午10:57
     */
    public function getDictKeyOptionsByDictKind(int $dictKind, string $orgId, string $systemId = null, string $menuId = null): array;
}