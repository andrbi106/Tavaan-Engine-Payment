<?php

declare(strict_types=1);

namespace Tavaan\Engine\Payment\Console;

use Tavaan\Core\Contracts\Console\CommandInterface;

/**
 * payment:list command.
 */
final class PaymentListCommand implements CommandInterface
{
    public function name(): string
    {
        return 'payment:list';
    }

    public function description(): string
    {
        return 'Run payment:list (TODO: fill description).';
    }

    public function handle(array $args = []): int
    {
        // TODO: پیاده‌سازی command مطابق مستندات.
        return 0;
    }
}
