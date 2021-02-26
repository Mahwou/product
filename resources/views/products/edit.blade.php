@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit') }}</div>

                <div class="card-body">
                   
                    {!! Form::model($product , array('route'=>['products.update',$product->id], 'method'=>'PUT' )) !!}
                       
                         <div class="Form-group">
                             {!! Form::label('Name','Enter Name') !!}
                             {!! Form::text('names',null,['class'=>'form-control']) !!}
                         </div>
                         <div class="Form-group">
                             {!! Form::label('Phone','Set Price') !!}
                             {!! Form::text('prices',null,['class'=>'form-control']) !!}
                         </div>
                         <div class="Form-group">
                             {!! Form::label('Description','Description') !!}
                             {!! Form::text('description',null,['class'=>'form-control']) !!}
                         </div>
                         <div class="Form-group">
                             {!! Form::button('Update',['type'=>'submit','class'=>'btn btn-primary']) !!}
                         </div>
                    {!! Form::close() !!}
                </div>
            </div>
         
        </div>
    </div>
</div>
@endsection
