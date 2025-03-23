@extends('layouts.sidenav-layout')

@section('content')

@include('components.customers.customer-create')
@include('components.customers.customer-update')
@include('components.customers.customer-delete')
@include('components.customers.customer-list')

@endsection