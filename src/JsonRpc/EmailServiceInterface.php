<?php

namespace linlic\JsonRpc;

interface EmailServiceInterface
{
    /**
     *  开通机构发送通知
     * @param $params
     *  send_name 开通机构人员姓名
     *  send_email 开通机构认邮箱号码
     *  org_name 机构名称
     *  org_domain 机构域名
     *  org_username 机构账号
     *  org_password 机构密码
     * @return array
     */
    public function passSendMail(array $params):array;

    /**
     * 重置密码 发送邮件
     * @param array $params
     * send_name 点击重置密码人员姓名
     * send_email 点击重置密码人员邮箱号码
     * org_name 机构名称
     * org_domain 机构域名
     * org_username 机构账号
     * org_password 机构密码
     * @return array
     */
    public function resetPassSendMail(array $params):array;
}