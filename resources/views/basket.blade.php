@extends('master')

@section('title', 'Корзина')

@section('content')
    <div class="starter-template">
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order ->products as $product)
                    <tr>
                        <td>
                            {{$product -> name}}
                        </td>
                        <td><span class="badge">{{$product -> pivot ->count}}</span>
                            <div class="btn-group form-inline">
                                <form action="{{route('basketDelete', $product)}}" method="post">

                                    <button type="submit" class="btn btn-danger" ><span
                                            class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                    @csrf

                                </form>
                                <form action="{{route('basketAdd', $product)}}" method="post">

                                <button type="submit" class="btn btn-success" ><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                    @csrf

                                </form>
                            </div>
                        </td>
                        <td>{{$product -> price}} руб</td>
                        <td>{{$product -> getPriceForCount($product -> pivot ->count)}} руб </td>
                    </tr>

                @endforeach
                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>{{$order -> calculateFullPrice()}} руб </td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="{{route('basketPlace')}}">Оформить заказ</a>
            </div>
        </div>
    </div>
@endsection
