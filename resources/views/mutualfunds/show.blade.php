@extends('app')
@section('content')

<div class="container">

  <h1>Mutual Fund </h1>
    <a href="{{url('/mutualfunds')}}" class="pull-right"><b>BACK</b></a>


        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Scheme</td>
                <td><?php echo ($mutualfund['scheme']); ?></td>
            </tr>
            <tr>
                <td>Units</td>
                <td><?php echo ($mutualfund['units']); ?></td>
            </tr>
            <tr>
                <td>Category</td>
                <td><?php echo ($mutualfund['category']); ?></td>
            </tr>
            <tr>
                <td>Purchase Price </td>
                <td><?php echo ($mutualfund['purchase_price']); ?></td>
            </tr>
            <tr>
                <td>Purchase Date</td>
                <td><?php echo ($mutualfund['purchase_date']); ?></td>
            </tr>
            <tr>
                <td>Return Date </td>
                <td><?php echo ($mutualfund['return_date']); ?></td>
            </tr>
            <tr>
                <td>Return Price</td>
                <td><?php echo ($mutualfund['return_price']); ?></td>
            </tr>
            </tbody>
        </table>
    
</div>
@stop
