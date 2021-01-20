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
        <!-- BIKES WITH VUE -->
        <section id='app'>
            <h2>BIKES</h2>
            <ul>
                <li v-for='bike in bikes'>
                    <h3>Modello: @{{ bike.modello }}</h3>
                    <h3>Marca: @{{ bike.marca }}</h3>
                    <h3>Targa: @{{ bike.targa }}</h3>
                </li>
            </ul>
        </section>
    </div>
@endsection