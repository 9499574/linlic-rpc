<?php

namespace linlic\JsonRpc;

interface TeachingActivityServiceInterface
{
    /**
     * 功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function getFields($params):array;

    /**
     * 功能配置
     * @return array
     */
    public function getConfigs():array;

    /**
     * 数据共享
     * @return array
     */
    public function getMenuConfWhere():array;

    /**
     * 获取设置配置
     *
     * @param array $params
     * @return array
     */
    public function getSettingConf(array $params): array;

    /**
     * 数据共享
     * @param array $params
     * @return array
     */
    public function getShareFields(array $params):array;
    /**
     * 获取活动类型
     * @param array $params
     * @return array
     */
    public function getActivityCategorys(array $params):array;
    /**
     * 获取指定活动类型的用户签到数据
     * @param array $params
     * @return array
     */
    public function getActivityCategoryUserSignData(array $params):array;
    /**
     * 请假回调接口
     * @param array $params
     * @return void
     */
    public function leaveCallBack(array $params):void;
    /**
     * 用户评价回调接口
     * @param array $params
     * @return void
     */
    public function userAssessCallBack(array $params):void;
    /**
     * 活动列表审批成功回调或退回回调
     * @param array $params
     * @return bool
     */
    public function actvitiyExamineCallBack(array $params):bool;
    /**
     * 活动管理请假审批成功回调或退回回调
     * @param array $params
     * @return bool
     */
    public function actvitiyAskExamineCallBack(array $params):bool;

    /**
     * 活动管理签到回调
     * @param array $params
     * @param $params['org_id'] 机构id
     * @param $params['system_id'] 系统id
     * @param $params['menu_id'] 菜单id
     * @param $params ['rule_sign_id'] 签到记录ID
     * @param $params ['business_id'] 业务ID活动模块对应activity_id
     * @param $params ['uid'] 人员ID
     * @param $params ['sign_type'] 签到类型1签到2签退
     * @param $params ['sign_time'] 签到时间
     * @return bool
      */
    public function signInCallBack(array $params):bool;
    /**
     * 出科考核接入教学活动人员统计信息
     * @param array $params
     * @return array
     */
    public function activityUserJoinStatis(array $params):array;
    /**
     * 出科考核接入教学活动人员是否完成
     * @param array $params
     * @return array
     */
    public function activityUserIsCompleted(array $params):array;

    /**
     * 消息字段
     * @return array
     */
    public function messageConf(): array;

    /**
     * 获取教学活动选项
     * @param array $whereCondition ['org_id' => 'xxxxxx', 'system_id' => 'xxxxxxx', 'menu_id' => 'xxxxxx']
     * @param array $columns 默认为['name', 'activity_id']
     * @param bool $formatToOptions 是否需要转换为下拉选项格式，true => [['label' => 'xxxxxx', 'value' => 'xxxxxx']], false则为查询原始数据集
     * @return array
     */
    public function getActivityOptions(array $whereCondition = [], array $columns = [], bool $formatToOptions = true): array;
}