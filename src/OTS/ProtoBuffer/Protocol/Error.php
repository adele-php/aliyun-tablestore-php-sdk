<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.Error</code>
 */
class Error extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>required string code = 1;</code>
     */
    private $code = '';
    private $has_code = false;
    /**
     * Generated from protobuf field <code>optional string message = 2;</code>
     */
    private $message = '';
    private $has_message = false;

    public function __construct() {
        \GPBMetadata\TableStore::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>required string code = 1;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>required string code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;
        $this->has_code = true;

        return $this;
    }

    public function hasCode()
    {
        return $this->has_code;
    }

    /**
     * Generated from protobuf field <code>optional string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>optional string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;
        $this->has_message = true;

        return $this;
    }

    public function hasMessage()
    {
        return $this->has_message;
    }

}
