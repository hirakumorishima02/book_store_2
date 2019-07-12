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
                <?php $total = 0 ?>
                @foreach($carts as $cart)
                <tr>
                    <td><img src="{{$cart->options->photo_path}}" width="50" height="50"></td>
                    <td>{{$cart->name}}</td>
                    <td>{{$cart->price}}円</td>
                    <td><a href="/cart/remove/{{$cart->rowId}}"><button class="uk-button uk-button-danger uk-button">削除</button></a></td>
                </tr>
                <?php $total +=  $cart->price ?>
                @endforeach
                <tr>
                    <td></td>
                    <td class="uk-text-large" style="text-align:right;">合計（消費税込み）</td>
                    <td class="uk-text-large">{{$total * 1.08}}円</td>
                    <td>
                        <form action="/paymentComplete">
                                <script
                                    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                    data-key="{{ env('STRIPE_PUBLIC_KEY') }}"
                                    data-amount={{$total * 1.08}}
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
                <tr>
                    <td></td>
                    <td></td>
                    <td><td><a href="/cart/reset"><button class="uk-button uk-button-danger uk-button">カート全削除</button></a></td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection