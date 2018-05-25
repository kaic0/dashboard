<div class="list-group">
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Nome</td>
                <td>Descrição</td>
                <td>Quantidade</td>
            </tr>
        </thead>
        <tbody>
            @if($products)
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                </tr>
                @endforeach
            @else
            <tr>
                <td>Nenhum produto cadastrado</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>