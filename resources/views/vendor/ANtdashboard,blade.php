<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Vendedor</title>
</head>
<body>
<h1>Painel Vendedor</h1>
<p>Seja bem-vindo ao painel do vendedor.</p>
<p>Usuário autenticado: {{ Auth::user()->name }}</p>

    <x-dropdown-link :href="route('profile.edit')">
        {{ __('Meus dados') }}
    </x-dropdown-link>
                 <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-dropdown-link :href="route('logout')"
            onclick="event.preventDefault();
                this.closest('form').submit();">
            {{ __('Sair') }}
        </x-dropdown-link>
    </form>

</body>
</html>
