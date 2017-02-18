
@extends('app')

@section('content')
    <div class="container">
    <h1>Mutual Fund</h1>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="{{url('/mutualfunds/create')}}" class="btn btn-success">Create Mutual Fund</a>
    <hr>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Cust No</th>
            <th>Cust Name</th>
            <th>Scheme</th>
            <th>Units</th>
            <th>Category</th>
            <th>Purchase Price</th>
            <th>Purchase Date</th>
            <th>Return Date</th>
            <th>Return Price</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($mutualfunds as $mutualfund)
            <tr>
                <td>{{ $mutualfund->customer->cust_number }}</td>
                <td>{{ $mutualfund->customer->name }}</td>
                <td>{{ $mutualfund->scheme }}</td>
                <td>{{ $mutualfund->units }}</td>
                <td>{{ $mutualfund->category }}</td>
                <td>{{ $mutualfund->purchase_price }}</td>
                <td>{{ $mutualfund->purchase_date }}</td>
                <td>{{ $mutualfund->return_date }}</td>
                <td>{{ $mutualfund->return_price }}</td>
                <td><a href="{{url('mutualfunds',$mutualfund->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('mutualfunds.edit',$mutualfund->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['mutualfunds.destroy', $mutualfund->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
    </div>
@endsection
