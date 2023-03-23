@extends('base')

@section('content')
    <div class="container">
        <div class="main-title">{{$exercise->name}}</div>
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
        <p>Alleen opdrachtgevers kunnen opdrachten bewerken!</p>
        @else
        <form method="post" action="{{route('exercises.update', $exercise->id)}}" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-group row">
                <label style="font-weight: bold" for="name" class="col-sm-2 col-form-label">Opdracht Naam:</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name" value="{{$exercise->name}}">
                </div>
            </div>

            <div class="form-group row">
                <label style="font-weight: bold" for="description" class="col-sm-2 col-form-label">Beschrijving:</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" maxlength="255" cols="30" rows="10">{{$exercise->description}}</textarea>
                    <div id="count" class="char-amount"></div>
                </div>
            </div>

            <div class="form-group row">
                <label style="font-weight: bold" for="job_id" class="col-sm-2 col-form-label">Klus:</label>
                <div class="col-sm-10">
                    <select class="form-select" name="job_id" id="job_id">
                        <option value="1" {{$exercise->job->name =="Raambelettering" ? 'selected' : '' }}>Raambelettering</option>
                        <option value="2" {{$exercise->job->name =="Autobelettering" ? 'selected' : '' }}>Autobelettering</option>
                        <option value="3" {{$exercise->job->name =="Spandoek" ? 'selected' : '' }}>Spandoek</option>
                        <option value="4" {{$exercise->job->name =="Kledingbedrukking / Caps" ? 'selected' : '' }}>Kledingbedrukking / Caps</option>
                        <option value="5" {{$exercise->job->name =="Interieurwrap" ? 'selected' : '' }}>Interieurwrap</option>
                        <option value="6" {{$exercise->job->name =="Vloerstickers" ? 'selected' : '' }}>Vloerstickers</option>
                        <option value="7" {{$exercise->job->name =="Stickers" ? 'selected' : '' }}>Stickers</option>
                        <option value="8" {{$exercise->job->name =="Lichtbak" ? 'selected' : '' }}>Lichtbak</option>
                        <option value="9" {{$exercise->job->name =="Graveren op Hout / Acrylaat / Glazen" ? 'selected' : '' }}>Graveren op Hout / Acrylaat / Glazen</option>
                        <option value="10" {{$exercise->job->name =="Anders" ? 'selected' : '' }}>Anders</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label style="font-weight: bold" for="number" class="col-sm-2 col-form-label">Aantallen:</label>
                <div class="col-sm-10">
                    <input type="number" name="number" class="form-control" id="number" value="{{$exercise->number}}">
                </div>
            </div>

            <div class="form-group row">
                <label style="font-weight: bold" for="end_date" class="col-sm-2 col-form-label">Deadline:</label>
                <div class="col-sm-10">
                    <input type="date" name="end_date" class="form-control" id="end_date" maxlength="255" placeholder="" value="{{$exercise->end_date}}">
                </div>
            </div>

            <div class="form-group row">
                <label style="font-weight: bold" for="file" class="col-sm-2 col-form-label">Upload bestand:</label>
                <div class="col-sm-10">
                    <input type="file" name="file" class="form-control" id="file">
                </div>
            </div>

            <div class="form-group row">
                <label style="font-weight: bold" for="file" class="col-sm-2 col-form-label">mail ontvangen:</label>
                <div class="col-sm-10">
                    <input type="checkbox" name="example_checkbox" value="yes">
                </div>
            </div>

            <div class="form-group">
                <input class="mt-4 btn btn-primary" type="submit" value="Updaten">
            </div>
        </form>
    </div>
    @endhasexactroles
    <script src="{{asset('/js/char-countdown.js')}}"></script>
    <script src="{{asset('/js/max-date.js')}}"></script>
@endsection
