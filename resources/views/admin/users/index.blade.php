<x-admin-layout>

    <h2>Usuarios</h2>
    <hr>
    <div id="dashboard">


        <ul>

            @foreach ($users as $user)
                
                <li>
                    {{ $user->name }}

                    <a href="{{ route('admin.users.edit', $user) }}">
                        (Editar)
                    </a>
                </li>

            @endforeach

        </ul>

    </div>
</x-admin-layout>