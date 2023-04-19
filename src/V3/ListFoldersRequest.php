<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/folders.proto

namespace Google\Cloud\ResourceManager\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The ListFolders request message.
 *
 * Generated from protobuf message <code>google.cloud.resourcemanager.v3.ListFoldersRequest</code>
 */
class ListFoldersRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the parent resource whose folders are being listed.
     * Only children of this parent resource are listed; descendants are not
     * listed.
     * If the parent is a folder, use the value `folders/{folder_id}`. If the
     * parent is an organization, use the value `organizations/{org_id}`.
     * Access to this method is controlled by checking the
     * `resourcemanager.folders.list` permission on the `parent`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Optional. The maximum number of folders to return in the response. The
     * server can return fewer folders than requested. If unspecified, server
     * picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A pagination token returned from a previous call to `ListFolders`
     * that indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Optional. Controls whether folders in the
     * [DELETE_REQUESTED][google.cloud.resourcemanager.v3.Folder.State.DELETE_REQUESTED]
     * state should be returned. Defaults to false.
     *
     * Generated from protobuf field <code>bool show_deleted = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $show_deleted = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The name of the parent resource whose folders are being listed.
     *           Only children of this parent resource are listed; descendants are not
     *           listed.
     *           If the parent is a folder, use the value `folders/{folder_id}`. If the
     *           parent is an organization, use the value `organizations/{org_id}`.
     *           Access to this method is controlled by checking the
     *           `resourcemanager.folders.list` permission on the `parent`.
     *     @type int $page_size
     *           Optional. The maximum number of folders to return in the response. The
     *           server can return fewer folders than requested. If unspecified, server
     *           picks an appropriate default.
     *     @type string $page_token
     *           Optional. A pagination token returned from a previous call to `ListFolders`
     *           that indicates where this listing should continue from.
     *     @type bool $show_deleted
     *           Optional. Controls whether folders in the
     *           [DELETE_REQUESTED][google.cloud.resourcemanager.v3.Folder.State.DELETE_REQUESTED]
     *           state should be returned. Defaults to false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Resourcemanager\V3\Folders::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the parent resource whose folders are being listed.
     * Only children of this parent resource are listed; descendants are not
     * listed.
     * If the parent is a folder, use the value `folders/{folder_id}`. If the
     * parent is an organization, use the value `organizations/{org_id}`.
     * Access to this method is controlled by checking the
     * `resourcemanager.folders.list` permission on the `parent`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The name of the parent resource whose folders are being listed.
     * Only children of this parent resource are listed; descendants are not
     * listed.
     * If the parent is a folder, use the value `folders/{folder_id}`. If the
     * parent is an organization, use the value `organizations/{org_id}`.
     * Access to this method is controlled by checking the
     * `resourcemanager.folders.list` permission on the `parent`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The maximum number of folders to return in the response. The
     * server can return fewer folders than requested. If unspecified, server
     * picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. The maximum number of folders to return in the response. The
     * server can return fewer folders than requested. If unspecified, server
     * picks an appropriate default.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A pagination token returned from a previous call to `ListFolders`
     * that indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A pagination token returned from a previous call to `ListFolders`
     * that indicates where this listing should continue from.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. Controls whether folders in the
     * [DELETE_REQUESTED][google.cloud.resourcemanager.v3.Folder.State.DELETE_REQUESTED]
     * state should be returned. Defaults to false.
     *
     * Generated from protobuf field <code>bool show_deleted = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getShowDeleted()
    {
        return $this->show_deleted;
    }

    /**
     * Optional. Controls whether folders in the
     * [DELETE_REQUESTED][google.cloud.resourcemanager.v3.Folder.State.DELETE_REQUESTED]
     * state should be returned. Defaults to false.
     *
     * Generated from protobuf field <code>bool show_deleted = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setShowDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->show_deleted = $var;

        return $this;
    }

}

