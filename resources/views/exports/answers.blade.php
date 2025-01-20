<table>
    <thead>
        <tr>
            @foreach ($data[0] as $encabezado)
                <th>{{ $encabezado }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $index => $fila)
            @if ($index > 0) 
                <tr>
                    @foreach ($fila as $columna)
                        <td>{{ $columna }}</td>
                    @endforeach
                </tr>
            @endif
        @endforeach
    </tbody>
</table>
