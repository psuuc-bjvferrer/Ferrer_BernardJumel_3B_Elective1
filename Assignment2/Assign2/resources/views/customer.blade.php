@extends('layout')

@section('title', 'Customer Details')

@section('header', 'Customer Information')

@section('content')
    <div class="container my-5">
        <div class="card shadow-sm p-4">

            <form>
                <div class="mb-3">
                    <label for="id" class="form-label">Customer ID:</label>
                    <input type="text" name="id" id="id" class="form-control" value="{{ $id }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $name }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Address:</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{ $address }}" readonly>
                </div>
            </form>
        </div>
    </div>
@endsection
