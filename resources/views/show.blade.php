@extends('layouts.app')

@section('titolo','Student')
    
@section('content')
<div class="row">
        <div class="col-12">
                <div class="wrapper-container-scroll">
                    <ul class="container-scroll center">
                        <li class="boolean__card container-scroll__element">
                            <div class="card__top">
                                <img  src="{{$student['img']}}" alt="{{$student['nome']}}">
                                <div>
                                    <h5 class="text-paragraph text-green">{{$student['nome']}}</h5>
                                    <strong class="text-paragraph">Assunt{{($student['genere']=='F') ? 'a':'o'}} da {{$student['azienda']}}</strong>
                                </div>
                            </div>
                            <div class="card__bottom">
                                <p>{{$student['descrizione']}} </p>
                                <a href="https://www.linkedin.com/in/daniela-ortenzi/" target="_blank"><img src="https://www.boolean.careers/images/socials/linkedin-2.png" alt=""></a>
                            </div>
                        </li>
                    </ul>
                </div>
        </div>
</div>
@endsection