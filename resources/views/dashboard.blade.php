@extends('layouts.app')

@section('content')
    <script>
        $(document).ready(function(){
            var i=1;
            $("#add_row").click(function(){
                $('#item'+i).html("<td>"+ (i+1) +"</td>" +
                    "<td><input name='quantity"+i+"' type='number' placeholder='Quantity' class='form-control input-md'> </td>" +
                    "<td><input  name='itemName"+i+"' type='text' placeholder='Item Name'  class='form-control input-md'></td>" +
                    "<td><input  name='price"+i+"' type='number' placeholder='Price'  class='form-control input-md'></td>");

                $('#tab_logic').append('<tr id="item'+(i+1)+'"></tr>');
                i++;
            });
            $("#delete_row").click(function(){
                if(i>1){
                    $("#item"+(i-1)).html('');
                    i--;
                }
            });

        });
    </script>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <table class="table table-bordered table-hover" id="tab_logic">
                    <thead>
                    <tr >
                        <th class="text-center">
                            #
                        </th>
                        <th class="text-center">
                            Quantity
                        </th>
                        <th class="text-center">
                            Item Name
                        </th>
                        <th class="text-center">
                            Price
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr id='item0'>
                        <td>
                            1
                        </td>
                        <td>
                            <input type="number" name='quantity0'  placeholder='Quantity' class="form-control"/>
                        </td>
                        <td>
                            <input type="text" name='itemName0' placeholder='Item Name' class="form-control"/>
                        </td>
                        <td>
                            <input type="number" name='price0' placeholder='Price' class="form-control"/>
                        </td>
                    </tr>
                    <tr id='item1'></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <a id="add_row" class="btn btn-default pull-left">Add Row</a>
        <a id='delete_row' class="pull-right btn btn-default">Delete Row</a>
    </div>
@endsection
