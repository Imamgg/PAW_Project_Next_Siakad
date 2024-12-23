{{-- {{ dd($feedbacks) }} --}}

<x-admin-layout>
    <x-admin-sidebar :admin="$admin">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-6">Kritik dan Saran</h1>

            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="px-4 py-2 text-left">Nama</th>
                            <th class="px-4 py-2 text-left">Email</th>
                            <th class="px-4 py-2 text-left">Pesan</th>
                            <th class="px-4 py-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($feedbacks['data'] as $feedback)
                            <tr class="border-b">
                                <td class="px-4 py-2">{{ $feedback['name'] }}</td>
                                <td class="px-4 py-2">{{ $feedback['email'] }}</td>
                                <td class="px-4 py-2">
                                    <div class="max-w-xs overflow-hidden overflow-ellipsis">
                                        {{ $feedback['pesan'] }}
                                    </div>
                                </td>
                                <td class="px-4 py-2">
                                    <form action="{{ route('admin.feedbacks.destroy', $feedback['id']) }}" method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus feedback ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-4 py-2 text-center">Tidak ada data kritik dan saran.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </x-admin-sidebar>
</x-admin-layout>
