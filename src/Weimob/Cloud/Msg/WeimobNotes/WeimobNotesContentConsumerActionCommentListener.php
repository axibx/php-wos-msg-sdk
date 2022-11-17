<?php

namespace Com\Weimob\Cloud\Msg\WeimobNotes;

use Com\Weimob\Cloud\Msg\Common\WeimobMessage;
use Com\Weimob\Cloud\Msg\Common\WeimobMessageAck;

/**
 * @id 1,287
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface WeimobNotesContentConsumerActionCommentListener
{
    const topic = 'weimob_notes.content.consumer.action';
    const event = 'comment';
    const classType = CommentMessage::class;
    const specType = 'wos';

    public function onMessage(WeimobMessage $message) : WeimobMessageAck;
}

class CommentMessage implements \JsonSerializable
{
    /**
    * 用户ID
    * @var int
    */
    private $wid;

    /**
    * 业务ID标识（如：内容文章ID）
    * @var int
    */
    private $contentId;

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
    * @param int $contentId
    */
    public function setContentId(?int $contentId)
    {
        $this->contentId = $contentId;
    }

    /**
    * @return int
    */
    public function getContentId(): ?int
    {
        return $this->contentId;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

