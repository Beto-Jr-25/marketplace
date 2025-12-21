
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel do Administrador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h3>Bem-vindo, {{ Auth::user()->name }}!</h3>
                <p class="mb-4">Você está logado no painel administrativo.</p>

                <div class="flex gap-4">
                    {{-- Link para Perfil --}}
                    <x-dropdown-link :href="route('profile.edit')" class="bg-gray-100 rounded">
                        {{ __('Meus Dados') }}
                    </x-dropdown-link>

                    {{-- Formulário de Sair --}}
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link as="button"
                            onclick="event.preventDefault(); this.closest('form').submit();"
                            class="bg-red-50 text-red-600 rounded cursor-pointer">
                            {{ __('Sair do Painel') }}
                        </x-dropdown-link>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
