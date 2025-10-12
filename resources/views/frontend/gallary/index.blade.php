@extends('layouts.frontend')
@section('title', 'Gallery')
@section('content')
<style>
    .merit_tutors_gallery_main {
    padding: 150px 0px 10px 0px;
}
</style>
            <!--================  Start (Merit Tutors Gallery) Section  ================-->
        @include('frontend.include.gallery')
        <!--================  End (Merit Tutors Gallery) Section  ================-->

        <!--================  Start (Faqs) Section  ================-->
        @include('frontend.include.faq')
        <!--================  End (Faqs) Section  ================-->

        <!--================  Start (Join our Newsletter) Section  ================-->
        @include('frontend.include.newslatter')
        <!--================  End (Join our Newsletter) Section  ================-->

@endsection