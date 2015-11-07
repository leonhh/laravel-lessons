@extends('root')

@section('title', 'Calculator')

@section('content')
    <form action="{{url('calculator')}}" method="POST">
        <input type="text" name="num1" value="">
        <select name="calc_method">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="num2" value="">
        <button type="submit" name="button">Bereken</button>
    </form>
@endsection
