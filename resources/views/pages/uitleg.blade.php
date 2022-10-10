@extends('base')
{{--@php--}}
{{--$color = '#69197c';--}}
{{--@endphp--}}
@section('content')
    <div class="container">
        <div class="row">
{{--            <div class="card" style="width: 18rem;">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title"><span>100% </span>beveelt Sign aan!</h5>--}}
{{--                    <h6 class="card-subtitle mb-2 text-muted">9.5 van de 10 Sterren</h6>--}}
{{--                    <p class="card-text">Sign is oprecht een banger</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card" style="width: 18rem;">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title"><span>100% </span>beveelt Sign aan!</h5>--}}
{{--                    <h6 class="card-subtitle mb-2 text-muted">9 van de 10 Sterren</h6>--}}
{{--                    <p class="card-text">Sign pogchamp</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card" style="width: 18rem;">--}}
{{--                <div class="card-body">--}}
{{--                    <h5 class="card-title"><span>100% </span>beveelt Sign aan!</h5>--}}
{{--                    <h6 class="card-subtitle mb-2 text-muted">7.5 van de 10 Sterren</h6>--}}
{{--                    <p class="card-text">cool</p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="main-title">UITLEG</div>
            <div class="explanation-content">
                <h2>Start uw eigen schoolproject</h2>
                <h3>Het duurt slechts enkele minuten!</h3>
                <div class="row">
                    <div class="explanation-images">
                        <div class="col d-flex justify-content-center">
                            <img src="{{asset('img/school.jpg')}}" alt="schoolfoto 1">
                        </div>
                        <div class="col d-flex justify-content-center">
                            <img src="{{asset('img/school2.jpg')}}" alt="schoolfoto 2">
                        </div>
                        <div class="col d-flex justify-content-center">
                            <img src="{{asset('img/school3.jpg')}}" alt="schoolfoto 3">
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col text-center">
                        <h3>Start de Sign Opdracht</h3>
                        <p>Beschrijf in enkele minuten wat u nodig heeft en onze studenten gaan er mee aan de slag</p>
                    </div>
                    <div class="col text-center">
                        <h3>Ontvang vele ontwerpen/signuitingen</h3>
                        <p>De studenten gaan aan de slag. U zult een aantal ontwerpen/bestanden op maat ontvangen. Geef feedback en werk samen aan uw signuiting.</p>
                    </div>
                    <div class="col text-center">
                        <h3>Kies uw nieuwe ontwerp/signuiting</h3>
                        <p>Kies een student en maak een afspraak t.b.v. uitwisseling bestanden/montage etc.</p>
                    </div>
                </div>

                <div class="explanation-button">
                    <a class="btn btn-dark darkpurple" href="{{route('exercises.create')}}" role="button">Opdracht aanmaken -></a>
                </div>
            </div>
        </div>
    </div>
@endsection

