@extends('base')

@section('content')

    <div class="container">
        <div class="main-title">OPDRACHTEN</div>
        <form id="report-page-form-form" action="{{route('filter-opdracht')}}">
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Categorie:</label>
            <select name="category" class="form-select" id="inputGroupSelect01">
                <option selected value="0">Kies...</option>
                <option value="1">Raambelettering</option>
                <option value="2">Autobelettering</option>
                <option value="3">Spandoek</option>
                <option value="4">Kledingbedrukking / Caps</option>
                <option value="5">Interieurwrap</option>
                <option value="6">Vloerstickers</option>
                <option value="7">Stickers</option>
                <option value="8">Lichtbak</option>
                <option value="9">Graveren op Hout / Acrylaat / Glazen</option>
                <option value="9">Anders</option>
            </select>
            <button style="padding: 0px 25px"  type="submit" class="btn btn-secondary navy">Filter</button>
        </div>
        </form>

        @hasanyrole('opdrachtgever|admin')
        <a style="margin-bottom: 20px;" href="{{route('exercises.create')}}" class="btn btn-primary">Nieuwe opdracht aanmaken</a>
        @endhasanyrole
        <div class="exercise-table">
            <table class="table sortable table-striped">
                <thead>
                <tr>
                    <th scope="col">Naam</th>
                    <th scope="col">Klus</th>
                    <th style="min-width: 210px;" scope="col">Aantal inzendingen</th>
                    <th style="min-width: 150px" scope="col">Eind Datum</th>
                    @hasanyrole('opdrachtgever|admin')
                    <th style="min-width: 150px" scope="col">Inzendingen</th>
                    @endhasanyrole
                </tr>
                </thead>
                <tbody>
                @forelse($exercises as $exercise)

                    @if( $exercise->end_date > Date('Y-m-d') )
                    <tr>
                        <td><span><a href="{{ route('exercises.show', $exercise->id) }}">{{ $exercise->name }}</span></a><p>{{ $exercise->description }}</p></td>
                        <td>{{ $exercise->job->name }}</td>
                        <td>{{ count($exercise->participations) }}</td>
                        <td>{{ \Carbon\Carbon::createFromTimestamp(strtotime($exercise->end_date))->format('d-m-Y')}}</td>
                        @hasanyrole('opdrachtgever|admin')
                        @if ($exercise->entries >= 1)  
                        <td style="color:green">124</td>
                        @else
                        <td style="color:red">geen inzendingen</td>
                        @endif
                        @endhasanyrole
                    </tr>
                    @endif
                @empty
                    <p>Er zijn geen opdrachten in deze categorie.</p>
                    
                    <style>thead{display: none;}</style>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script src="{{asset('/js/sorttable.js')}}"></script>
@endsection
