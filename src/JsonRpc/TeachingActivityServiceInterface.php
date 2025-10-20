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
     * 活动指定人员签到验证
     * @param array $params
     * @param $params['uid'] 签到人员
     * @param $params['business_id'] 业务ID
     * @param $params ['config_id'] 活动配置ID
     * @return array
     */
    public function checkSignCallBack(array $params):array;
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
     * 轮转总览对接活动列表(指定人员活动信息)
     * @param array $params
     * @return array
     */
    public function cycleUserActivityList(array $params):array;
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
    /*
     * 获取活动详情表单信息
     * */
    public function getActivityInfoData(array $params):array;
    /*
    * 活动审核流程配置增加用户类型
    * */
    public function getActivityExamineCustomUserType(array $params):array;
    /**
     * 活动列表-rpc
     * @param array $params
     * @param $params['org_id'] 机构id
     * @param $params['menu_ids'] 菜单集合
     * @return array
     */
    public function getTeachingActivityList(array $params):array;
    //活动详情-rpc
    public function getTeachingActivityDetail($avtivity_ids):array;

    /**
     * 课程发布-rpc
     * @param array $params 二维数组（同一次请求所有数据的org_id、system_id、menu_id要相同）
     * @param $param['org_id'] 机构ID
     * @param $param['system_id'] 系统ID
     * @param $param['menu_id'] 菜单ID
     * @param $param['name'] 活动名称
     * @param $param['start_time'] 开始时间
     * @param $param['end_time'] 结束时间
     * @param $param['teaching_activity_type'] 活动类型
     * @param $param['teaching_activity_level'] 活动级别
     * @param $param['hd_id'] 科室ID
     * @param $param['base_id'] 基地ID
     * @param $param['teaching_activity_campus'] 院区ID
     * @param $param['intro'] 活动简介
     * @param $param['supervision_type'] 督导类型
     * @param $param['choice_room']  选择房间
     * @param $param['equipment']  设备
     * @param $param['consumable']  耗材
     * @param $param['user_object_users_config'] 用户类型人员配置(多个)
     * @param $param['schedule_class_config']  课程通知人员配置
     * @param $param['activity_annex_config'] 活动附件
     * @return array
     */
    public function coursePlanToTeachingActivity(array $params):array;


    /*
    * 获取教学活动相关配置字段内容
    * */
    public function getTeachingActivityRuleConf(string $orgId, array $menuId) :array;

    /**
     * 批量导入-校验rpc
     * @param array $params org_id system_id menu_id pre_params
     * @return array
     */
    public function validConfig(array $params):array;

    /**
     * 批量导入-模版rpc
     * @param array $params org_id system_id menu_id pre_params
     * @return array
     */
    public function templateConfig(array $params):array;

    /**
     * 批量导入-导入rpc
     * @param array $params org_id system_id menu_id pre_params
     * @return array
     */
    public function importData(array $params):array;

    /**
     * 表单统计功能字段
     * @param $params ['org_id'=>-1]
     * @return array
     */
    public function formFields($params):array;

    /**
     * 通过菜单id获取活动类型接口
     * @param array $params (params:string org_id array menu_ids)
     * @return array
     */
    public function getActivityCateByMenuIds(array $params):array;

    /**
     * 获取督导反馈需要的教学活动选项 $params string org_id string menu_id string standard_base_id string hd_id string type string start_time string end_time
     * @param array $params
     * @return array
     */
    public function getActivityOptionsForSupFdbk(array $params):array;

    /**
     * 获取活动类型科室次数设置
     * @param $params ['org_id'=>'','system_id'=>'','menu_id'=>'','hd_id'=>[]] hd_id可为空
     * @return array
     */
    public function getActivityKsNumSetData(array $params):array;
    
    /**
     * 机构设置配置
     * @param array $params
     * @return mixed
     */
    public function orgSetConf(array $params): array;

    /**
     * 获取用户活动类型科室次数
     * @param $params ['org_id'=>'','system_id'=>'','menu_id'=>'','user_gen_id'=>'','hd_id'=>[]] hd_id可为空
     * @return array
     */
    public function getUserActivityKsNumData(array $params):array;

    /**
     * 获取督导反馈需要的教学活动名称
     * @param array $params ['org_id'=>'','module_business_ids'=>[]]
     * @return array
     */
    public function getActivityNamesForSupFdbk(array $params):array;
}