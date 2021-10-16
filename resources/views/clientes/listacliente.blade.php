<h1>Pagina de clientes</h1>

@foreach ($clientes as $cliente)
<ul>
    <li> Nome do cliente: {{$cliente->nome}} </li>
    <li> Debito do cliente: {{$cliente->debito}} </li>
    <li> Endereço do cliente: {{$cliente->endereco}} </li>
</ul>
@endforeach

