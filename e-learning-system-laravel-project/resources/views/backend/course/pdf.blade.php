<table>
    <thead>
        <tr>
            <th>SL#</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $course->title }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
