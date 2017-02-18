@extends('app')
@section('content')
    <div class="container">
    <h1>Stock </h1>
        <a href="{{url('/stocks')}}" class="pull-right"><b>BACK</b></a>

        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Stock Symbol</td>
                <td><?php echo ($stock['symbol']); ?></td>
            </tr>
            <tr>
                <td>Stock Name</td>
                <td><?php echo ($stock['name']); ?></td>
            </tr>
            <tr>
                <td>Number of Shares</td>
                <td><?php echo ($stock['shares']); ?></td>
            </tr>
            <tr>
                <td>Purchase Price </td>
                <td><?php echo ($stock['purchase_price']); ?></td>
            </tr>
            <tr>
                <td>Date Purchased</td>
                <td><?php echo ($stock['purchased']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop
