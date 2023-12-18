
<div class="max-w-6xl my-20 p-10 mx-auto bg-white shadow-md text-center rounded-lg">
    <table class="min-w-full">
        <thead>
            <tr>
                <th class="py-2 px-4 border-4">Nom</th>
                <th class="py-2 px-4 border">Prenom</th>
                <th class="py-2 px-4 border">Email</th>
                <th class="py-2 px-4 border">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="py-2 px-4 border">{{ $admin->name }}</td>
                    <td class="py-2 px-4 border">{{ $admin->prenom }}</td>
                    <td class="py-2 px-4 border">{{ $admin->email }}</td>
                    <td class="py-2 px-4 border">
                        <button wire:click='toggleMenu({{ $admin->id }})' class="m-2 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Action
                        </button>
                        @if($menu && $selectedUser_id === $admin->id)
                            <div class="bg-gray-200 p-4 mt-2 rounded">
                                dqd
                            </div>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


