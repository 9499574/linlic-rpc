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
   * 根据用户的uid数组、起始时间、结束时间、分别返回用户的考勤信息
   * $uidArr：用户的uid数组、$atdcStatusArr：考勤状态的数组。含义：1正常 2缺卡 3迟到 4早退。如果传多个，则表示或的含义，比如传2、3则表示 缺卡或迟到的次数。
   * $startDate起始的日期、$endDate：结束的日期。
   * 如果$startDate不传，则表示返回大于开始时间的数据。$endDate，则表示返回小于开始时间的数据。如果都不传，则表示返回所有的数据。
   * 返回结果格式：['61515116'=>1,'61515117'=>2]
   */
    public function getUserAtdcInfo($orgId,$uidArr,$atdcStatusArr = [2,3,4],$startDate = '',$endDate = ''):array;
    //////////////////////////////////////////////////////////////////////////对外rpc接口 开始////////////////////////////////////////////////////////////


}