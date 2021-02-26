@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products') }}</div>

                <div class="card-body">
                   
                    {!! Form::open(array('route'=>'products.store')) !!}
                       
                         <div class="Form-group">
                             {!! Form::label('Name','Enter Name') !!}
                             {!! Form::text('names',null,['class'=>'form-control']) !!}
                         </div>
                         <div class="Form-group">
                             {!! Form::label('Price','Set Price') !!}
                             {!! Form::text('prices',null,['class'=>'form-control']) !!}
                         </div>
                         <div class="Form-group">
                             {!! Form::label('Description','Description') !!}
                             {!! Form::text('description',null,['class'=>'form-control']) !!}
                         </div>
                         <div class="Form-group">
                             {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
                         </div>
                    {!! Form::close() !!}
                </div>
            </div>
         
        </div>
    </div>
</div>
@endsection
