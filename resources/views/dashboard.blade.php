@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Choose your food</div>
        <div class="panel-body">

            <div class="container">
                <div class="row form-group">
                    <div class="col-sm-4 nopadding text-center">
                        Quantity
                    </div>

                    <div class="col-sm-4 nopadding text-center">
                        Item Name
                    </div>

                    <div class="col-sm-4 nopadding text-center">
                        Price
                    </div>
                </div>
            </div>

            <div class="container">
                <form method="post" action="/post-user-orders">
                    {{ csrf_field() }}
                    <div class="container" id="itemsContainer">
                        <div class="row form-group remove-row1">
                            <div class="col-sm-4 nopadding">
                                <div class="form-group">
                                    <input type="number" min="0" class="form-control" name="quantities[]" value="" placeholder="Enter Quantity" required>
                                </div>
                            </div>

                            <div class="col-sm-4 nopadding">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="names[]" value="" placeholder="Enter Name" required>
                                </div>
                            </div>

                            <div class="col-sm-4 nopadding">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="number" min="0" class="form-control" name="prices[]" value="" placeholder="Enter Price" required>
                                        <div class="input-group-btn">
                                            <button class="btn btn-success add-button" id="button1" type="button"  onclick="add_row();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>

        </div>
        <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field :)</small></div>
    </div>
@endsection


@section('scripts')
    <script>
        var row = 1;
        function add_row() {

            row++;
            var itemsContainer = document.getElementById('itemsContainer');
            var rowDiv = document.createElement("div");

//           .attr("onclick","remove-row"+(row-1)).removeClass("add-row");

            $( ".add-button" ).first().removeClass("btn-success");
            $( ".add-button" ).first().attr("onclick","remove_row("+(row-1)+")")
            $( ".add-button" ).first().find('span').removeClass("glyphicon-plus").attr("class", "glyphicon-minus");
            $( ".add-button" ).first().attr("class","btn btn-danger");

            rowDiv.setAttribute("class", "row form-group remove-row"+row);

            rowDiv.innerHTML = '<div class="col-sm-4 nopadding">' +
                                    '<div class="form-group"> ' +
                                        '<input type="number"  min="0" class="form-control" name="quantities[]" placeholder="Enter Quantity" required>' +
                                    '</div>' +
                                '</div>' +
                                    '<div class="col-sm-4 nopadding">' +
                                        '<div class="form-group">' +
                                             '<input type="text" class="form-control" name="names[]" placeholder="Enter Name" required>' +
                                        '</div>' +
                                    '</div>' +
                                '<div class="col-sm-4 nopadding">' +
                                    '<div class="form-group">' +
                                        '<div class="input-group">' +
                                            '<input type="number" min="0" class="form-control" name="prices[]" placeholder="Enter Price" required>' +
                                            '<div class="input-group-btn"> ' +
                                                '<button class="btn btn-success add-button" type="button" onclick="add_row()"> ' +
                                                    '<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> ' +
                                                '</button>' +
                                            '</div>' +
                                        '</div>' +
                                    '</div>' +
                                '</div>';

            itemsContainer.appendChild(rowDiv);
        }

        function remove_row(rid) {
            $('.remove-row'+rid).remove();
        }
    </script>
@endsection