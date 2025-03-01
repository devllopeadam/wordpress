<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/services/brand_suggestion_service.proto

namespace Google\Ads\GoogleAds\V18\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information of brand suggestion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.services.BrandSuggestion</code>
 */
class BrandSuggestion extends \Google\Protobuf\Internal\Message
{
    /**
     * Id for the brand. It would be CKG MID for verified/global scoped brands.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Name of the brand.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Urls which uniquely identify the brand.
     *
     * Generated from protobuf field <code>repeated string urls = 3;</code>
     */
    private $urls;
    /**
     * Current state of the brand.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.BrandStateEnum.BrandState state = 4;</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Id for the brand. It would be CKG MID for verified/global scoped brands.
     *     @type string $name
     *           Name of the brand.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $urls
     *           Urls which uniquely identify the brand.
     *     @type int $state
     *           Current state of the brand.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Services\BrandSuggestionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Id for the brand. It would be CKG MID for verified/global scoped brands.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Id for the brand. It would be CKG MID for verified/global scoped brands.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Name of the brand.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the brand.
     *
     * Generated from protobuf field <code>string name = 2;</code>
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
     * Urls which uniquely identify the brand.
     *
     * Generated from protobuf field <code>repeated string urls = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrls()
    {
        return $this->urls;
    }

    /**
     * Urls which uniquely identify the brand.
     *
     * Generated from protobuf field <code>repeated string urls = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrls($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->urls = $arr;

        return $this;
    }

    /**
     * Current state of the brand.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.BrandStateEnum.BrandState state = 4;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Current state of the brand.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.enums.BrandStateEnum.BrandState state = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\BrandStateEnum\BrandState::class);
        $this->state = $var;

        return $this;
    }

}

