@extends ('layouts.main')

@section('content')
    <h1>CARS</h1>
    <div>
        <ul>
            @foreach ($cars as $car)
            <li>
                <h3>Marca: {{ $car->marca }}</h3>  
                <h3>Modello: {{ $car->modello }}</h3>  
                <h3>Targa: {{ $car->targa }}</h3>                    
            </li>    
            @endforeach
        </ul>
    </div>
@endsection