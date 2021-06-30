<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/resourcemanager/v3/tag_keys.proto

namespace GPBMetadata\Google\Cloud\Resourcemanager\V3;

class TagKeys
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
.google/cloud/resourcemanager/v3/tag_keys.protogoogle.cloud.resourcemanager.v3google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
TagKey
name (	B�A
parent (	B�A

short_name (	B�A�A
namespaced_name (	B�A�A
description (	B�A4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A
etag (	B�A:E�AB
*cloudresourcemanager.googleapis.com/TagKeytagKeys/{tag_key}R"`
ListTagKeysRequest
parent (	B	�A�A*
	page_size (B�A

page_token (	B�A"i
ListTagKeysResponse9
tag_keys (2\'.google.cloud.resourcemanager.v3.TagKey
next_page_token (	"T
GetTagKeyRequest@
name (	B2�A�A,
*cloudresourcemanager.googleapis.com/TagKey"p
CreateTagKeyRequest=
tag_key (2\'.google.cloud.resourcemanager.v3.TagKeyB�A
validate_only (B�A"
CreateTagKeyMetadata"�
UpdateTagKeyRequest=
tag_key (2\'.google.cloud.resourcemanager.v3.TagKeyB�A/
update_mask (2.google.protobuf.FieldMask
validate_only ("
UpdateTagKeyMetadata"�
DeleteTagKeyRequest@
name (	B2�A�A,
*cloudresourcemanager.googleapis.com/TagKey
validate_only (B�A
etag (	B�A"
DeleteTagKeyMetadata2�
TagKeys�
ListTagKeys3.google.cloud.resourcemanager.v3.ListTagKeysRequest4.google.cloud.resourcemanager.v3.ListTagKeysResponse"���/v3/tagKeys�Aparent�
	GetTagKey1.google.cloud.resourcemanager.v3.GetTagKeyRequest\'.google.cloud.resourcemanager.v3.TagKey"#���/v3/{name=tagKeys/*}�Aname�
CreateTagKey4.google.cloud.resourcemanager.v3.CreateTagKeyRequest.google.longrunning.Operation"G���"/v3/tagKeys:tag_key�Atag_key�A
TagKeyCreateTagKeyMetadata�
UpdateTagKey4.google.cloud.resourcemanager.v3.UpdateTagKeyRequest.google.longrunning.Operation"d���\'2/v3/{tag_key.name=tagKeys/*}:tag_key�Atag_key,update_mask�A
TagKeyUpdateTagKeyMetadata�
DeleteTagKey4.google.cloud.resourcemanager.v3.DeleteTagKeyRequest.google.longrunning.Operation"D���*/v3/{name=tagKeys/*}�Aname�A
TagKeyDeleteTagKeyMetadata�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy";���*"%/v3/{resource=tagKeys/*}:getIamPolicy:*�Aresource�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"B���*"%/v3/{resource=tagKeys/*}:setIamPolicy:*�Aresource,policy�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"M���0"+/v3/{resource=tagKeys/*}:testIamPermissions:*�Aresource,permissions��A#cloudresourcemanager.googleapis.com�Aghttps://www.googleapis.com/auth/cloud-platform,https://www.googleapis.com/auth/cloud-platform.read-onlyB�
#com.google.cloud.resourcemanager.v3BTagKeysProtoPZNgoogle.golang.org/genproto/googleapis/cloud/resourcemanager/v3;resourcemanager�Google.Cloud.ResourceManager.V3�Google\\Cloud\\ResourceManager\\V3bproto3'
        , true);

        static::$is_initialized = true;
    }
}

