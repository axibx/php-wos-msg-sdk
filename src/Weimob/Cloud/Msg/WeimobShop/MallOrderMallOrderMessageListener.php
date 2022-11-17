<?php

namespace Com\Weimob\Cloud\Msg\WeimobShop;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,186
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface MallOrderMallOrderMessageListener
{
    const topic = 'mall_order';
    const event = 'mall_order_message';
    const classType = MallOrderMessageMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class MallOrderMessageMessage implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

