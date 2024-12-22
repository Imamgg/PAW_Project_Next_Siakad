<x-admin-layout>
    <x-admin-sidebar :admin="$admin">
        <div class="container mx-auto px-4 py-8">
            <div class="bg-white rounded-xl shadow-sm">
                <div class="p-6 border-b border-gray-100">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <h2 class="text-2xl font-bold text-gray-800">Library Management</h2>
                        <div class="flex items-center gap-4">
                            <div class="relative">
                                <input type="text" placeholder="Cari Buku..."
                                    class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                            </div>
                            <a href="/admin/service/perpustakaan/create"
                                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors duration-200 flex items-center gap-2">
                                <i class="fas fa-plus"></i>
                                Tambah Buku
                            </a>
                        </div>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-50">
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Cover</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Title</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Author</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Pages</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Description</th>
                                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-600">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-6 py-4">
                                    <img src="https://covers.openlibrary.org/b/id/12000346-M.jpg" alt="Book Cover"
                                        class="w-16 h-24 object-cover rounded">
                                </td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">Doraemon</div>
                                </td>
                                <td class="px-6 py-4 text-gray-600">Harper Lee</td>
                                <td class="px-6 py-4 text-gray-600">281</td>
                                <td class="px-6 py-4">
                                    <p class="text-gray-600 truncate w-64">A novel about the serious issues of rape and
                                        racial inequality.</p>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-3">
                                        <button type="submit"
                                            class="px-3 py-1 bg-ultramarine-400 text-white rounded-md hover:bg-ultramarine-900 transition-colors">
                                            Edit
                                        </button>
                                        <button type="button"
                                            class="px-3 py-1 bg-red-500 text-white rounded-md hover:bg-red-900 transition-colors">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-admin-sidebar>
</x-admin-layout>
