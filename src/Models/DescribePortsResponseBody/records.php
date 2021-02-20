<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Avds\V20171129\Models\DescribePortsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $service;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $fingerprint;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $IP;
    protected $_name = [
        'service'     => 'Service',
        'index'       => 'Index',
        'fingerprint' => 'Fingerprint',
        'version'     => 'Version',
        'product'     => 'Product',
        'protocol'    => 'Protocol',
        'updatedAt'   => 'UpdatedAt',
        'port'        => 'Port',
        'IP'          => 'IP',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->fingerprint) {
            $res['Fingerprint'] = $this->fingerprint;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['Fingerprint'])) {
            $model->fingerprint = $map['Fingerprint'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }

        return $model;
    }
}
