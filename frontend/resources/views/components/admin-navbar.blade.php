{{-- {{ dd($admin) }} --}}

@props(['admin' => $admin])
<div x-data="{ searchOpen: false, profileModal: false, updateProfileModal: false }" class="w-full h-[60px] flex justify-between items-center px-2.5 py-0 relative">
    <!-- Toggle menu Button -->
    <button @click="sidebarOpen = !sidebarOpen"
        class="relative w-[60px] h-[60px] flex justify-center items-center text-[2.5rem] cursor-pointer z-50">
        <x-zondicon-menu x-show="!sidebarOpen"
            class="w-[1.75rem] transition-transform duration-300 transform hover:scale-110" />
        <x-zondicon-close x-show="sidebarOpen"
            class="w-[1.75rem] transition-transform duration-300 transform hover:scale-110" />
    </button>

    <!-- Profile Image with Dropdown -->
    <div x-data="{ open: false }" class="relative ml-auto sm:ml-0">
        <div @click="open = !open" class="relative w-10 h-10 overflow-hidden cursor-pointer rounded-[50%] group">
            {{-- <img src="/image/1037.png" alt="Profile Image"
                class="absolute w-full h-full object-cover left-0 top-0 transition-transform duration-300 transform group-hover:scale-110"> --}}
            <x-ionicon-person-circle-outline
                class="absolute w-full h-full object-cover left-0 top-0 transition-transform duration-300 transform group-hover:scale-110" />
        </div>

        <!-- Dropdown Menu -->
        <div x-show="open" @click.away="open = false" x-transition
            class="absolute right-0 mt-2 w-48 bg-ultramarine-900 rounded-md p-3 shadow-lg z-50">
            <div>
                <div class="text-white border-b border-slate-900 pb-3 mb-3">
                    <p class="font-semibold text-lg">{{ $admin['data']['name'] }}</p>
                </div>
                <button @click.prevent="profileModal = true; open = false"
                    class="w-full text-left p-2 text-sm gap-2 items-center flex text-white hover:bg-ultramarine-300 hover:text-black rounded-lg transition duration-150">
                    <x-carbon-user-profile class="w-5" /> Profile
                </button>
                <button @click.prevent="updateProfileModal = true; open = false"
                    class="w-full text-left p-2 text-sm gap-2 items-center flex text-white hover:bg-ultramarine-300 hover:text-black rounded-lg transition duration-150">
                    <x-zondicon-edit-pencil class="w-5" /> Update Profile
                </button>
                <button id="admin-logout"
                    class="w-full text-left p-2 text-sm gap-2 items-center flex text-white hover:bg-ultramarine-300 hover:text-black rounded-lg transition duration-150">
                    <x-ionicon-log-out-outline class="w-5" /> Logout
                </button>
            </div>
        </div>
    </div>

    <!-- Profile Modal -->
    <div x-show="profileModal" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 bg-black opacity-50"></div>

            <div x-show="profileModal" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95" @click.away="profileModal = false"
                class="bg-white rounded-lg shadow-xl max-w-md w-full relative">

                <div class="flex items-center justify-between p-4 border-b">
                    <h3 class="text-xl font-semibold text-gray-900">Profile Details</h3>
                    <button @click="profileModal = false" class="text-gray-400 hover:text-gray-500">
                        <x-zondicon-close class="w-6 h-6" />
                    </button>
                </div>

                <div class="p-6">
                    <div class="flex items-center space-x-4 mb-6">
                        <x-ionicon-person-circle-outline class="w-16 h-16" />
                        <div>
                            <h4 class="text-lg font-semibold">{{ $admin['data']['name'] }}</h4>
                            <p class="text-gray-600">{{ $admin['data']['role'] }}</p>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <div>
                            <label class="text-sm font-medium text-gray-700">Email:</label>
                            <p class="mt-1 text-gray-900">{{ $admin['data']['email'] }}</p>
                        </div>
                        <div>
                            <label class="text-sm font-medium text-gray-700">Dibuat pada:</label>
                            <p class="mt-1 text-gray-900">
                                {{ \Carbon\Carbon::parse($admin['data']['createdAt'])->setTimezone('Asia/Jakarta')->format('d F Y, H:i') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse rounded-b-lg">
                    <button @click="profileModal = false"
                        class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-ultramarine-600 text-base font-medium text-white hover:bg-ultramarine-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-ultramarine-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Update Profile Modal -->
    <div x-show="updateProfileModal" x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
        <div class="flex items-center justify-center min-h-screen px-4">
            <div class="fixed inset-0 bg-black opacity-50"></div>

            <form id="editProfile" class="bg-white rounded-lg shadow-xl max-w-xl w-full relative">
                <!-- Header -->
                <div class="flex items-center justify-between p-4 border-b">
                    <h3 class="text-xl font-semibold text-gray-900">Edit Profile</h3>
                    <button @click.prevent="updateProfileModal = false" class="text-gray-400 hover:text-gray-500">
                        <x-zondicon-close class="w-6 h-6" />
                    </button>
                </div>

                <div class="p-6">
                    <div class="space-y-6">
                        <div class="flex flex-col items-center space-y-4">
                            <div class="relative group">
                                <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-ultramarine-100">
                                    <x-ionicon-person-circle-outline class="w-full h-full object-cover" />
                                    {{-- <img id="preview-image" src="{{ $admin['data']['photo'] ?? '/image/1037.png' }}"
                                        alt="Profile Preview" class="w-full h-full object-cover"> --}}
                                </div>
                                <div
                                    class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                                    <label for="photo" class="cursor-pointer text-white text-sm font-medium">
                                        <x-zondicon-edit-pencil class="w-8 h-8 mx-auto mb-1" />
                                        Change Photo
                                    </label>
                                </div>
                                <input type="file" id="photo" name="photo" accept="image/*" class="hidden">
                            </div>
                            <p class="text-sm text-gray-500">Click to upload new photo</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700">Username</label>
                                <input type="text" id="profilName" name="name"
                                    value="{{ $admin['data']['name'] }}"
                                    class="mt-1 block p-3 w-full rounded-md border-gray-300 shadow-sm focus:border-ultramarine-500 focus:ring-ultramarine-500">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                <input type="email" id="profilEmail" name="email"
                                    value="{{ $admin['data']['email'] }}"
                                    class="mt-1 block p-3 w-full rounded-md border-gray-300 shadow-sm focus:border-ultramarine-500 focus:ring-ultramarine-500">
                            </div>
                            <div class="md:col-span-2">
                                <label for="password" class="block text-sm font-medium text-gray-700">Password
                                    baru</label>
                                <input type="password" id="profilPwd" name="password"
                                    placeholder="Biarkan kosong untuk menyimpan kata sandi saat ini"
                                    class="mt-1 p-3 block w-full rounded-md border-gray-300 shadow-sm focus:border-ultramarine-500 focus:ring-ultramarine-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 px-6 py-4 flex flex-row-reverse space-x-2 space-x-reverse rounded-b-lg">
                    <button type="submit"
                        class="inline-flex justify-center items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-ultramarine-600 hover:bg-ultramarine-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-ultramarine-500">
                        Save Changes
                    </button>
                    <button @click.prevent="updateProfileModal = false"
                        class="inline-flex justify-center items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-ultramarine-500">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const adminLogout = document.querySelector('#admin-logout');
    adminLogout.addEventListener('click', async () => {
        try {
            const token = await axios.post('/token/get-token').then(res => res.data);
            const response = await axios.patch('http://localhost:3000/api/admin/logout', {}, {
                headers: {
                    'X-API-TOKEN': token
                }
            }).then(data => data.data);
            if (response.status === 200) {
                Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: response.message,
                })
                await axios.post('/token/destroy-token');
                window.location.replace('/auth/login/');
            }
        } catch (error) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: error.response?.data.message || error.message,
            })
        }
    });

    const form = document.querySelector('#editProfile');
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const name = e.target.name.value;
        const email = e.target.email.value;
        const password = e.target.password.value;

        try {
            const token = await axios.post('/token/get-token').then(res => res.data);
            const response = await axios.patch('http://localhost:3000/api/admin', {
                name,
                email,
                password
            }, {
                headers: {
                    'X-API-TOKEN': token
                }
            }).then(data => data.data);
            if (response.status === 201) {
                Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: response.message,
                }).then(() => {
                    window.location.reload();
                })
            }
        } catch (error) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: error.response.data.errors || error.message,
            })
        }
    });
</script>
