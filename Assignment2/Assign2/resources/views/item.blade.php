@extends('layout')

@section('title', 'Item Details')

@section('header', 'Item Information')

@section('content')
    <div class="container my-5">
        <div class="card shadow-sm p-4">
            <form>
                <div class="mb-3">
                    <label for="itemNo" class="form-label">Item No:</label>
                    <input type="text" name="itemNo" id="itemNo" class="form-control" value="{{ $itemNo }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $name }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Price:</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ $price }}" readonly>
                </div>
            </form>
        </div>
    </div>
@endsection
