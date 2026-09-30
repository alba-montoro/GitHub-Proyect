@extends('index') //heredo
<!-- @directiva de blade, para indicar que se hereda de un documento -->


@section('title')
    GitHub Project
@endsection

@section('content')
<!-- @directiva para rellenar un espacio creado con yield -->
<div class="container d-flex align-items-center flex-column">
    <h1>About</h1>
</div>
@endsection