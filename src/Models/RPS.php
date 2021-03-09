<?php

namespace Tiendanube\NFe\Models;

use DateTime;

/**
 * The Provisional Service Receipt which will be allowed to turn into an invoice
 * That classe must be implement for your invoice RPS Model
 */
abstract class RPS
{
    /**
     * Provider CCM
     * Taxpayer Register (for service providers who pay ISS for local town/city hall)
     * @var string
     */
    public $taxPayerRegisterProvider;

    /**
     * RPS serie, max lenght 5
     * @var string
     */
    public $serie;

    /**
     * RPS sequence serie number, max lenght 12
     * @var string
     */
    public $number;

    /**
     * RPS ­  Provisional Service Receipt
     * RPS-M ­Provisional Service Receipt from Conjugated Invoice (Mixed)
     * RPS-C Cupom
     * @var string
     */
    public $type = 'RPS';

    /**
     * @var DateTime
     */
    public $issueDate;

    /**
     * N ­ Normal
     * C ­ Canceled
     * E ­ Misplaced
     * @var string
     */
    public $status = 'N';

    /**
     * T - Taxation in the municipality of São Paulo
     * F - Taxation outside the municipality of São Paulo
     * I ­- Free (No need to pay tax)
     * J - ISS Suspended by Judicial Decision
     */
    public $taxation = 'I';

    /**
     * Value ​​for the service provided
     * @var float
     */
    public $servicesValue = 0;

    /**
     * Decrease value
     * @var float
     */
    public $deductionsValue = 0;

    /**
     * Service code provided
     * @var string
     */
    public $serviceCode;

    /**
     * Tax rate
     * @var float
     */
    public $servicesTaxRate;

    /**
     * ISS withheld (Service Tax)
     * @var boolean
     */
    public $withheldTax = false;

    /**
     * Invoice descriptions
     * @var string
     */
    public $breakdown;

    /**
     * Consumer
     * @var Consumer
     */
    public $contractorRPS;
}