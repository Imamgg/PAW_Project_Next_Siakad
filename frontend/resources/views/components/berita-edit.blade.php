<div id="editModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden z-50">
    <div class="relative top-20 mx-auto p-5 border w-[600px] shadow-lg rounded-md bg-white">
        <div class="flex flex-col">
            <div class="flex justify-between items-center pb-4 mb-4 border-b">
                <h3 class="text-xl font-semibold text-gray-800">Edit Berita</h3>
                <button onclick="closeEditModal()" class="text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <form id="editForm" class="space-y-4">
                <input type="hidden" id="editId">
                <div>
                    <label for="editJudul" class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" id="editJudul" name="judul"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div>
                    <label for="editKonten" class="block text-sm font-medium text-gray-700">Konten</label>
                    <textarea id="editKonten" name="konten" rows="6"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"></textarea>
                </div>
                <div>
                    <label for="editGambar" class="block text-sm font-medium text-gray-700">URL Gambar</label>
                    <input type="text" id="editGambar" name="gambar"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" onclick="closeEditModal()"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">
                        Batal
                    </button>
                    <button type="button" onclick="submitEdit()"
                        class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function openEditModal(id, judul, konten, gambar) {
        document.getElementById('editId').value = id;
        document.getElementById('editJudul').value = judul;
        document.getElementById('editKonten').value = konten;
        document.getElementById('editGambar').value = gambar;
        document.getElementById('editModal').classList.remove('hidden');
    }

    function closeEditModal() {
        document.getElementById('editModal').classList.add('hidden');
        document.getElementById('editForm').reset();
    }

    async function submitEdit() {
        const id = document.getElementById('editId').value;
        const judul = document.getElementById('editJudul').value;
        const konten = document.getElementById('editKonten').value;
        const gambar = document.getElementById('editGambar').value;

        try {
            const token = await axios.post('/token/get-token').then(res => res.data);
            const response = await axios.patch(`http://localhost:3000/api/berita`, {
                id: parseInt(id),
                judul,
                konten,
                gambar
            }, {
                headers: {
                    'X-API-TOKEN': token
                }
            });

            if (response.status === 201) {
                Swal.fire({
                    icon: "success",
                    title: "Berhasil",
                    text: "Berita berhasil diperbarui",
                }).then(() => {
                    window.location.reload();
                });
            }
        } catch (error) {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: error.response?.data.errors || error.message,
            });
        }
    }
</script>
