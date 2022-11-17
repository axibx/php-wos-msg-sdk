<?php

namespace Com\Weimob\Cloud\Msg\WeimobCrm;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,355
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobCrmCustomerUpdateListener
{
    const topic = 'weimob_crm.customer';
    const event = 'update';
    const classType = UpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateMessage implements \JsonSerializable
{
    /**
    * 发生变更客户的编号。客户编号是用户身份的唯一标识。可以通过B端页面客户列表/客户详情找到该编号。
    * @var int
    */
    private $wid;

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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

