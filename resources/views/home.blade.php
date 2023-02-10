@extends('layouts.app')

@section('main-content')
<main>
    <div class="container mt-5">
        <div class="row">
            @foreach ($trains as $train)
            <div class="col-4 mb-4">     
                <div class="card p-3">
                    <h2 class="title text-center">{{ $train->company_name }}</h2>
                    <p>Stazione di partenza: <span>{{ $train->departure_station }}</span></p>
                    <p>Stazione di arrivo: <span>{{ $train->arrival_station }}</span></p>
                    <p>Partenza il: <span>{{ $train->departure_time}}</span></p>
                    <p>Arrivo il: <span>{{ $train->arrival_time }}</span></p>
                    <p>Codice treno: <span>{{ $train->train_number }}</span></p>
                    <p>Nr. cabine: <span>{{ $train->number_of_cabs }}</span></p>
                    <p>In orario: <span>{{ ($train->in_time) ? 'Sì' : 'No' }}</span></p>
                    <p>Cancellato: <span>{{ ($train->cancelled) ? 'Sì' : 'No' }}</span></p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
        
    

</main>
@endsection