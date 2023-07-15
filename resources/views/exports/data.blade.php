<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $row)
        <tr>
            <td>{{ $row[0] }}</td>
            <td>{{ $row[1] }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
