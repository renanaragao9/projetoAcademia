@extends('layouts.main')

@section('title', 'Listagem')

@section('content')

<select id='TAG_OPTION' class='form-control'>
    @foreach ($teste as $tag)
          <option value="{{ $tag->nome_exercicio }}">{{ $tag->nome_exercicio}}</option>
     @endforeach
</select>


@endsection

