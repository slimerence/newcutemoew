<div class="stripe-form">
<span class="w-100 pull-left stripe-title">{{ trans('payment.Stripe_express') }}
    <i class="fa fa-cc-amex fa-2x mr-10 pull-right" style="color: black;"></i>&nbsp;
    <i class="fa fa-cc-visa fa-2x mr-10 pull-right"></i>&nbsp;
    <i class="fa fa-cc-mastercard fa-2x mr-10 pull-right" style="color: orangered;"></i>
</span>
<div class="payment-form">
<stripe-payment
    order-form-id="payment-form"
    stripe-publishable-key="{{ $paymentMethod->getApiToken() }}"
    result-token-input-id="{{ \App\Models\Utils\PaymentTool::STRIPE_TOKEN_INPUT_ID }}"
    :current-payment-method="selectedPaymentMethod"
    :need-emit="true"
    v-on:stripe-token-success="stripeTokenSuccessHandler"
></stripe-payment>
<input type="hidden" name="{{ \App\Models\Utils\PaymentTool::STRIPE_TOKEN_INPUT_NAME }}" id="{{ \App\Models\Utils\PaymentTool::STRIPE_TOKEN_INPUT_ID }}">
</div>
</div>