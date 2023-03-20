@extends('base')

@section('content')
    <div class="container">
        <div class="main-title">OPDRACHT AANMAKEN</div>
        <hr>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @hasexactroles('user')
        <p>Alleen opdrachtgevers kunnen opdrachten aanmaken!</p>
        @else
        <form method="post" action="{{route('exercises.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label style="font-weight: bold" for="name" class="col-sm-2 col-form-label">Opdracht naam:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name" maxlength="255" placeholder="vul hier de opdracht naam in" value="{{ old('name') }}">
                </div>
            </div>

            <div class="form-group row">
                <label style="font-weight: bold" for="description" class="col-sm-2 col-form-label">Beschrijving:</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" maxlength="255" placeholder="vul hier de beschrijving in" cols="30" rows="10">{{ old('description') }}</textarea>
                    <div id="count" class="char-amount">255</div>
                </div>
            </div>

            <div class="form-group row">
                <label style="font-weight: bold" for="job_id" class="col-sm-2 col-form-label">Klus:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="job_id" id="job_id">
                        <option value="0">Kies...</option>
                        <option value="1" @if(old('job_id') == '1')selected @endif>Raambelettering</option>
                        <option value="2" @if(old('job_id') == '2')selected @endif>Autobelettering</option>
                        <option value="3" @if(old('job_id') == '3')selected @endif>Spandoek</option>
                        <option value="4" @if(old('job_id') == '4')selected @endif>Kledingbedrukking / Caps</option>
                        <option value="5" @if(old('job_id') == '5')selected @endif>Interieurwrap</option>
                        <option value="6" @if(old('job_id') == '6')selected @endif>Vloerstickers</option>
                        <option value="7" @if(old('job_id') == '7')selected @endif>Stickers</option>
                        <option value="8" @if(old('job_id') == '8')selected @endif>Lichtbak</option>
                        <option value="9" @if(old('job_id') == '9')selected @endif>Graveren op Hout / Acrylaat / Glazen</option>
                        <option value="10"@if(old('job_id') == '10')selected @endif>Anders</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label style="font-weight: bold" for="number" class="col-sm-2 col-form-label">Aantallen:</label>
                <div class="col-sm-10">
                    <input type="number" name="number" class="form-control" id="number" placeholder="vul hier het aantal in" value="{{ old('number') }}">
                </div>
            </div>

            <div class="form-group row">
                <label style="font-weight: bold" for="end_date" class="col-sm-2 col-form-label">Deadline:</label>
                <div class="col-sm-10">
                    <input type="date" name="end_date" class="form-control" id="end_date" maxlength="255" placeholder="" value="{{ old('end_date') }}">
                </div>
            </div>

            <div class="form-group row">
                <label style="font-weight: bold" for="file" class="col-sm-2 col-form-label">Upload bestand:</label>
                <div class="col-sm-10">
                    <!-- nog niet werkend door beveiliging van bestanden door browser -->
                    <input type="file" name="file" class="form-control" id="file" value="{{ old('file') }}">
                    <!-- nog niet werkend door beveiliging van bestanden door browser-->
                </div>
            </div>

            <div class="form-group">
                <input class="mt-4 btn btn-primary" type="submit" value="Opslaan">
            </div>
        </form>
    </div>
    @endhasexactroles
<script src="{{asset('/js/char-countdown.js')}}"></script>
<script src="{{asset('/js/max-date.js')}}"></script>
@endsection
