<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-7xl text-center mb-11">Data Table</h1>
    <table class="table-auto m-auto border-separate border-spacing-4 border border-slate-500">
        <thead>
            <tr>
                <th class="border border-slate-600 p-2">Last Name</th>
                <th class="border border-slate-600 p-2">First Name</th>
                <th class="border border-slate-600 p-2">Email</th>
                <th class="border border-slate-600 p-2">Contact Number</th>
                <th class="border border-slate-600 p-2">Address</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
            <tr>
                <td class="border border-slate-700 p-2">{{$customer->lastName}}</td>
                <td class="border border-slate-700 p-2">{{$customer->firstName}}</td>
                <td class="border border-slate-700 p-2">{{$customer->email}}</td>
                <td class="border border-slate-700 p-2">{{$customer->contactNumber}}</td>
                <td class="border border-slate-700 p-2">{{$customer->address}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>