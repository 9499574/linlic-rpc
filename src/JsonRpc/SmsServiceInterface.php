<?php

namespace linlic\JsonRpc;

interface SmsServiceInterface
{
    /**
     * 忘记密码
     * @param string $phone
     * @param int $code
     * @return bool
     */
    public function forgotPassword(string $phone, int $code):bool;

    /**
     * 发送短信
     *
     * @param string $phone 手机号
     * @param array $params 短信模版参数
     * @param string $templateCodeKey 模板key nacos配置中心message-center-sms.TemplateCodeList
     * @return bool
     * @user zhaodongsheng
     * @time 2024/7/8 下午1:57
     */
    public function send(string $phone, array $params, string $templateCodeKey): bool;
}