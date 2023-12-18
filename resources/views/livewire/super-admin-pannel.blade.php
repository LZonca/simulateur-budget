<div>
    <table>
        <thead>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($adminUsers as $adminUser)
                <tr>
                    <td>{{ $adminUser->name }}</td>
                    <td>{{ $adminUser->prenom }}</td>
                    <td>{{ $adminUser->email }}</td>
                    <td> <button wire:click='removeAdmin({{ $adminUser->id }})'>Remove admin</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
