<?php

namespace Tiendanube\NFe\Models;

/**
 * The Service Consumer
 * That classe must be implement for your invoice RPS Model
 */
abstract class Consumer
{
    /**
     * CPF/CNPJ (not required)
     * @var string
     */
    public $federalTaxNumber = 0;

    /**
     * Tomador CCM (not required)
     * @var string
     */
    public $taxPayerRegister;

    /**
     * C = Corporate (CNPJ), F = Personal (CPF)
     * @var string
     */
    public $type = null;

    /**
     * @var string
     */
    public $name;

    /**
     * R = Rua (not required)
     * @var string
     */
    public $addressType;

    /**
     * Address Street (required only with complete address)
     * @var string
     */
    public $address;

    /**
     * Address Number (required only with complete address)
     * @var string
     */
    public $addressNumber;

    /**
     * Address Complement (not required)
     * @var string
     */
    public $complement;

    /**
     * Address District (not required)
     * @var string
     */
    public $district;

    /**
     * Address City IBGE Code (required only with complete address)
     * @var string
     */
    public $city;

    /**
     * Address State UF (required only with complete address)
     * @var string
     */
    public $state;

    /**
     * Address Zipcode (required only with complete address)
     * @var string
     */
    public $zip;

    /**
     * Customer email (required)
     * @var string
     */
    public $email;

    /**
     * Customer email (not required)
     * @var string
     */
    public $email2;
}
