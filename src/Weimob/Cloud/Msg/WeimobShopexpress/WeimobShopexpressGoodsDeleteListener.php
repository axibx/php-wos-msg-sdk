<?php

namespace Com\Weimob\Cloud\Msg\WeimobShopexpress;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,376
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobShopexpressGoodsDeleteListener
{
    const topic = 'weimob_shopexpress.goods';
    const event = 'delete';
    const classType = DeleteMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class DeleteMessage implements \JsonSerializable
{
    /**
    * 商品编码集合
    * @var array
    */
    private $goodsCodeList;

    /**
    * @param array $goodsCodeList
    */
    public function setGoodsCodeList(?array $goodsCodeList)
    {
        $this->goodsCodeList = $goodsCodeList;
    }

    /**
    * @return array
    */
    public function getGoodsCodeList(): ?array
    {
        return $this->goodsCodeList;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

