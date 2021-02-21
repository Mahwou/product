@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(Session::has('message'))
            <div class="alert alert-succes"> {{ Session::get('message') }} </div>
        @endif
            <div class="card">
                
                <div class="card-header">{{ __('Products') }}
                
                <!-- <div class="col-md-4 text-right">
                    <form action={{ route("product_search") }} method="get" role="search">
                       <div class="input-group">
                          <input type="search" name="search" class="form-control" placeholder="Search...">
                          <span class="input-group-prepend">
                            <button type="submit" class="btn btn-primary">Search
                            </button>
                          </span>
                       </div>
                    </form>
                </div> -->

                </div>

                <div class="card-body">
                <table class="table">
                <thead></thead>
                <tr>
                      <th> Names </th>
                      <th> Prices </th>
                      <th> Action </th>
                </tr>

                @if(!empty($products)) 
                    @foreach($products as $product)
                    <tr>
                  <td>{{link_to_route('products.show',$product->names,[$product->id]) }}</td>
                  <td>{{link_to_route('products.show',$product->prices,[$product->id])}}</td>
                  <td>
                  {!! Form::open(array('route'=>['products.destroy',$product->id], 'method'=>'DELETE')) !!}

                  {{ link_to_route('products.edit','Edit',[$product->id],['class'=>'btn btn-primary'])}}
                      |
                        {!! Form::button('Delete',['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                      {!! Form::close() !!}
                </tr> 
                   @endforeach 
                @endif
                </table>
                
               
                </div>
            </div>
            {{ link_to_route('products.create','Add new Product',null,['class'=>'btn btn-success'])}}
        </div>
    </div>
</div>
@endsection
