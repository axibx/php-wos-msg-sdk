<?php

namespace Com\Weimob\Cloud\Msg\WeimobCrm;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,346
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobCrmCouponLockCouponListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'lockCoupon';
    const classType = LockCouponMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class LockCouponMessage implements \JsonSerializable
{
    /**
    * 用户id
    * @var int
    */
    private $wid;

    /**
    * 优惠券码
    * @var string
    */
    private $code;

    /**
    * @param int $wid
    */
    public function setWid(?int $wid)
    {
        $this->wid = $wid;
    }

    /**
    * @return int
    */
    public function getWid(): ?int
    {
        return $this->wid;
    }

    /**
    * @param string $code
    */
    public function setCode(?string $code)
    {
        $this->code = $code;
    }

    /**
    * @return string
    */
    public function getCode(): ?string
    {
        return $this->code;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

