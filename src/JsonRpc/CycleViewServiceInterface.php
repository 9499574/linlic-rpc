<?php

namespace linlic\JsonRpc;

interface CycleViewServiceInterface
{

    /**
     * 功能字段
     * @param array $params
     * @return array
     */
    public function viewField(array $params):array;

    /**
     * 菜单配置
     * @param array $params
     * @return array
     */
    public function viewConf(array $params):array;

    /**
     * 可用的出科考核项
     * @param array $params
     * @return array
     */
    public function LeaveDeptItem(array $params):array;

    /**
     * 保存机构出科设置
     * @param string $org_id 机构id
     * @param string $system_id 系统id
     * @param string $menu_id 菜单id
     * @param array $conf 菜单配置中的出科设置
     * @param string $created_by 创建时间
     * @return bool
     */
    public function saveOrgLeaveDeptSet(string $org_id,string $system_id,string $menu_id,array $conf,string $created_by):bool;

    /**
     * 数据共享
     * @param $params
     * @return array
     */
    public function dataSharing($params):array;

    /**
     * 获取轮转人员
     * @param string $org_id 机构id 不能为空
     * @param array $menu_id 轮转总览菜单数组 不能为空
     * @param array $is_leave 是否出科，可以为空
     * @param array $uid 学生数组，可以为空
     * @param array $date 时间段 ['2024-05-01','2024-05-31'] 可以为空
     * @param array $hd_id 本院科室数组 可以为空
     * @param array $sd_id 标准科室数组 可以为空
     * @param array $stage 轮转阶段数组 可以为空
     * @param array $standard_base_id 基地数组 可以为空
     * @param int $date_type 时间段查询类型 1轮转时间 2出科时间
     * @param array $params 其他参数 $params['fields'] (array 需要的其他字段值 staff_room_id)
     * @return array 学生uid，时间段，具体轮转科室，带教老师uid
     */
    public function getCycleUsers(string $org_id,array $menu_id,array $is_leave,array $uid=[],array $date=[],array $hd_id=[],array $sd_id=[],array $stage=[], array $standard_base_id=[],int $date_type=1,array $params=[]):array;

    /**
     *获取带教老师角色id
     * @param string $org_id 系统id
     * @param array $menu_id_arr 菜单id数组
     * @return array 带教老师角色id数组
     */
    public function getTeacherRoleIds(string $org_id,array $menu_id_arr):array;

    /**
     * 我的过程考核字段设置
     */
    public function myProcessFields(): array;

    /**
     * 我的过程考核菜单设置
     */
    public function myProcessConfs(): array;

    /**
     * 流程参数
     * @param array $params
     * @return array
     */
    public function flowParams(array $params): array;

    /**
     * 流程回调
     * @param array $params
     * @return bool
     */
    public function flowCallBack(array $params): bool;

    /**
     * 流程人员类型
     * @param array $params
     * @return array
     */
    public function flowCustomUserType(array $params): array;

    /**
     * 注册出科考核
     * @param array $params
     * @return array
     */
    public function  regLeaveDeptExam(array $params):array;

    /**
     * 获取出科考核轮转人员列表
     * @param array $params
     * @return array
     */
    public function leaveDeptExamUserLists(array $params):array;

    /**
     * 分配带教老师消息注册
     * @return array
     */
    public function assignTeacherNoticeReg():array;

    /**
     * 获取指定出科考核轮转人员数据
     * @param array $params
     * @return array
     */
    public function leaveDeptExamUserData(array $params):array;
    /**
     * 按照指定条件获取出科考核轮转人员数据（无分页）
     * @param array $params
     * @return array
     */
    public function getCycleUserGenData(array $params):array;


    //指定用户的轮转手册及填写数量(指定我的轮转手册菜单)
    public function getUserGenTrainTypeData(array $params):array;

    /**
     * 获取科室已分配带教老师的学员
     * @param array $params ['org_id'=>'机构ID','menu_id'=>'轮转总览菜单ID','start_date'=>'开始日期','end_date'=>'结束日期']
     * @return array
     */
    public function getKsAssignTeacherStudents(array $params):array;

    /**
     * 获取带教老师带教学生
     * @param array $params 'org_id'=>'机构ID','menu_id'=>'轮转总览菜单ID 支持传依赖了轮转总览菜单的依赖菜单ID','start_date'=>'开始日期','end_date'=>'结束日期','teacher_ids'=>'带教老师ID数组'
     * @return array
     */
    public function getTeachersTeachingStudents(array $params):array;

}