<option value="Inválido">Selecione o exercício</option>
@foreach ($exercicios as $exercicio)
      <option value="{{ $exercicio->id_exercicio }}">{{ $exercicio->nome_exercicio}}</option>
@endforeach
