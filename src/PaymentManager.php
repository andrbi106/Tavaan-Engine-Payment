<?php

declare(strict_types=1);

namespace Tavaan\Engine\Payment;

use Tavaan\Core\Contracts\Config\RepositoryInterface as Config;

/**
 * PaymentManager — پیاده‌سازی اصلی موتور.
 *
 * @see \Tavaan\Engine\Payment\Contracts\PaymentManagerInterface
 */
final class PaymentManager implements Contracts\PaymentManagerInterface
{
    /**
     * @param Config $config پیکربندی موتور
     */
    public function __construct(
        private readonly Config $config,
    ) {
    }

    /**
     * {@inheritdoc}
     */
    public function purchase(/* ... */): mixed
    {
        // TODO: پیاده‌سازی purchase مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function verify(/* ... */): mixed
    {
        // TODO: پیاده‌سازی verify مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function refund(/* ... */): mixed
    {
        // TODO: پیاده‌سازی refund مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function inquire(/* ... */): mixed
    {
        // TODO: پیاده‌سازی inquire مطابق مستندات (سند §3 API).
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function gateway(/* ... */): mixed
    {
        // TODO: پیاده‌سازی gateway مطابق مستندات (سند §3 API).
        return null;
    }
}