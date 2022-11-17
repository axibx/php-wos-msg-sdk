<?php

namespace Com\Weimob\Cloud\Msg\WeimobCrm;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,259
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobCrmCouponReceiveCouponListener
{
    const topic = 'weimob_crm.coupon';
    const event = 'receiveCoupon';
    const classType = ReceiveCouponMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ReceiveCouponMessage implements \JsonSerializable
{
    /**
    * 用户wid
    * @var int
    */
    private $wid;

    /**
    * 码值
    * @var string
    */
    private $code;

    /**
    * 优惠券类型：1-代金券；2-折扣券；3-兑换券；5-随机金额代金券；9-免运费
    * @var int
    */
    private $couponType;

    /**
    * 优惠券ID
    * @var int
    */
    private $couponTemplateId;

    /**
    * 组织架构节点ID。
    * @var int
    */
    private $vid;

    /**
    * 过期时间
    * @var int
    */
    private $expireTime;

    /**
    * 发券场景：915-直接发券；802-发券宝
    * @var int
    */
    private $subScene;

    /**
    * 发券场景ID，比如发券宝活动ID
    * @var string
    */
    private $subSceneId;

    /**
    * 发券人WID，比如导购WID
    * @var int
    */
    private $sWid;

    /**
    * 分享导购wid，如通过导购app分享链接领券
    * @var int
    */
    private $shareGuiderWid;

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

    /**
    * @param int $couponType
    */
    public function setCouponType(?int $couponType)
    {
        $this->couponType = $couponType;
    }

    /**
    * @return int
    */
    public function getCouponType(): ?int
    {
        return $this->couponType;
    }

    /**
    * @param int $couponTemplateId
    */
    public function setCouponTemplateId(?int $couponTemplateId)
    {
        $this->couponTemplateId = $couponTemplateId;
    }

    /**
    * @return int
    */
    public function getCouponTemplateId(): ?int
    {
        return $this->couponTemplateId;
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
    * @param int $expireTime
    */
    public function setExpireTime(?int $expireTime)
    {
        $this->expireTime = $expireTime;
    }

    /**
    * @return int
    */
    public function getExpireTime(): ?int
    {
        return $this->expireTime;
    }

    /**
    * @param int $subScene
    */
    public function setSubScene(?int $subScene)
    {
        $this->subScene = $subScene;
    }

    /**
    * @return int
    */
    public function getSubScene(): ?int
    {
        return $this->subScene;
    }

    /**
    * @param string $subSceneId
    */
    public function setSubSceneId(?string $subSceneId)
    {
        $this->subSceneId = $subSceneId;
    }

    /**
    * @return string
    */
    public function getSubSceneId(): ?string
    {
        return $this->subSceneId;
    }

    /**
    * @param int $sWid
    */
    public function setSWid(?int $sWid)
    {
        $this->sWid = $sWid;
    }

    /**
    * @return int
    */
    public function getSWid(): ?int
    {
        return $this->sWid;
    }

    /**
    * @param int $shareGuiderWid
    */
    public function setShareGuiderWid(?int $shareGuiderWid)
    {
        $this->shareGuiderWid = $shareGuiderWid;
    }

    /**
    * @return int
    */
    public function getShareGuiderWid(): ?int
    {
        return $this->shareGuiderWid;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

