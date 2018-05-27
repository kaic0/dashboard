<div class="row justify-content-center">
    <div class="col-md-12">
        <form method="POST" action="{{ route('estoque') }}">
            @csrf

            <div class="form-group row">
                <div class="col-md-6">
                    <label for="name" class="col-form-label text-md-right">{{ __('Nome') }}</label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="col-md-6">
                    <label for="description" class="col-form-label text-md-right">{{ __('Detalhes') }}</label>
                    <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-2">
                    <label for="quantity" class="col-form-label text-md-right">{{ __('Quantidade') }}</label>
                    <input id="quantity" type="number" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" name="quantity" value="{{ old('quantity') }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('quantity') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="category" class="col-form-label text-md-right">{{ __('Categoria') }}</label>
                    <select id="category" type="category" class="form-control selectpicker" data-live-search="true" name="category_id" value="{{ old('category') }}">
                        @foreach($productCategories as $categorie)
                        <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        @endforeach
                    </select>

                    @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('quantity') }}</strong>
                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group row mb-0 justify-content-center">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Salvar') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>