@extends('layouts.dashboard')

@section('content')
    <h3 class="mt-2"> Ciao {{ $user->name }}. Questa è la tua pagina di backoffice. </h3>
    @if ($userInfo)
        <p>Indirizzo: {{ $userInfo->address }}</p>
        <p>Telefono: {{ $userInfo->phone }}</p>
    @endif
@endsection