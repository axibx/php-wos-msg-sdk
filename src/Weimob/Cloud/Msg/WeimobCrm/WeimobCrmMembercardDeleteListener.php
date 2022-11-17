<?php

namespace Com\Weimob\Cloud\Msg\WeimobCrm;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,278
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobCrmMembercardDeleteListener
{
    const topic = 'weimob_crm.membercard';
    const event = 'delete';
    const classType = DeleteMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DeleteMessage implements \JsonSerializable
{
    /**
    * 会员方案id
    * @var int
    */
    private $ membershipPlanId;

    /**
    * 自定义卡号
    * @var string
    */
    private $customCardNo;

    /**
    * 用户ID
    * @var int
    */
    private $wid;

    /**
    * 产品实例ID
    * @var int
    */
    private $productInstanceId;

    /**
    * @param int $ membershipPlanId
    */
    public function set membershipPlanId(?int $ membershipPlanId)
    {
        $this-> membershipPlanId = $ membershipPlanId;
    }

    /**
    * @return int
    */
    public function get membershipPlanId(): ?int
    {
        return $this-> membershipPlanId;
    }

    /**
    * @param string $customCardNo
    */
    public function setCustomCardNo(?string $customCardNo)
    {
        $this->customCardNo = $customCardNo;
    }

    /**
    * @return string
    */
    public function getCustomCardNo(): ?string
    {
        return $this->customCardNo;
    }

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
    * @param int $productInstanceId
    */
    public function setProductInstanceId(?int $productInstanceId)
    {
        $this->productInstanceId = $productInstanceId;
    }

    /**
    * @return int
    */
    public function getProductInstanceId(): ?int
    {
        return $this->productInstanceId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

