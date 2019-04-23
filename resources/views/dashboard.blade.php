@extends('layouts.app')

@section('content')

<table id="tableClient" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Metros cuadrados</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
             <tr>
                <td>{{ $client->name }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->howMany }}</td>
            </tr>
            @endforeach
                
            
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Metros cuadrados</th>
            </tr>
        </tfoot>
    </table>


@stop

@section('scripts')
<script>
$(document).ready(function() {
    var table = $('#tableClient').DataTable( {
        lengthChange: false,
        // language: {
        //     "url": "////cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        // },
        buttons: [ 'excel', 'pdf'],
    } );
 
    table.buttons().container()
        .appendTo( '#tableClient_wrapper .col-sm-6:eq(0)' );
} );
</script>
@stop