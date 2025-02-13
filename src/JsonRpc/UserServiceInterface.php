<?php

namespace linlic\JsonRpc;

interface UserServiceInterface
{
    /**
     * 获取两个数相加的值
     */
    public function test($a, $b): int;

    /*机构设置管理员账号
    * 请求参数：orgId表示机构的id、userName表示机构的用户名
    * 返回数组。status为1表示操作成功，0表示操作失败。message表示成功或失败的消息提示
    * manage_uid表示用户的uid，为了防止四舍五入出错，这里给的是字符串类型
    */
    public function setManageUser($orgId, $userName): array;

    /*
    * 根据机构id，获取到机构下用户的数量信息
    * @param string $orgId 机构的id编号
    * @return array。比如['set_count'=>100,'has_count'=>2],其中set_count为空字符串的时候，表示还没有进行设置
    */
    public function getOrgUserCount($orgId): array;

    /*
    * 根据机构id，获取到机构下用户的数量信息
    * @param string $orgId 机构的id编号
    * @return int。如：['status'=>$status,'message'=>$message]
    */
    public function setOrgCount($orgId, $setCount): array;


    /*
    * 根据ccmtvUid的数组，获取到用户的相关信息
    * @param $ccmtvUidArr 数组类型，表示ccmtv的用户uid数组
    * @$colArr:数组类型，表示要获取到的字段值，如['user_name','true_name']。如果不填，则默认返回最基本的信息
    * @return array。如：[['user_name'=>'xxx','true_name'=>'yyy','mobphone'=>'ccx'],['user_name'=>'yx15','true_name'=>'95s','mobphone'=>'ccx']]
    */
    public function getUserByCcmtvUidArr($ccmtvUidArr, $colArr = []): array;

    /*
    * 根据uid的数组，获取到用户的相关信息
    * @param $uidArr 数组类型，表示用户的uid数组
    * @$colArr:数组类型，表示要获取到的字段值，如['user_name','true_name']。如果不填，则默认返回最基本的信息
    * @return array。如：[['user_name'=>'xxx','true_name'=>'yyy','mobphone'=>'ccx'],['user_name'=>'yx15','true_name'=>'95s','mobphone'=>'ccx']]
    */
    public function getUserByUidArr($uidArr, $colArr = []): array;

    /*
    * 根据where条件组，返回用户的uid的数组
    * $where：如： ['org_id'=>'609114673077370880','system_id'=>'610565232448225280','user_name'=>'xx','true_name'=>'yy']，目前参数org必带，如果要想查系统里所有的后台用户，org_id传-1,如果没有org_id参数，则全部返回空数组。
    * 如果数组的键值为空字符，则后台会自动过滤掉此查询条件。比如['user_name'=>'xx','true_name'=>''],等同于['user_name'=>'xx']的查询
    * user_name、true_name、mobphone字段，目前都是做的like的模糊查询。
    */
    public function getUidArrByWhere(array $where): array;


    /**
     * 根据where条件获取用户ID
     * @param $orgId
     * @param array $where [['user_name','=','asdassdf23423'],['aaa','=','111']]
     * @param $systemId
     * @return array
     */
    public function getUserIdByWhere($orgId, array $where, $systemId = null): array;


    ////////////////////////////////////【最新、最全的查找方式】////////////////////////////////////////
    /*
    * 根据where条件，查找出用户的字段信息【最新、最全的查找方式!!!】
    * $orgId：机构id，必填 如果为空 则返回空数组。
     * $systemId:系统编号
    * $ccmtvWhere：ccmtv里面的查询条件,二维数组,里面只会去查询 用户名(user_name)、真实姓名(true_name)、手机号(mobphone)、性别(sex。1表示男 2表示女 0表示保密) 这4个字段。
    * 比如：[['user_name','like','%whszyy%'],['mobphone','=','1523']] 或 使用query语句方式。
    * $where：用户其它字段的查询条件,二维数组。比如：[['ks_id','like','%158412%'],['base_id','=','15231515161114']]或 使用query语句方式。
    * $ridWhere：用户组的where查询条件,二维数组。比如：[['rid','=','15231515161114']] 或 使用query语句方式。
    * $columnArr：除了uid、用户名、真实姓名、手机号、性别之外的 额外的查询字段，一维数组。如：['ks_id','base_id']，如果传空数组，则默认返回 uid、用户名、真实姓名、手机号、性别 这几个基本字段。
    * $uidArr：用户uid的数组。比如['15231515161114','15231515161222']
    * $showFieldName：是否显示字段名称。默认不显示。如果传true，则返回字段名称。如：['uid'=>'用户uid','user_name'=>'用户名','true_name'=>'真实姓名','mobphone'=>'手机号','sex'=>'性别']
    * $show_high_manage：是否包含最高管理员的显示。如果传true，则返回的结果中会包含最高管理员的信息,传false则不包含。
    */
    public function getUserFieldByWhere(
        string $orgId,
        string $systemId,
        string|array $ccmtvWhere = null,
        string|array $where = null,
        string|array $ridWhere = null,
        array $columnArr = [],
        array $uidArr = [],
        bool $showFieldName = false,
        int $limit = 0,
        int $page = 0,
        bool $show_high_manage = false
    ): array;


