<x-layout title="Login">
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" id="email" autofocus class="form-control">
        </div>

        <div>
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <button class="btn btn-primary mt-3">
            Entrar</button>
            
        <a href="{{ route('users.create')}}" class="btn btn-secundary mt-3">
            Registrar
        </a>    
    </form>
</x-layout>