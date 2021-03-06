@extends('layouts.app')

@section('content')  
    <a href="{{ route('admin.products.create') }}" class="btn btn-lg btn-success">Criar Produto</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
            
        </thead>

        <tbody>
            @foreach ($products as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->name}}</td>
                    <td>R$ {{ number_format($p->price, 2, ',','.') }}</td>
                    <td>
                        <div class="btn btn-group">
                            <a href="{{ route("admin.products.edit",['product' => $p->id]) }}" class="btn sm btn-primary">Editar</a>
                            <form action="{{ route("admin.products.destroy", ['product' => $p->id]) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button  class="btn sm btn-danger">Excluir</button>
                            </form>
                        </div>
                        
                        
                    </td>
                </tr>            
            @endforeach
        
        </tbody>

    </table>

    {{$products->links()}}

@endsection
