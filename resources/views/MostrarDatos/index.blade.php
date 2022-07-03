<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

        <title>Trabajadores registrados</title>
    </head>
    <body>
    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            Aqui puedes ver todos los trabajadores registrados en la pagina.</p>
        </div>
    </main>       
        <div class="container">
            <table id="users" class="table">
                <thead>
                    <tr>
                        <th width="10px">Nombres</th>
                        <th>Apellidos</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>DNI </th>
                        <th>Categoria</th>
                        <th>Detalle del anuncio</th>
                        <th>Localizacion del anuncio</th>
                        <th>Imagenes</th>
                        <th width="120px">&nbsp;</th>
                    </tr>
                </thead>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

        <script>
            $(document).ready(function() {
                $('#users').DataTable({
                    "serverSide": true,
                    "ajax": "{{ url('api/users') }}",
                    "columns": [
                        {data: 'name'},
                        {data: 'apellido'},
                        {data: 'email'},
                        {data: 'telefono'},
                        {data: 'categoria'},
                        {data: 'detalle'},
                        {data: 'localizacion'},
                        {data: 'imagen'},
                        {data: 'btn'},
                    ],
                    "language": {
                        "info": "_TOTAL_ registros",
                        "search": "Buscar",
                        "paginate": {
                            "next": "Siguiente",
                            "previous": "Anterior",
                        },
                        "lengthMenu": 'Mostrar <select >'+
                                    '<option value="10">10</option>'+
                                    '<option value="30">30</option>'+
                                    '<option value="-1">Todos</option>'+
                                    '</select> registros',
                        "loadingRecords": "Cargando...",
                        "processing": "Procesando...",
                        "emptyTable": "No hay datos",
                        "zeroRecords": "No hay coincidencias", 
                        "infoEmpty": "",
                        "infoFiltered": ""
                    }
                });
            });
        </script>
    </body>
</html>