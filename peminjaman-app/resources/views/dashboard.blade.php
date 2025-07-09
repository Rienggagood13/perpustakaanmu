<x-app-layout>
    <div class="py-6 px-4">
        <h2 class="text-2xl font-semibold">Dashboard</h2>
        <div class="mt-4 grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="{{ route('users.index') }}" class="bg-indigo-500 text-white p-4 rounded shadow">Kelola User</a>
            <a href="{{ route('books.index') }}" class="bg-green-500 text-white p-4 rounded shadow">Kelola Buku</a>
            <a href="{{ route('borrowings.index') }}" class="bg-yellow-500 text-white p-4 rounded shadow">Peminjaman Buku</a>
        </div>
    </div>
</x-app-layout>
