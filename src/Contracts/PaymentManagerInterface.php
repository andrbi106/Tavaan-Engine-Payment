<?php

declare(strict_types=1);

namespace Tavaan\Engine\Payment\Contracts;

/**
 * قرارداد PaymentManager.
 *
 * @see \Tavaan\Engine\Payment\PaymentManager
 * @api 1.0
 */
interface PaymentManagerInterface
{
    /**
     * متد purchase.
     *
     * @return mixed
     */
    public function purchase(/* ... */): mixed;

    /**
     * متد verify.
     *
     * @return mixed
     */
    public function verify(/* ... */): mixed;

    /**
     * متد refund.
     *
     * @return mixed
     */
    public function refund(/* ... */): mixed;

    /**
     * متد inquire.
     *
     * @return mixed
     */
    public function inquire(/* ... */): mixed;

    /**
     * متد gateway.
     *
     * @return mixed
     */
    public function gateway(/* ... */): mixed;
}