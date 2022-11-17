<?php

namespace Com\Weimob\Cloud\Spi\Common;

/**
 * SPI响应参数
 * author bokang.li
 */
class PaasResponseCode implements \JsonSerializable
{
    /**
     * 	请求返回的状态码
     * @var String
     */
    private $errcode;

    /**
     * 	请求返回的状态码
     * @var String
     */
    private $errmsg;

    /**
     * @return String
     */
    public function getErrcode(): string
    {
        return $this->errcode;
    }

    /**
     * @param String $errcode
     */
    public function setErrcode(string $errcode): void
    {
        $this->errcode = $errcode;
    }

    /**
     * @return String
     */
    public function getErrmsg(): string
    {
        return $this->errmsg;
    }

    /**
     * @param String $errmsg
     */
    public function setErrmsg(string $errmsg): void
    {
        $this->errmsg = $errmsg;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}