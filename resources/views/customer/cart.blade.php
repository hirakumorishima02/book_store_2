@extends('layout')
@section('title','カート')
@section('body')

<div class="container">
    <div class="uk-card uk-card-default uk-card-body uk-width-1">
        <div class="uk-text-large">
        <p>カートの中身</p>
        </div>
        <table class="uk-table uk-table-hover uk-table-divider">
            <thead>
                <th>購入商品</th>
                <th></th>
                <th>小計</th>
            </thead>
            <tbody>
                <tr>
                    <td><img src="/images/bussiness.jpg" width="50" height="50"></td>
                    <td>SHOE DOG</td>
                    <td>120円</td>
                    <td><button class="uk-button uk-button-danger uk-button">削除</button></td>
                </tr>
                <tr>
                    <td><img src="/images/comic.jpg" width="50" height="50"></td>
                    <td>東京グール</td>
                    <td>100円</td>
                    <td><button class="uk-button uk-button-danger uk-button">削除</button></td>
                </tr>
                <tr>
                    <td><img src="/images/others.jpg" width="50" height="50"></td>
                    <td>新型タバコの本当のリスク</td>
                    <td>200円</td>
                    <td><button class="uk-button uk-button-danger uk-button">削除</button></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="uk-text-large" style="text-align:right;">合計</td>
                    <td class="uk-text-large">420円</td>
                    <td>
                        <form action="/paymentComplete">
                                <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="{{ env('STRIPE_PUBLIC_KEY') }}"
                                    data-amount=420
                                    data-name="古本屋さん"
                                    data-label="決済をする"
                                    data-description="Online shopping by Stripe"
                                    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                    data-locale="auto"
                                    data-currency="JPY">
                                </script>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection