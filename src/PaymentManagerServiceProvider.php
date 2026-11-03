<?php

declare(strict_types=1);

namespace Tavaan\Engine\Payment;

use Tavaan\Core\Contracts\Container\ContainerInterface;
use Tavaan\Core\Contracts\Config\RepositoryInterface as ConfigRepository;
use Tavaan\Engine\Payment\Contracts\PaymentManagerInterface;
use Tavaan\Core\Provider\ServiceProvider;

/**
 * PaymentManagerServiceProvider — ثبت سرویس‌های موتور PaymentManager.
 */
final class PaymentManagerServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function register(): void
    {
        $this->app->singleton(PaymentManagerInterface::class, function (ContainerInterface $app) {
            /** @var ConfigRepository $config */
            $config = $app->get(ConfigRepository::class);
            return new PaymentManager($config);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function boot(): void
    {
        // ثبت Facade
        $this->app->instance('payment', $this->app->get(PaymentManagerInterface::class));

        // ثبت commandها
        $this->commands[] = \Tavaan\Engine\Payment\Console\Payment_listCommand::class;

    }

    /**
     * {@inheritdoc}
     */
    public function provides(): array
    {
        return [
            PaymentManagerInterface::class,
            'payment',
        ];
    }
}