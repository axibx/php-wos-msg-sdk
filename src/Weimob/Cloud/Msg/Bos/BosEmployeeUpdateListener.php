<?php

namespace Com\Weimob\Cloud\Msg\Bos;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,386
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface BosEmployeeUpdateListener
{
    const topic = 'bos.employee';
    const event = 'update';
    const classType = UpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class UpdateMessage implements \JsonSerializable
{
    /**
    * 账户id
    * @var int
    */
    private $wid;

    /**
    * 操作类型，1新建、2删除、3变更
    * @var int
    */
    private $operateType;

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
    * @param int $operateType
    */
    public function setOperateType(?int $operateType)
    {
        $this->operateType = $operateType;
    }

    /**
    * @return int
    */
    public function getOperateType(): ?int
    {
        return $this->operateType;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

