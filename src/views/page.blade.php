@extends("layout.$template")

    <!-- #### Area Content ###-->
    @section('contenu')
        @foreach($tabSection AS $sect)
            @php($var = 'data' . ucfirst($sect['vue']))
            @php($$var = $data[$sect['vue']] ?? [])
            @php($donnees = $sect['items'])
            @include("sections.$sect[vue]", compact($var, 'donnees', 'page'))
        @endforeach
    @endsection