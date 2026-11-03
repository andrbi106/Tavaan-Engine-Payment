<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Payment Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور payment — همهٔ کلیدهای مستندشده در `docs/03-engines/payment.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/payment.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('PAYMENT_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('PAYMENT_PREFIX', 'payment:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('PAYMENT_LOG_CHANNEL', 'payment'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Payment',
        'accessor' => 'payment',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];