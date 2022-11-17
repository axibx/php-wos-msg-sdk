<?php

namespace Com\Weimob\Cloud\Spi\Common;

class PaasRequest implements \JsonSerializable
{
    /**
     * 商业操作系统ID
     * @var Integer
     */
    private $bosId;

    /**
     * 全局唯一的扩展点
     * @var String
     */
    private $actionKey;

    /**
     * 功能集ID
     * @var Integer
     */
    private $functionId;

    /**
     * 组织结构节点ID
     * @var Integer
     */
    private $vid;

    /**
     * 	组织结构节点类型
     * @var Integer
     */
    private $vType;

    private $params;

    /**
     * @return int
     */
    public function getBosId(): int
    {
        return $this->bosId;
    }

    /**
     * @param int $bosId
     */
    public function setBosId(int $bosId): void
    {
        $this->bosId = $bosId;
    }

    /**
     * @return String
     */
    public function getActionKey(): string
    {
        return $this->actionKey;
    }

    /**
     * @param String $actionKey
     */
    public function setActionKey(string $actionKey): void
    {
        $this->actionKey = $actionKey;
    }

    /**
     * @return int
     */
    public function getFunctionId(): int
    {
        return $this->functionId;
    }

    /**
     * @param int $functionId
     */
    public function setFunctionId(int $functionId): void
    {
        $this->functionId = $functionId;
    }

    /**
     * @return int
     */
    public function getVid(): int
    {
        return $this->vid;
    }

    /**
     * @param int $vid
     */
    public function setVid(int $vid): void
    {
        $this->vid = $vid;
    }

    /**
     * @return int
     */
    public function getVType(): int
    {
        return $this->vType;
    }

    /**
     * @param int $vType
     */
    public function setVType(int $vType): void
    {
        $this->vType = $vType;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param mixed $params
     */
    public function setParams($params): void
    {
        $this->params = $params;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}