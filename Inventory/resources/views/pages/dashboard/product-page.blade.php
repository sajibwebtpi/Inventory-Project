@extends('layouts.sidenav-layout')

@section('content')

@include('components.products.product-create')
@include('components.products.product-update')
@include('components.products.product-delete')
@include('components.products.product-list')

@endsection