<?php

namespace Com\Weimob\Cloud\Msg\WeimobGuide;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,309
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobGuideGuiderChangeGuiderStatusChangeListener
{
    const topic = 'weimob_guide.guider.change';
    const event = 'guiderStatusChange';
    const classType = GuiderStatusChangeMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class GuiderStatusChangeMessage implements \JsonSerializable
{
    /**
    * 商业操作系统id
    * @var int
    */
    private $bosId;

    /**
    * 导购id，用于管理导购员的生命周期，同一个导购wid在同一个门店多次入离职，guiderId不同；同一个导购员，在不同的门店，guiderId不同
    * @var string
    */
    private $guiderId;

    /**
    * 导购状态: 0-停用，1-启用
    * @var int
    */
    private $isUsed;

    /**
    * 变更时间,格式：yyyy-MM-dd HH:mm:ss
    * @var string
    */
    private $updateTime;

    /**
    * 导购wid，来源于导购导购接口返回
    * @var int
    */
    private $guiderWid;

    /**
    * 导购归属门店vid，来源于组织节点ID
    * @var int
    */
    private $guiderVid;

    /**
    * 导购vid类型
    * @var int
    */
    private $guiderVidType;

    /**
    * 来源产品ID
    * @var int
    */
    private $sourceProductId;

    /**
    * 来源产品实例ID
    * @var int
    */
    private $sourceProductInstanceId;

    /**
    * @param int $bosId
    */
    public function setBosId(?int $bosId)
    {
        $this->bosId = $bosId;
    }

    /**
    * @return int
    */
    public function getBosId(): ?int
    {
        return $this->bosId;
    }

    /**
    * @param string $guiderId
    */
    public function setGuiderId(?string $guiderId)
    {
        $this->guiderId = $guiderId;
    }

    /**
    * @return string
    */
    public function getGuiderId(): ?string
    {
        return $this->guiderId;
    }

    /**
    * @param int $isUsed
    */
    public function setIsUsed(?int $isUsed)
    {
        $this->isUsed = $isUsed;
    }

    /**
    * @return int
    */
    public function getIsUsed(): ?int
    {
        return $this->isUsed;
    }

    /**
    * @param string $updateTime
    */
    public function setUpdateTime(?string $updateTime)
    {
        $this->updateTime = $updateTime;
    }

    /**
    * @return string
    */
    public function getUpdateTime(): ?string
    {
        return $this->updateTime;
    }

    /**
    * @param int $guiderWid
    */
    public function setGuiderWid(?int $guiderWid)
    {
        $this->guiderWid = $guiderWid;
    }

    /**
    * @return int
    */
    public function getGuiderWid(): ?int
    {
        return $this->guiderWid;
    }

    /**
    * @param int $guiderVid
    */
    public function setGuiderVid(?int $guiderVid)
    {
        $this->guiderVid = $guiderVid;
    }

    /**
    * @return int
    */
    public function getGuiderVid(): ?int
    {
        return $this->guiderVid;
    }

    /**
    * @param int $guiderVidType
    */
    public function setGuiderVidType(?int $guiderVidType)
    {
        $this->guiderVidType = $guiderVidType;
    }

    /**
    * @return int
    */
    public function getGuiderVidType(): ?int
    {
        return $this->guiderVidType;
    }

    /**
    * @param int $sourceProductId
    */
    public function setSourceProductId(?int $sourceProductId)
    {
        $this->sourceProductId = $sourceProductId;
    }

    /**
    * @return int
    */
    public function getSourceProductId(): ?int
    {
        return $this->sourceProductId;
    }

    /**
    * @param int $sourceProductInstanceId
    */
    public function setSourceProductInstanceId(?int $sourceProductInstanceId)
    {
        $this->sourceProductInstanceId = $sourceProductInstanceId;
    }

    /**
    * @return int
    */
    public function getSourceProductInstanceId(): ?int
    {
        return $this->sourceProductInstanceId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

