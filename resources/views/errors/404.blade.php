@extends('layouts.app')
@section('title','errore-404')
@section('content')


    <div class="container text-center py-5 ">
        <img src="{{asset('/imgs/illustration/404 Error with a cute animal-bro.svg')}}" alt="" style="max-width: 200px" class="mb-3" >
        <h3 class=" py-3 mb-3  mx-auto text-dark">{{__("التصميم هو رحلة إستكشافية، لذا أحيانا نضيع، لكن كل شيئ على مايرام")}}</h3>
        <a class="btn btn-outline-primary border-0 btn-lg" href="{{url('/')}}">{{__('رجوع إلي الرئيسية')}}</a>

    </div>

@endsection

