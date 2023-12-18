<div>
    <table>
        <thead>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                <tr>
                    <td>{{ $admin->name }}</td>
                    <td>{{ $admin->prenom }}</td>
                    <td>{{ $admin->email }}</td>
                    <td> <button wire:click='removeAdmin({{ $admin->id }})'>Remove admin</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
