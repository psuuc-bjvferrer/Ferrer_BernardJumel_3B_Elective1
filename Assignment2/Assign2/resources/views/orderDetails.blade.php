@extends('layout')

@section('title', 'Order Details')

@section('header', 'Order Details Information')

@section('content')
    <div class="container my-5">
        <div class="card shadow-sm p-4">
            
            <form>
                <div class="mb-3">
                    <label for="transNo" class="form-label">Transaction No:</label>
                    <input type="text" name="transNo" id="transNo" class="form-control" value="{{ $transNo }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="orderNo" class="form-label">Order No:</label>
                    <input type="text" name="orderNo" id="orderNo" class="form-control" value="{{ $orderNo }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="itemId" class="form-label">Item ID:</label>
                    <input type="text" name="itemId" id="itemId" class="form-control" value="{{ $itemId }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Item Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $name }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ $price }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label">Quantity:</label>
                    <input type="text" name="qty" id="qty" class="form-control" value="{{ $qty }}" readonly>
                </div>
            </form>
        </div>
    </div>
@endsection
