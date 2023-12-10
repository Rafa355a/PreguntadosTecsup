<x-admin-layout>

    <h2>Usuario: {{$user->name}}</h2>
    <hr>
    <div id="dashboard">

        <form action="{{ route('admin.users.update', $user) }}" method="POST">

            @csrf

            @method('PUT')


            <div>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">

                <x-input-error :messages="$errors->get('name')" />

            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}">

                <x-input-error :messages="$errors->get('email')" />
            </div>

            <div>
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" >

                <x-input-error :messages="$errors->get('password')" />
            </div>

            <div>
                <label for="password_confirmation">Confirmar Contraseña</label>
                <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation', $user->password_confirmation) }}">
            </div>


            <input type="hidden" name="is_admin" value="0">
    
            <div>
                <label for="is_admin">Es administrador</label>
                <input type="checkbox" name="is_admin" id="is_admin" value="1" @checked(auth()->user()->is_admin)>

                <x-input-error :messages="$errors->get('is_admin')" />
            </div>
 


            <div id="nuevaPregunta">
                <button type="submit" class="btn-guardar">
                    Actualizar
                </button>
            </div>

        </form>

    </div>

</x-admin-layout>