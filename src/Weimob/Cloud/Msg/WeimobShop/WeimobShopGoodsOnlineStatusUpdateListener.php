<?php

namespace Com\Weimob\Cloud\Msg\WeimobShop;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,261
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobShopGoodsOnlineStatusUpdateListener
{
    const topic = 'weimob_shop.goods';
    const event = 'onlineStatusUpdate';
    const classType = OnlineStatusUpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class OnlineStatusUpdateMessage implements \JsonSerializable
{
    /**
    * 是否上下架
    * @var bool
    */
    private $isOnline;

    /**
    * 商品ID列表
    * @var array
    */
    private $goodsIdList;

    /**
    * 组织结构节点
    * @var int
    */
    private $vid;

    /**
    * @param bool $isOnline
    */
    public function setIsOnline(?bool $isOnline)
    {
        $this->isOnline = $isOnline;
    }

    /**
    * @return bool
    */
    public function getIsOnline(): ?bool
    {
        return $this->isOnline;
    }

    /**
    * @param array $goodsIdList
    */
    public function setGoodsIdList(?array $goodsIdList)
    {
        $this->goodsIdList = $goodsIdList;
    }

    /**
    * @return array
    */
    public function getGoodsIdList(): ?array
    {
        return $this->goodsIdList;
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


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

