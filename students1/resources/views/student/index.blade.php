<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    Hello~HIHIHI~~index~blade~view

    <!-- 原始顯示data的方式 -->
    <?php
        // dd($data);

    ?>

    <!-- 用laravel顯示data的方式 -->
    @php
        // dd($data)    ;
    @endphp

    <div class="container mt-3">
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="10%">ID</th>
                    <th>NAME</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $value)
                    <tr>
                        <td>{{$value['id']}}</td>
                        <td>{{$value['name']}}</td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    </div>



</body>
</html>