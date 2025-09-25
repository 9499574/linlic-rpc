<?php

namespace linlic\JsonRpc;

interface HnKsCompletionNoticeServiceInterface
{
    /**
     * 华南消息通知-功能字段
     * @param array $params
     * @return array
     */
    public function getFields(array $params):array;

}