    /* 此接口和上面getUserFieldByWhere是一样的。只不过此接口的$params是封在一起的。
     * RPC接口调用
     * 据where条件，查找出用户的字段信息【最新、最全的查找方式!!!】
     * @param $params ['orgId'=>$orgId,'ccmtvWhere'=>string|array,'where'=>string|array,'ridWhere'=>string|array,'columnArr'=>array,'systemIdArr'=>array,'columnArr'=>[],'uidArr'=>[],'showFieldName'=>false,'limit'=>0]
     * limit字段控制分页每页显示的条数。如果传0，则返回的数组不带分页格式，如果传非0的数值，则表示进行分页，返回的数组带分页格式。
     * @return array
     */
    public function getUserFieldByWhereRpc($params): array;
    ///////////////////////////////////【最新、最全的查找方式】////////////////////////////////////////

    /**
     * 获取用户信息(不走where条件)
     * @param string $orgId
     * @param array $uidArr
     * @param array $columnArr
     * @param string $systemId
     * @param bool $showFieldName
     * @return array
     */
    public function getUserInfo(string $orgId,array $uidArr,array $columnArr, string $systemId='',bool $showFieldName=false):array;

    /**
     * 机构开通系统 初始化角色数据
     * @param array $params
     * @return bool
     */
    public function orgSystemRoleInit(array $params): bool;

    /**
     * 机构开通系统 初始化角色与资料数据
     * @param array $params
     * @return bool
     */
    public function orgSystemRoleFormInit(array $params): bool;

    /**
     * 机构开通系统 初始化角色权限数据
     * @param array $params
     * @return bool
     */
    public function orgSystemRolePower(array $params): bool;


    /**
     * 根据机构id，系统id、获取角色选项
     * @param string $orgId 机构Id
     * @param string $systemId 系统Id
     * @param array $where where查询条件的数组示例。如：['option_label'=>["住院医师"],'option_value'=>["622116875481731073"]]
     * @param array $select 重新组装后的名称和值。如：['option_label','option_value']，那么返回的结果里的 option_label就表示角色的名称，option_value就表示角色的role_id，如果为空则默认为['option_label','option_value']
     * @param int $type 1表示返回树形结构(多层级选择时调用) 2表示返回无树状构造下的全部数组(即源格式)。默认传1即可
     * @return array 返回的数据格式，type为1的时候，返回格式如：[["option_label"=>"带教老师","option_value"=>"622116875481731073","pid"=>0,"children"=>[]]]，type为2的时候返回格式如：[["option_label"=>"带教老师","option_value"=>"622116875481731073","pid"=>0]]
     */
    public function getRoleOptions(
        string $orgId,
        string $systemId,
        array $where = [],
        array $select = [],
        int $type = 1
    ): array;

    /*
    * 根据用户id和系统id,获取用户在这个系统下的用户类型
    * 返回值：1表示是系统下的管理员  2表示普通用户
    */
    public function getUserType($uid,$systemId): int;

    /**
     * 用户管理，用户列表-功能字段列表的接口
     * @param array $params
     * @return array
     */
    public function getFields(array $params): array;

    /**
     * 用户管理，用户列表-菜单设置的接口
     * @param array $params
     * @return array
     */
    public function getConfigs(array $params): array;

    /**
     * 用户管理，用户列表-数据共享信息的接口
     * @param array $params
     * @return array
     */
    public function getShareFields(array $params): array;

    /**
     * 通过用户名获取用户id
     * @param int $org_id
     * @param array $user_name ['aaa','bbb'];
     * @return array ['aaa'=>1111,'bbb'=>2222]
     */
    public function getUserNameById(int $org_id, array $user_name): array;

    /**
     * 用户设置配置
     * @param array $params
     * @return mixed
     */
    public function userSetConf(array $params): array;

    /**
     * 获取用户头像
     * @param array $uid
     * @return array ['1000'=>'https://www.xxxx.com/1.jpg','1001'=>'https://www.xxxx.com/2.jpg']
     */
    public function getUserAvatar(array $uid):array;

    /**
     * 获取机构系统里面的用户ID集合
     * @param int $org_id
     * @param array $system_id
     * @param array $uid
     * @param string $operation
     * @return array
     */
    public function getOrgSystemUserId(int $org_id,array $system_id,array $uid=[],string $operation='in'):array;

    /**
     * data_ranges参数直接查询uids
     *
     * @param int $org_id
     * @param string $system_id
     * @param array $params
     * @param array $uidArr
     * @return array
     * @user zhaodongsheng
     * @time 2024/7/3 下午3:12
     */
    public function getDataRangeWhereUserId(
        int    $org_id,
        string $system_id,
        array  $params,
        array  $uidArr = [],
        bool $emptyParamsShowAll = false,
    ): array;

    /**
     * 获取机构下所有角色对应的表单模板id
     * @param array $params
     * @return array
     */
    public function getOrgRoleFormIds(array $params): array;

    /**
     * 下载导入模版
     *
     * @param array $params
     * @return mixed
     * @user zhaodongsheng
     * @time 2024/8/16 上午11:00
     */
    public function downloadTpl(array $params): array;

    /**
     * 消息配置
     *
     * @param array $params
     * @return array
     * @user zhaodongsheng
     * @time 2024/8/16 上午11:02
     */
    public function messageConf(): array;

    /**
     * 新增用户
     * @param array $params ["system_id","form_info"] //form_info是用户表单信息
     * @return array
     */
    public function addUser(array $params): array;

    //获取用户角色列表
    public function getUserRoloList($params):array;
}