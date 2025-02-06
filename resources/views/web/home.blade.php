@extends('common.layouts.master')
@push('links')
@endpush


@section('main')
       @include('common.snippets.text-with-video')
       @include('common.snippets.partners-logo')


       @include('common.snippets.how-it-work')
       @include('common.snippets.featured-job')
       @include('common.snippets.featured-category')
       @include('common.snippets.featured-companies')
       @include('common.snippets.testimonials')
       @include('common.snippets.featured-blog')
       
        
@endsection