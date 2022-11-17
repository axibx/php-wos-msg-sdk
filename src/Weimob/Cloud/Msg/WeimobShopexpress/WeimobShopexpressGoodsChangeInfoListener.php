<?php

namespace Com\Weimob\Cloud\Msg\WeimobShopexpress;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,336
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobShopexpressGoodsChangeInfoListener
{
    const topic = 'weimob_shopexpress.goods';
    const event = 'changeInfo';
    const classType = ChangeInfoMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class ChangeInfoMessage implements \JsonSerializable
{
    /**
    * 商品编码
    * @var string
    */
    private $goodsCode;

    /**
    * @param string $goodsCode
    */
    public function setGoodsCode(?string $goodsCode)
    {
        $this->goodsCode = $goodsCode;
    }

    /**
    * @return string
    */
    public function getGoodsCode(): ?string
    {
        return $this->goodsCode;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

