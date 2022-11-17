<?php

namespace Com\Weimob\Cloud\Msg\WeimobShop;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,195
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface MallRightsMallRightsMessageListener
{
    const topic = 'mall_rights';
    const event = 'mall_rights_message';
    const classType = MallRightsMessageMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class MallRightsMessageMessage implements \JsonSerializable
{
    private $obj;

    /**
    * @param MallRightsMallRightsMessageObj $obj
    */
    public function setObj(?MallRightsMallRightsMessageObj $obj)
    {
        $this->obj = $obj;
    }

    /**
    * @return MallRightsMallRightsMessageObj
    */
    public function getObj(): ?MallRightsMallRightsMessageObj
    {
        return $this->obj;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class MallRightsMallRightsMessageObj implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

