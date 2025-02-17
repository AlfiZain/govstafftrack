<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body>
    <div class="m-8">
        <table id="pegawaiTable" class="w-full text-sm text-left text-gray-700 ">
            <thead class="text-xs text-white uppercase bg-blue-500 ">
                <tr class="border-b text-center">
                    <th class="px-4 py-3">NIP</th>
                    <th class="px-4 py-3">Nama</th>
                    <th class="px-4 py-3">Tempat Lahir</th>
                    <th class="px-4 py-3">Alamat</th>
                    <th class="px-4 py-3">Tanggal Lahir</th>
                    <th class="px-4 py-3">L/P</th>
                    <th class="px-4 py-3">Gol</th>
                    <th class="px-4 py-3">Eselon</th>
                    <th class="px-4 py-3">Jabatan</th>
                    <th class="px-4 py-3">Tempat Tugas</th>
                    <th class="px-4 py-3">Agama</th>
                    <th class="px-4 py-3">Unit Kerja</th>
                    <th class="px-4 py-3">No. HP</th>
                    <th class="px-4 py-3">NPWP</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr class="bg-white border-b border-gray-200">
                        <td class="px-4 py-4">{{ $employee->nip }}</td>
                        <td class="px-4 py-4">{{ $employee->name }}</td>
                        <td class="px-4 py-4">{{ $employee->place_of_birth }}</td>
                        <td class="px-4 py-4">{{ $employee->address }}</td>
                        <td class="px-4 py-4">{{ $employee->date_of_birth }}</td>
                        <td class="px-4 py-4">{{ $employee->gender }}</td>
                        <td class="px-4 py-4">{{ $employee->position->group }}</td>
                        <td class="px-4 py-4">{{ $employee->position->echelon }}</td>
                        <td class="px-4 py-4">{{ $employee->position->name }}</td>
                        <td class="px-4 py-4">{{ $employee->unit->work_place }}</td>
                        <td class="px-4 py-4">{{ $employee->religion }}</td>
                        <td class="px-4 py-4">{{ $employee->unit->name }}</td>
                        <td class="px-4 py-4">{{ $employee->phone }}</td>
                        <td class="px-4 py-4">{{ $employee->npwp }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
