<?php

namespace Com\Weimob\Cloud\Msg\WeimobShop;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,216
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobShopOrderOrderStatusUpdateListener
{
    const topic = 'weimob_shop.order';
    const event = 'orderStatusUpdate';
    const classType = OrderStatusUpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class OrderStatusUpdateMessage implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

