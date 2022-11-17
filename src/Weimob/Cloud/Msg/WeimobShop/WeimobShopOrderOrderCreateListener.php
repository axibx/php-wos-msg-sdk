<?php

namespace Com\Weimob\Cloud\Msg\WeimobShop;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,217
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobShopOrderOrderCreateListener
{
    const topic = 'weimob_shop.order';
    const event = 'orderCreate';
    const classType = OrderCreateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class OrderCreateMessage implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

