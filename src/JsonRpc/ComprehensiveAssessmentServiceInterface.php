<?php

namespace linlic\JsonRpc;

interface ComprehensiveAssessmentServiceInterface
{
    /**
     * 功能字段
     *
     * @return array
     */
    public function getFields($params): array;

    /**
     * 功能配置
     *
     * @return array
     */
    public function getConfigs($params): array;

    /**
     * 数据共享
     *
     * @return array
     */
    public function getMenuConfWhere(array $params): array;

    /**
     * 机构端设置项配置
     */
    public function getSettingConf(array $params): array;

    /**
     * 表单中心保存表单后的回调
     */
    public function saveFormCallback(array $params): bool;

    /**
     * 流程参数
     */
    public function flowParams(array $params): array;

    /**
     * 流程回调
     */
    public function callBack(array $params): bool;

    /**
     * 流程人员类型
     */
    public function flowCustomUserType(array $params): array;

    /**
     * 获取出科百分比数据
     */
    public function getLeaveDeptPercentData($params): array;

    /**
     * 获取出科分数数据
     */
    public function getLeaveDeptScoreData($params): array;

    /**
     * 获取出科数量数据
     */
    public function getLeaveDeptNumData($params): array;

    /**
     * 导出详情数据
     * @param array $businessParams
     * @return array
     *
     */
    public function exportDetailData(array $businessParams):array;

    /**
     * 获取评估列表
     * @param array $params
     * @return array
     */
    public function getAssessList(array $params):array;

    /**
     * 综合评估消息注册 
     * @return array
     */
    public function caNoticeReg():array;

    /**
     * 获取访谈记录列表
     * @param array $params string org_id 系统id array reliance_menu_id 调用该rpc接口模块的依赖菜单id array student_uid_arr 学生uid数组 teacher_uid_arr 导师uid数组 limit 每页显示条数 page 当前页数
     * @return array
     */
    public function getInterviewsList(array $params):array;

    /**
     * 获取轮转生涯需要的雷达图
     * @param array $params sting org_id 系统id string uid 学生id menu_id_arr 综合评估菜单id数组
     * @return array
     */
    public function getRadarForCycleCareer(array $params):array;


   //根据条件获取评估记录
    public function getComprehensiveAssessList(array $params):array;
}