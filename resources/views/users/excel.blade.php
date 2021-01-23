 <table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    @foreach($data as $user)
        <tr>
            <td>{{ $user->name }}</td>
             <td>{{ $user->username }}</td>
            <td>{{ $user->email }}</td>
        </tr>
    @endforeach
    </tbody>
</table>