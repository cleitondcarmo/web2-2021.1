<h1>Pagina de fornecedores</h1>

@foreach ($fornecedor as $fornecedores)
<ul>
    <li> Nome do fornecedor: {{$fornecedores->nome}} </li>
    <li> Endereço do fornecedor: {{$fornecedores->endereco}} </li>
    <li> E-mail fornecedor: {{$fornecedores->email}} </li>
</ul>
@endforeach
