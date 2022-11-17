<?php

namespace Com\Weimob\Cloud\Msg\WeimobShopexpress;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,338
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobShopexpressRightsCreateListener
{
    const topic = 'weimob_shopexpress.rights';
    const event = 'create';
    const classType = CreateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateMessage implements \JsonSerializable
{
    /**
    * 订单编号
    * @var string
    */
    private $orderNo;

    /**
    * 售后单号
    * @var string
    */
    private $aftersaleNo;

    /**
    * @param string $orderNo
    */
    public function setOrderNo(?string $orderNo)
    {
        $this->orderNo = $orderNo;
    }

    /**
    * @return string
    */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
    * @param string $aftersaleNo
    */
    public function setAftersaleNo(?string $aftersaleNo)
    {
        $this->aftersaleNo = $aftersaleNo;
    }

    /**
    * @return string
    */
    public function getAftersaleNo(): ?string
    {
        return $this->aftersaleNo;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

