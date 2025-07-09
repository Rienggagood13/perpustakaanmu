import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, useForm } from '@inertiajs/react';
import route from 'ziggy-js';

export default function Index({ books }) {
    const { delete: destroy } = useForm();

    const handleDelete = (id) => {
        if (confirm('Hapus buku ini?')) {
            destroy(route('books.destroy', id));
        }
    };

    return (
        <AuthenticatedLayout
            header={<h2 className="text-xl font-semibold leading-tight text-gray-800">Data Buku</h2>}
        >
            <Head title="Books" />
            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white shadow-sm sm:rounded-lg p-6">
                        <table className="w-full table-auto">
                            <thead>
                                <tr>
                                    <th className="text-left py-2">Judul</th>
                                    <th className="text-left py-2">Penulis</th>
                                    <th className="text-left py-2">Tahun</th>
                                    <th className="text-left py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {books.map((book) => (
                                    <tr key={book.id} className="border-t">
                                        <td className="py-2">{book.title}</td>
                                        <td className="py-2">{book.author}</td>
                                        <td className="py-2">{book.year}</td>
                                        <td className="py-2 space-x-2">
                                            <a href={route('books.edit', book.id)} className="text-blue-500">Edit</a>
                                            <button onClick={() => handleDelete(book.id)} className="text-red-500">Hapus</button>
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
