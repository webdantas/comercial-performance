@extends('layouts.app')

@section('content')
<div id="app" class="text-white">
        <cao-usuarios-index :cao-usuarios="{{ json_encode($cao_usuarios) }}"></cao-usuarios-index>
    </div>
@endsection