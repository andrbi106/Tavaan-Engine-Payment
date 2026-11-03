# Tavaan Engine — Payment

> **پرداخت** — موتور Payment در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.payment` |
| نام | `Payment` |
| عنوان فارسی | پرداخت |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Payment` |
| نوع | `engine` |
| Facade | `Payment` (accessor: `payment`) |

## توضیحات

M7 — انتزاع درگاه‌های پرداخت با GatewayInterface مشترک (core/Contracts/Payment): زرین‌پال/آیدی‌پی/پی‌پینگ/سامان/به‌پرداخت/پارسیان/سداد/ملی/Stripe (خودنوشته، بدون SDK) + کیف پول داخلی (WalletStoreInterface). 🔒 امنیت: verify فقط از API درگاه با مبلغ محلی Transaction (ضد amount tampering)، عدم اعتماد به Status بازگشتی، idempotency_key یکتا (ضد replay/double payment)، PAN mask، امضای HMAC برای IPN، SSRF guard موتور http-client. routeهای /payment/callback و /payment/notify/{gateway}. درگاه سفارشی فقط با extend() یا config class (AC-PAY-10).

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Payment\Contracts\GatewayInterface`

## خطاها (Exceptions)

- `Tavaan\Engine\Payment\Exceptions\GatewayException`
- `Tavaan\Engine\Payment\Exceptions\PaymentException`
- `Tavaan\Engine\Payment\Exceptions\PaymentNotFoundException`
- `Tavaan\Engine\Payment\Exceptions\SignatureMismatchException`

## Facadeها

- `Tavaan\Engine\Payment\Facades\Payment`

## کلاس‌های اصلی

- `src/CallbackOutcome.php`
- `src/Console/PaymentListCommand.php`
- `src/Events/PaymentFailed.php`
- `src/Events/PaymentInitiated.php`
- `src/Events/PaymentRefunded.php`
- `src/Events/PaymentSucceeded.php`
- `src/Gateways/AbstractHttpGateway.php`
- `src/Gateways/BehpardakhtGateway.php`
- `src/Gateways/ConfigWalletStore.php`
- `src/Gateways/IdPayGateway.php`
- `src/Gateways/MelliGateway.php`
- `src/Gateways/ParsianGateway.php`
- `src/Gateways/PayPingGateway.php`
- `src/Gateways/SadadGateway.php`
- `src/Gateways/SamanGateway.php`
- `src/Gateways/StripeGateway.php`
- `src/Gateways/WalletGateway.php`
- `src/Gateways/WalletStoreInterface.php`
- `src/Gateways/ZarinPalGateway.php`
- `src/PaymentResolver.php`
- ... و 9 فایل دیگر

## Service Providerها

- `Tavaan\Engine\Payment\PaymentManagerServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`

**موتورهای اختیاری:**

- `http-client`
- `database`
- `migration`
- `orm`
- `event`
- `crypt`
- `http`
- `console`

## جداول دیتابیس

- `tvn_payment_transactions`

## دستورات CLI

- `payment:list`

## پیکربندی

- فایل پیکربندی: `config/payment.php`
- کلید: `payment`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Payment.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Payment`** (این مخزن) | موتور Payment |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
