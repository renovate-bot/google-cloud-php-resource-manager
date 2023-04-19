<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_keys.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for deleting a TagKey.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.DeleteTagKeyRequest</code>
 */
class DeleteTagKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of a TagKey to be deleted in the format
     * `tagKeys/123`. The TagKey cannot be a parent of any existing TagValues or
     * it will not be deleted successfully.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Optional. Set as true to perform validations necessary for deletion, but
     * not actually perform the action.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $validate_only = false;
    /**
     * Optional. The etag known to the client for the expected state of the
     * TagKey. This is to be used for optimistic concurrency.
     *
     * Generated from protobuf field <code>string etag = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of a TagKey to be deleted in the format
     *           `tagKeys/123`. The TagKey cannot be a parent of any existing TagValues or
     *           it will not be deleted successfully.
     *     @type bool $validate_only
     *           Optional. Set as true to perform validations necessary for deletion, but
     *           not actually perform the action.
     *     @type string $etag
     *           Optional. The etag known to the client for the expected state of the
     *           TagKey. This is to be used for optimistic concurrency.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\TagKeys::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of a TagKey to be deleted in the format
     * `tagKeys/123`. The TagKey cannot be a parent of any existing TagValues or
     * it will not be deleted successfully.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of a TagKey to be deleted in the format
     * `tagKeys/123`. The TagKey cannot be a parent of any existing TagValues or
     * it will not be deleted successfully.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. Set as true to perform validations necessary for deletion, but
     * not actually perform the action.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. Set as true to perform validations necessary for deletion, but
     * not actually perform the action.
     *
     * Generated from protobuf field <code>bool validate_only = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * Optional. The etag known to the client for the expected state of the
     * TagKey. This is to be used for optimistic concurrency.
     *
     * Generated from protobuf field <code>string etag = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. The etag known to the client for the expected state of the
     * TagKey. This is to be used for optimistic concurrency.
     *
     * Generated from protobuf field <code>string etag = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

