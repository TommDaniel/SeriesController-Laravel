<x-layout title="Login ">
    <form method="POST">
        @csrf
        <div class="max-w-md mx-auto my-8">
            <div class="bg-white shadow-lg rounded-lg ">
                <div class="mb-6">
                    <label for="email" class="block text-gray-700 font-bold">E-mail</label>
                    <input type="email" name="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-gray-700 font-bold">Senha</label>
                    <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" required>
                </div>
                <div class="flex justify-center gap-5">
                    <button
                        class="px-6 py-3 text-xl font-bold text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-md transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                        Entrar
                    </button>
                    <a href="/register"
                       class="px-6 py-3 text-xl font-bold text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-md transition-transform transform hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300"
                    >
                        Registrar
                    </a>
                </div>
            </div>
    </form>
</x-layout>
