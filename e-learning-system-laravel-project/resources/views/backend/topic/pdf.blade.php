<table>
    <thead>
        <tr>
            <th>SL#</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($topics as $topic)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $topic->title }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
