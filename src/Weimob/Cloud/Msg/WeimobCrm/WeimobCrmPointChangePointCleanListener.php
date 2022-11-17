<?php

namespace Com\Weimob\Cloud\Msg\WeimobCrm;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,412
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobCrmPointChangePointCleanListener
{
    const topic = 'weimob_crm.point.change';
    const event = 'pointClean';
    const classType = PointCleanMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PointCleanMessage implements \JsonSerializable
{
    /**
    * 业务类型：108:积分清零
    * @var string
    */
    private $bizType;

    /**
    * 积分业务交易ID
    * @var int
    */
    private $bizUniqueId;

    /**
    * 商业操作系统ID
    * @var int
    */
    private $bosId;

    /**
    * 变更积分
    * @var int
    */
    private $changPoint;

    /**
    * 积分方案ID
    * @var int
    */
    private $pointPlanId;

    /**
    * 产品ID
    * @var int
    */
    private $productId;

    /**
    * 产品实例ID
    * @var int
    */
    private $productInstanceId;

    /**
    * 来源产品ID
    * @var int
    */
    private $sourceProductId;

    /**
    * 总积分
    * @var int
    */
    private $totalPoint;

    /**
    * 交易类型：2 :积分清零
    * @var int
    */
    private $transType;

    /**
    * vid
    * @var int
    */
    private $vid;

    /**
    * 微盟用户id
    * @var int
    */
    private $wid;

    /**
    * @param string $bizType
    */
    public function setBizType(?string $bizType)
    {
        $this->bizType = $bizType;
    }

    /**
    * @return string
    */
    public function getBizType(): ?string
    {
        return $this->bizType;
    }

    /**
    * @param int $bizUniqueId
    */
    public function setBizUniqueId(?int $bizUniqueId)
    {
        $this->bizUniqueId = $bizUniqueId;
    }

    /**
    * @return int
    */
    public function getBizUniqueId(): ?int
    {
        return $this->bizUniqueId;
    }

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
    * @param int $changPoint
    */
    public function setChangPoint(?int $changPoint)
    {
        $this->changPoint = $changPoint;
    }

    /**
    * @return int
    */
    public function getChangPoint(): ?int
    {
        return $this->changPoint;
    }

    /**
    * @param int $pointPlanId
    */
    public function setPointPlanId(?int $pointPlanId)
    {
        $this->pointPlanId = $pointPlanId;
    }

    /**
    * @return int
    */
    public function getPointPlanId(): ?int
    {
        return $this->pointPlanId;
    }

    /**
    * @param int $productId
    */
    public function setProductId(?int $productId)
    {
        $this->productId = $productId;
    }

    /**
    * @return int
    */
    public function getProductId(): ?int
    {
        return $this->productId;
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
    * @param int $totalPoint
    */
    public function setTotalPoint(?int $totalPoint)
    {
        $this->totalPoint = $totalPoint;
    }

    /**
    * @return int
    */
    public function getTotalPoint(): ?int
    {
        return $this->totalPoint;
    }

    /**
    * @param int $transType
    */
    public function setTransType(?int $transType)
    {
        $this->transType = $transType;
    }

    /**
    * @return int
    */
    public function getTransType(): ?int
    {
        return $this->transType;
    }

    /**
    * @param int $vid
    */
    public function setVid(?int $vid)
    {
        $this->vid = $vid;
    }

    /**
    * @return int
    */
    public function getVid(): ?int
    {
        return $this->vid;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

