<div>
    <table>
        <thead>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->prenom }}</td>
                    <td>{{ $user->email }}</td>
                    <td> <button wire:click='removeAdmin({{ $user->id }})'>Remove admin</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
