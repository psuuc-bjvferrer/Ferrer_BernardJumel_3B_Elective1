@extends('layout')

@section('title', 'Order Details')

@section('header', 'Order Information')

@section('content')
    <div class="container my-5">
        <div class="card shadow-sm p-4">
           
            <form>
                <div class="mb-3">
                    <label for="customerId" class="form-label">Customer ID:</label>
                    <input type="text" name="customerId" id="customerId" class="form-control" value="{{ $customerId }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="customerName" class="form-label">Customer Name:</label>
                    <input type="text" name="customerName" id="customerName" class="form-control" value="{{ $customerName }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="orderNo" class="form-label">Order No:</label>
                    <input type="text" name="orderNo" id="orderNo" class="form-control" value="{{ $orderNo }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date:</label>
                    <input type="date" name="date" id="date" class="form-control" value="{{ $date }}">
                </div>
            </form>
        </div>
    </div>
@endsection
