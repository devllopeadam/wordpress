<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V18\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The shopping recommendation to add an attribute to offers that are demoted
 * because it is missing.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.resources.Recommendation.ShoppingOfferAttributeRecommendation</code>
 */
class ShoppingOfferAttributeRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The details of the Merchant Center account.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.Recommendation.MerchantInfo merchant = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $merchant = null;
    /**
     * Output only. The campaign feed label.
     *
     * Generated from protobuf field <code>string feed_label = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $feed_label = '';
    /**
     * Output only. The number of online, servable offers.
     *
     * Generated from protobuf field <code>int64 offers_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $offers_count = 0;
    /**
     * Output only. The number of online, servable offers that are demoted for
     * missing attributes. Visit the Merchant Center for more details.
     *
     * Generated from protobuf field <code>int64 demoted_offers_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $demoted_offers_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V18\Resources\Recommendation\MerchantInfo $merchant
     *           Output only. The details of the Merchant Center account.
     *     @type string $feed_label
     *           Output only. The campaign feed label.
     *     @type int|string $offers_count
     *           Output only. The number of online, servable offers.
     *     @type int|string $demoted_offers_count
     *           Output only. The number of online, servable offers that are demoted for
     *           missing attributes. Visit the Merchant Center for more details.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The details of the Merchant Center account.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.Recommendation.MerchantInfo merchant = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V18\Resources\Recommendation\MerchantInfo|null
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    public function hasMerchant()
    {
        return isset($this->merchant);
    }

    public function clearMerchant()
    {
        unset($this->merchant);
    }

    /**
     * Output only. The details of the Merchant Center account.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.Recommendation.MerchantInfo merchant = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V18\Resources\Recommendation\MerchantInfo $var
     * @return $this
     */
    public function setMerchant($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Resources\Recommendation\MerchantInfo::class);
        $this->merchant = $var;

        return $this;
    }

    /**
     * Output only. The campaign feed label.
     *
     * Generated from protobuf field <code>string feed_label = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFeedLabel()
    {
        return $this->feed_label;
    }

    /**
     * Output only. The campaign feed label.
     *
     * Generated from protobuf field <code>string feed_label = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFeedLabel($var)
    {
        GPBUtil::checkString($var, True);
        $this->feed_label = $var;

        return $this;
    }

    /**
     * Output only. The number of online, servable offers.
     *
     * Generated from protobuf field <code>int64 offers_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getOffersCount()
    {
        return $this->offers_count;
    }

    /**
     * Output only. The number of online, servable offers.
     *
     * Generated from protobuf field <code>int64 offers_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffersCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->offers_count = $var;

        return $this;
    }

    /**
     * Output only. The number of online, servable offers that are demoted for
     * missing attributes. Visit the Merchant Center for more details.
     *
     * Generated from protobuf field <code>int64 demoted_offers_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getDemotedOffersCount()
    {
        return $this->demoted_offers_count;
    }

    /**
     * Output only. The number of online, servable offers that are demoted for
     * missing attributes. Visit the Merchant Center for more details.
     *
     * Generated from protobuf field <code>int64 demoted_offers_count = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setDemotedOffersCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->demoted_offers_count = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ShoppingOfferAttributeRecommendation::class, \Google\Ads\GoogleAds\V18\Resources\Recommendation_ShoppingOfferAttributeRecommendation::class);

