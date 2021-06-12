<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.0.4/dist/tailwind.min.css" rel="stylesheet">
    <title>1461900132</title>
</head>
<body>
    <div class="table w-full p-2">
        <table class="w-full border">
            <a href="{{url('export')}}" class="bg-red-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                Export
            </a>
            <thead>
				<tr>
					<th data-priority="1" class="border" >Judul Buku</th>
					<th data-priority="2" class="border">Tahun Terbit</th>
					<th data-priority="3" class="border">Jenis Buku</th>

				</tr>
            </thead>
            <tbody>
            @foreach($boku as $data)
						<tr>
							<td class="border" >{{$data->judul}}</td>
                            <td class="border" >{{$data->tahun_terbit}}</td>
                            <td class="border" >{{$data->jenis}}</td>
						</tr>
					@endforeach
            </tbody>
        </table>
    </div>
</body>
</html>