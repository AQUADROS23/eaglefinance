@extends('app')
@section('content')
    <div class="container">
    <h1>Update Mutual Fund</h1>
        <a href="{{url('/mutualfunds')}}" class="pull-right"><b>BACK</b></a>
    {!! Form::model($mutualfund,['method' => 'PATCH','route'=>['mutualfunds.update',$mutualfund->id]]) !!}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="form-group">
        {!! Form::label('scheme', ' Scheme:') !!}
        {!! Form::text('scheme',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('units', 'Units:') !!}
        {!! Form::text('units',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('category', 'Category:') !!}
        {!! Form::text('category',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchase_price', 'Purchase Price:') !!}
        {!! Form::text('purchase_price',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchase_date', 'Purchase Date:') !!}
        {!! Form::text('purchase_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('return_date', 'Return Date:') !!}
        {!! Form::text('return_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('return_price', 'Return Price:') !!}
        {!! Form::text('return_price',null,['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    </div>
@stop
