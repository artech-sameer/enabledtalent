@extends('common.layouts.master')
@push('links')
@endpush


@section('main')
hghjg
{{ auth('candidate')->user()->name }}    
@endsection