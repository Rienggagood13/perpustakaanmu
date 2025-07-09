import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, useForm } from '@inertiajs/react';

export default function Index({ borrowings }) {
    const { delete: destroy } = useForm();

    const handleDelete = (id) => {
        if (confirm('Hapus data peminjaman ini?')) {
            destroy(route('borrowings.destroy', id));
        }
    };

    return (
        <AuthenticatedLayout
            header={<h2 className="text-xl font-semibold leading-tight text-gray-800">Peminjaman Buku</h2>}
        >
            <Head title="Borrowings" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white shadow-sm sm:rounded-lg p-6">
                        <table className="w-full table-auto">
                            <thead>
                                <tr>
                                    <th className="text-left py-2">User</th>
                                    <th className="text-left py-2">Buku</th>
                                    <th className="text-left py-2">Tanggal Pinjam</th>
                                    <th className="text-left py-2">Tanggal Kembali</th>
                                    <th className="text-left py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {borrowings.map((borrow) => (
                                    <tr key={borrow.id} className="border-t">
                                        <td className="py-2">{borrow.user.name}</td>
                                        <td className="py-2">{borrow.book.title}</td>
                                        <td className="py-2">{borrow.borrowed_at}</td>
                                        <td className="py-2">{borrow.returned_at || '-'}</td>
                                        <td className="py-2 space-x-2">
                                            <a href={route('borrowings.edit', borrow.id)} className="text-blue-500">Edit</a>
                                            <button onClick={() => handleDelete(borrow.id)} className="text-red-500">Hapus</button>
                                        </td>
                                    </tr>
                                ))}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
