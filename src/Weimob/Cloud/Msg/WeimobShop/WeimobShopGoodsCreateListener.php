<?php

namespace Com\Weimob\Cloud\Msg\WeimobShop;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,325
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobShopGoodsCreateListener
{
    const topic = 'weimob_shop.goods';
    const event = 'create';
    const classType = CreateMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CreateMessage implements \JsonSerializable
{
    /**
    * 组织结构节点
    * @var string
    */
    private $vid;

    /**
    * 新生成的商品id
    * @var string
    */
    private $goodsId;

    /**
    * @param string $vid
    */
    public function setVid(?string $vid)
    {
        $this->vid = $vid;
    }

    /**
    * @return string
    */
    public function getVid(): ?string
    {
        return $this->vid;
    }

    /**
    * @param string $goodsId
    */
    public function setGoodsId(?string $goodsId)
    {
        $this->goodsId = $goodsId;
    }

    /**
    * @return string
    */
    public function getGoodsId(): ?string
    {
        return $this->goodsId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

