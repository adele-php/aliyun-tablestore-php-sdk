<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: table_store.proto

namespace Aliyun\OTS\ProtoBuffer\Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>aliyun.OTS.ProtoBuffer.Protocol.Stream</code>
 */
class Stream extends \Aliyun\OTS\ProtoBuffer\Protocol\Message
{
    /**
     * Generated from protobuf field <code>required string stream_id = 1;</code>
     */
    private $stream_id = '';
    private $has_stream_id = false;
    /**
     * Generated from protobuf field <code>required string table_name = 2;</code>
     */
    private $table_name = '';
    private $has_table_name = false;
    /**
     * Generated from protobuf field <code>required int64 creation_time = 3;</code>
     */
    private $creation_time = 0;
    private $has_creation_time = false;

    public function __construct() {
        \GPBMetadata\TableStore::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>required string stream_id = 1;</code>
     * @return string
     */
    public function getStreamId()
    {
        return $this->stream_id;
    }

    /**
     * Generated from protobuf field <code>required string stream_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStreamId($var)
    {
        GPBUtil::checkString($var, True);
        $this->stream_id = $var;
        $this->has_stream_id = true;

        return $this;
    }

    public function hasStreamId()
    {
        return $this->has_stream_id;
    }

    /**
     * Generated from protobuf field <code>required string table_name = 2;</code>
     * @return string
     */
    public function getTableName()
    {
        return $this->table_name;
    }

    /**
     * Generated from protobuf field <code>required string table_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTableName($var)
    {
        GPBUtil::checkString($var, True);
        $this->table_name = $var;
        $this->has_table_name = true;

        return $this;
    }

    public function hasTableName()
    {
        return $this->has_table_name;
    }

    /**
     * Generated from protobuf field <code>required int64 creation_time = 3;</code>
     * @return int|string
     */
    public function getCreationTime()
    {
        return $this->creation_time;
    }

    /**
     * Generated from protobuf field <code>required int64 creation_time = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationTime($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_time = $var;
        $this->has_creation_time = true;

        return $this;
    }

    public function hasCreationTime()
    {
        return $this->has_creation_time;
    }

}
