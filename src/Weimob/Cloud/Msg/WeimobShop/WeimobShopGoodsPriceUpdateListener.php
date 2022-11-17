<?php

namespace Com\Weimob\Cloud\Msg\WeimobShop;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,265
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobShopGoodsPriceUpdateListener
{
    const topic = 'weimob_shop.goods';
    const event = 'priceUpdate';
    const classType = PriceUpdateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class PriceUpdateMessage implements \JsonSerializable
{
    /**
    * 商品ID
    * @var int
    */
    private $goodsId;

    /**
    * SKU ID
    * @var int
    */
    private $skuId;

    /**
    * 组织结构节点
    * @var int
    */
    private $vid;

    /**
    * @param int $goodsId
    */
    public function setGoodsId(?int $goodsId)
    {
        $this->goodsId = $goodsId;
    }

    /**
    * @return int
    */
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
    }

    /**
    * @param int $skuId
    */
    public function setSkuId(?int $skuId)
    {
        $this->skuId = $skuId;
    }

    /**
    * @return int
    */
    public function getSkuId(): ?int
    {
        return $this->skuId;
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

