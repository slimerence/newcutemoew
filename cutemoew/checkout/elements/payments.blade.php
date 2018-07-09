<div class="box">
    <div class="payment-method-title">
        <h4>{{ trans('payment.Title') }}</h4>
        <p class="has-text-grey mt-10">{{ trans('payment.Subtitle') }}</p>
    </div>
    @foreach($paymentMethods as $key=>$paymentMethod)
        <?php $idString = \App\Models\Utils\PaymentTool::GetMethodIdStringByMethodId($paymentMethod->method_id); ?>
        <div class="card payment-method-item {{ $key==0 ? '':null }}" :class="{'bg-special':'<?php echo $idString; ?>'==selectedPaymentMethod}"
             v-on:click="switchCurrentPaymentMethod('{{ $idString }}')"
             id="{{ $idString }}">
            @include(_get_frontend_theme_path('checkout.elements.payment.'.\App\Models\Utils\PaymentTool::GetTemplateNameByMethodId($paymentMethod->method_id)))
        </div>
    @endforeach
</div>
