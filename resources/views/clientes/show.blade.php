<h1>Pagina de consulta de clientes</h1>

@foreach ($clientes as $cliente)
<ul>
    <li> Nome do cliente: {{$cliente->nome}} </li>
    <li> Debito do cliente: {{$cliente->debito}} </li>
</ul>
@endforeach
