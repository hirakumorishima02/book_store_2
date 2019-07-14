@extends('layout')
@section('title','カート')
@section('body')

<div class="container">
    <div class="uk-card uk-card-default uk-card-body uk-width-1">
        <div class="uk-text-large">
        <p>カート</p>
        </div>
        @if(isset($userInfo))
            @if(isset($carts))
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
                                {{ csrf_field() }}
                                    <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="pk_test_RbguENgpWfqVTAfQGLbXOffR00YAdmOg7Q"
                                        data-amount="{{$total * 1.08}}"
                                        data-name="古本屋さん"
                                        data-label="決済をする"
                                        data-description="Online course about integrating Stripe"
                                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                        data-locale="auto"
                                        data-currency="JPY">
                                    </script>
                                    <input type="hidden" name="amount" value="{{$total * 1.08}}">
                                    @foreach($carts as $cart)
                                    <input type="hidden" name="id[]" value="{{$cart->id}}">
                                    <input type="hidden" name="row_id[]" value="{{$cart->rowId}}">
                                    @endforeach
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
            @else
            カートの中身はありません。
            @endif
        @else
        先に<a href="/editAccount">ユーザー情報の登録</a>をしてください。
        @endif
    </div>
</div>

@endsection