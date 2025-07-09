import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Dashboard() {
    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <div className="flex min-h-screen">
                {/* Sidebar */}
                <aside className="w-64 bg-gray-800 text-white flex flex-col justify-between">
                    <div className="p-6">
                        <div className="text-center font-bold text-xl mb-6">📚 PerpusKalcer</div>
                        <nav className="space-y-2">
                            <a href="/dashboard" className="block px-4 py-2 rounded hover:bg-gray-700">🏠 Dashboard</a>
                            <a href="/users" className="block px-4 py-2 rounded hover:bg-gray-700">👤 Data Pengguna</a>
                            <a href="/books" className="block px-4 py-2 rounded hover:bg-gray-700">📘 Data Buku</a>
                            <a href="/borrowings" className="block px-4 py-2 rounded hover:bg-gray-700">📖 Peminjaman</a>
                            <a href="/profile" className="block px-4 py-2 rounded hover:bg-gray-700">⚙️ Profil</a>
                        </nav>
                    </div>

                    <form method="POST" action="/logout" className="px-4 pb-6">
                        <button
                            type="submit"
                            className="w-full text-left px-4 py-2 rounded hover:bg-red-600 bg-red-500 text-white"
                        >
                            🚪 Logout
                        </button>
                    </form>
                </aside>

                {/* Main content */}
                <main className="flex-1 bg-gray-100 p-8">
                    <div className="bg-white p-6 rounded shadow">
                        <h1 className="text-2xl font-bold mb-4">Selamat Datang di Sistem Informasi Peminjaman Buku</h1>
                        <p className="text-gray-700">Silakan gunakan navigasi di sebelah kiri untuk mengelola data pengguna, buku, dan peminjaman.</p>
                    </div>
                </main>
            </div>
        </AuthenticatedLayout>
    );
}
