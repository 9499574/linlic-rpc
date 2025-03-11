<?php

namespace linlic\JsonRpc;

interface AttendanceServiceInterface
{
    /*
    * 考勤管理-根据方法名和参数，调用rpc接口
    * @param string $funcName
    * @param array $params
    * @return array
    */
    public function getFuncName(string $funcName,array $params):array;

    /*
     * 考勤管理-考勤列表-功能字段列表的接口
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

    /*
     * 考勤管理-考勤列表-菜单设置的接口
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params):array;

    /*
    * 根据参数 获取用户一段时间内的考勤状态信息
    * $params是一个多维数组，每个子数组里面，必须包含：user_gen_id、uid、start_date、end_date字段。
    * 返回结果格式：['61515116'=>'正常','61515117'=>'异常']，其中键值，如：61515117 表示user_gen_id。
    */
    public function getUserAtdcStatus($params):array;

    /**
     * 日常考勤明细
     * @param array $params
     * @return array
     */
    public function getUserAtdcList(array $params): array;

    /*
   * 根据用户的uid数组、起始时间、结束时间、分别返回用户的考勤信息
   * $uidArr：用户的uid数组、$atdcStatusArr：考勤状态的数组。含义：1正常 2缺卡 3迟到 4早退。如果传多个，则表示或的含义，比如传2、3则表示 缺卡或迟到的次数。
   * $startDate起始的日期、$endDate：结束的日期,格式如："2024-07-01"。
   * 如果$startDate不传，则表示返回大于开始时间的数据。$endDate，则表示返回小于开始时间的数据。如果都不传，则表示返回所有的数据。
   * 返回结果格式：['61515116'=>1,'61515117'=>2]
   */
    public function getUserAtdcInfo($uidArr,$startDate = '',$endDate = '',$atdcStatusArr = [2,3,4]):array;
    //////////////////////////////////////////////////////////////////////////对外rpc接口 开始////////////////////////////////////////////////////////////

    /*
     * 考勤管理打卡-考勤列表-功能字段列表的接口
     * @param array $params
     * @return array
    */
    public function getSignFields(array $params):array;

    /*
     * 考勤管理打卡-考勤列表-菜单设置的接口
     * @param array $params
     * @return array
     */
    public function getSignConfigs(array $params):array;

    /**
     * 轮转总览人员考勤统计
     * @param array $params
     * @return array
     */
    public function getAttendanceStatisticForCycle(array $params): array;

    /**
     * 轮转总览人员科室考勤明细
     * @param array $params
     * @return array
     */
    public function getAttendanceListForCycle(array $params): array;


}