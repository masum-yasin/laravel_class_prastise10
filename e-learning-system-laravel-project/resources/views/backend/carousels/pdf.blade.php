<table border="1">
    <thead>
        <tr>
            <th>SL#</th>
            <th>Title</th>
        </tr>
    </thead>
    <tbody>
        @foreach($carousels as $carousel)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $carousel->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

