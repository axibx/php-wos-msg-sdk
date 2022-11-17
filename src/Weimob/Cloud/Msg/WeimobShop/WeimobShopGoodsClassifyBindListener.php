<?php

namespace Com\Weimob\Cloud\Msg\WeimobShop;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,399
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobShopGoodsClassifyBindListener
{
    const topic = 'weimob_shop.goods.classify';
    const event = 'bind';
    const classType = BindMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class BindMessage implements \JsonSerializable
{
    /**
    * 商品ID
    * @var int
    */
    private $goodsId;

    /**
    * 组织架构节点ID
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

