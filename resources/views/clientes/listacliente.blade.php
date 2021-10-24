<h1>Pagina de clientes</h1>

@foreach ($clientes as $cliente)
<ul>
    <li> Nome do cliente: {{$cliente->nome}} </li>
    <li> Debito do cliente: {{$cliente->debito}} </li>
    <li><a href="clientes/edit/{{$cliente->id}}">editar cliente</a></li>

    <form action="clientes/{{$cliente->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="deletar">
    </form>
</ul>
@endforeach

