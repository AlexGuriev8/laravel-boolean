@extends('layouts.app')

@section('titolo','Student')

@section('content')
<div class="row">
        <div class="col-12">
                <div class="wrapper-container-scroll">
                    <ul class="container-scroll">
                        @foreach ($data as $key =>$student) 
                        <li class="boolean__card container-scroll__element">
                            <div class="card__top fl-container">
                                 <img  src="{{$student->img}}" alt="{{$student->nome}}"> 
                                <div>
                                    <a href="{{route('Student.show',['id'=>$student->id])}}"><h5 class="text-paragraph text-green">{{$student->nome}}</h5></a>
                                    <strong class="text-paragraph t">Assunt{{($student->genere) =='F' ? 'a':'o'}} da {{$student->azienda}}</strong>
                                </div>
                            </div>
                            <div class="card__bottom">
                                <p>{{$student->descrizione}} </p>
                                <a href="https://www.linkedin.com/in/daniela-ortenzi/" target="_blank"><img src="https://www.boolean.careers/images/socials/linkedin-2.png" alt=""></a>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
        </div>
</div>
@endsection

