<?php

namespace Com\Weimob\Cloud\Msg\Bos;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,389
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface BosUserBeginMergeListener
{
    const topic = 'bos.user';
    const event = 'beginMerge';
    const classType = BeginMergeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class BeginMergeMessage implements \JsonSerializable
{
    /**
    * 开始合并的用户ID列表
    * @var array
    */
    private $widList;

    /**
    * 开始合并时间 毫秒
    * @var string
    */
    private $time;

    /**
    * @param array $widList
    */
    public function setWidList(?array $widList)
    {
        $this->widList = $widList;
    }

    /**
    * @return array
    */
    public function getWidList(): ?array
    {
        return $this->widList;
    }

    /**
    * @param string $time
    */
    public function setTime(?string $time)
    {
        $this->time = $time;
    }

    /**
    * @return string
    */
    public function getTime(): ?string
    {
        return $this->time;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

