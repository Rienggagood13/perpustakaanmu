import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head, useForm } from '@inertiajs/react';
import route from 'ziggy-js';

export default function Index({ users }) {
    const { delete: destroy } = useForm();

    return (
        <AuthenticatedLayout
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Data Pengguna</h2>}
        >
            <Head title="Data Pengguna" />

            <div className="p-4">
                <div className="bg-white shadow rounded p-6">
                    <table className="min-w-full">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {users.map(user => (
                                <tr key={user.id}>
                                    <td>{user.name}</td>
                                    <td>{user.email}</td>
                                    <td>{user.role}</td>
                                    <td>
                                        <a href={route('users.edit', user.id)} className="text-blue-500">Edit</a>
                                        <button onClick={() => destroy(route('users.destroy', user.id))} className="text-red-500 ml-2">Hapus</button>
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
