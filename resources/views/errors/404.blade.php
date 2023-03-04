@extends('layouts.app')
@section('title','error-404')
@section('content')


    <div class="container text-center pt-25 mt-50 mb-50">
        <img src="assets/img/svg/404-Error-with-a-cute-animal-bro.svg" alt="" class="mb-3 img-fluid w-50" >
        <h3 class=" py-3 mb-3  mx-auto text-dark">{{__("التصميم هو رحلة إستكشافية، لذا أحيانا نضيع، لكن كل شيئ على مايرام")}}</h3>
        <a class="btn btn-outline-primary border-1 btn-lg" href="{{url('/')}}">{{__('رجوع إلي الرئيسية')}}</a>
    </div>

@endsection

