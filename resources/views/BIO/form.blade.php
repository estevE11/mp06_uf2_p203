@extends('../master')

@section('title', 'Form')

@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h2 class="display-4">Biorritmes</h2>
            <p class="lead">
                La naturaleza y todo lo que ella comprende: clima, estaciones, reproducción de los
                La naturaleza y todo lo que ella comprende: clima, estaciones, reproducción de los
                animales, cosechas, etc., se rigen por ciclos biológicos o ritmos. Existen diferentes
                biorritmos que afectan nuestro comportamiento en distintas maneras. Se ha
                comprobado estadísticamente que la energía física se comporta cíclicamente en
                periodos de 23 días, la energía emotiva en periodos 28 días y la energía intelectual en
                33 días. Al momento de nacer, cada ciclo comienza desde cero y empieza a subir en
                una fase positiva, durante la cual las energías y las capacidades son altas            
            </p>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Calcular els teus biorritmes
                    </div>
                    <div class="card-body">
                        <form class="form-inline justify-content-center">
                            <div class="form-group">
                                <label for="inpt-name">Nom</label>
                                <input type="text" class="form-control ml-2" id="inpt-name">
                            </div>
                            <div class="form-group ml-4">
                                <label for="inpt-datepicker">Data neixement</label>
                                <input type="date" class="form-control ml-2" id="inpt-datepicker">
                            </div>
                            <button type="submit" class="btn btn-primary ml-4">Calcular</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        ⚠ Advertencia! ⚠
                    </div>
                    <div class="card-body">
                        La gran majoria d'investigadors estima que la idea dels <b>Biorritmes</b> no té mes poder predictiu que el propi atzar i la consideren una <a href="https://ca.wikipedia.org/wiki/Pseudoci%C3%A8ncia">pseudociencia</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection