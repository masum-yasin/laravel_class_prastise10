<table>
    <thead>
        <tr>
            <th>SL#</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($lessons as $lesson)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $lesson->title }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
