<h1>List User</h1>

<table border="1">
    <tr>
        <th>ID</th>
        <th>UserName</th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{$user['ID']}}</td>
        <td>{{$user['user_login']}}</td>
        <td>{{$user['display_name']}}</td>
        <td>{{$user['user_email']}}</td>
    </tr>
    @endforeach
</table>
