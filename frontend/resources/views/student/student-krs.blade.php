{{-- {{ dd($enrollments, $schedules) }} --}}
{{-- {{ dd($payments) }} --}}

<x-student-layout :student="$student">
    <x-layout>
        <main class="ml-20 mr-20 mt-5">
            <div class="bg-white rounded-lg shadow-lg">
                <!-- Header Section -->
                <div class="p-6 border-b border-gray-200">
                    <h1 class="text-2xl font-bold text-center text-gray-800 mb-4">
                        Kartu Rencana Studi (KRS)
                    </h1>

                    <p class="text-gray-600 mb-4 text-center">
                        KRS adalah dokumen yang berisi daftar mata kuliah yang akan diambil oleh mahasiswa dalam satu
                        semester.
                        Pastikan untuk memperhatikan prasyarat dan jumlah SKS maksimal yang diperbolehkan.
                    </p>

                    <div class="flex justify-between items-center text-sm font-medium text-gray-600">
                        <span>Tahun Ajaran: 2024/2025</span>
                        <form id="filter-form" class="w-1/5">
                            <select name="semester" id="semester-filter" class="mt-1 w-full p-3 rounded-lg bg-gray-50">
                                <option value="semester_1"
                                    {{ request('semester', 'semester_1') == 'semester_1' ? 'selected' : '' }}>Semester 1
                                </option>
                                <option value="semester_2" {{ request('semester') == 'semester_2' ? 'selected' : '' }}>
                                    Semester 2</option>
                                <option value="semester_3" {{ request('semester') == 'semester_3' ? 'selected' : '' }}>
                                    Semester 3</option>
                                <option value="semester_4" {{ request('semester') == 'semester_4' ? 'selected' : '' }}>
                                    Semester 4</option>
                                <option value="semester_5" {{ request('semester') == 'semester_5' ? 'selected' : '' }}>
                                    Semester 5</option>
                                <option value="semester_6" {{ request('semester') == 'semester_6' ? 'selected' : '' }}>
                                    Semester 6</option>
                                <option value="semester_7" {{ request('semester') == 'semester_7' ? 'selected' : '' }}>
                                    Semester 7</option>
                                <option value="semester_8" {{ request('semester') == 'semester_8' ? 'selected' : '' }}>
                                    Semester 8</option>
                            </select>
                        </form>
                    </div>
                </div>

                <!-- Main Content -->
                <div class="p-6">
                    <form id="krs">
                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse">
                                <thead>
                                    <tr class="bg-gray-50">
                                        <th
                                            class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">
                                            No</th>
                                        <th
                                            class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">
                                            Kode Kelas</th>
                                        <th
                                            class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">
                                            Mata Kuliah</th>
                                        <th
                                            class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">
                                            Jadwal</th>
                                        <th
                                            class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">
                                            Semester</th>
                                        <th
                                            class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">
                                            SKS</th>
                                        <th
                                            class="border border-gray-200 px-4 py-3 text-center text-sm font-semibold text-gray-600">
                                            Pilih</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $selectedSemester = request('semester', 'semester_1');
                                        $paymentStatus = collect($payments)->firstWhere('semester', $selectedSemester)['statusPembayaran'] ?? 'PENDING';
                                    @endphp

                                    @if ($paymentStatus === 'PENDING')
                                        <tr class="hover:bg-gray-50">
                                            <td colspan="7" class="text-red-600 font-semibold text-center text-lg p-4">Anda tidak dapat melakukan KRS untuk {{ ucfirst(str_replace('_', ' ', $selectedSemester)) }} karena status pembayaran Anda masih PENDING. Silakan selesaikan pembayaran terlebih dahulu.</td>
                                        </tr>
                                    @else
                                        @foreach ($schedules['data'] as $key => $schedule)
                                            @if ($schedule['course']['semester'] == $selectedSemester)
                                                @php
                                                    $isEnrolled = false;
                                                    foreach ($enrollments['data'] as $enrollment) {
                                                        if (
                                                            $enrollment['schedule']['course']['code'] ===
                                                            $schedule['course']['code']
                                                        ) {
                                                            $isEnrolled = true;
                                                            break;
                                                        }
                                                    }
                                                @endphp
                                                <tr class="hover:bg-gray-50 {{ $isEnrolled ? 'hidden' : '' }}"
                                                    data-schedule-id="{{ $schedule['id'] }}">
                                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">
                                                        {{ $loop->iteration }}</td>
                                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">
                                                        {{ $schedule['course']['code'] }}</td>
                                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">
                                                        {{ $schedule['course']['name'] }}</td>
                                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">
                                                        {{ \Carbon\Carbon::parse($schedule['day'])->locale('id')->dayName }}, {{ $schedule['time'] }}</td>
                                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">
                                                        {{ $schedule['course']['semester'] }}</td>
                                                    <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">
                                                        {{ $schedule['course']['sks'] }}</td>
                                                    <td class="border border-gray-200 px-4 py-3 text-center">
                                                        <input type="checkbox" name="scheduleId"
                                                            value="{{ $schedule['id'] }}"
                                                            class="form-checkbox h-5 w-5 text-blue-600">
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    @endif
                                </tbody>
                                <tfoot>
                                    <tr class="bg-gray-50">
                                        <td colspan="5"
                                            class="border border-gray-200 px-4 py-3 text-sm font-semibold text-gray-600 text-right">
                                            Total SKS:
                                        </td>
                                        <td id="total-sks" colspan="2"
                                            class="border border-gray-200 px-4 py-3 text-sm font-semibold text-gray-600">
                                            0
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="flex justify-end mt-3">
                                <button type="submit"
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-12 rounded-lg flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Tambah Mata Kuliah
                                </button>
                            </div>
                        </div>
                    </form>
                     <!-- Dropdown for Semester Selection -->
                     <div class="mb-4">
                        <label for="semester-select" class="block text-sm font-medium text-gray-700">Pilih Semester:</label>
                        <select id="semester-select" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                            @for ($i = 1; $i <= 8; $i++)
                                <option value="{{ $i }}">KRS Semester {{ $i }}</option>
                            @endfor
                        </select>
                    </div>

                    <form id="krs-delete">
                        <!-- Tables for each semester -->
                        @for ($i = 1; $i <= 8; $i++)
                            <div id="semester-{{ $i }}" class="semester-table hidden">
                                <h2 class="text-xl font-semibold text-gray-800 mb-4">KRS Semester {{ $i }}</h2>
                                <div class="overflow-x-auto mb-4">
                                    <table class="w-full border-collapse">
                                        <thead>
                                            <tr class="bg-gray-50">
                                                <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">No</th>
                                                <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Kode Kelas</th>
                                                <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Mata Kuliah</th>
                                                <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Jadwal</th>
                                                <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">Semester</th>
                                                <th class="border border-gray-200 px-4 py-3 text-left text-sm font-semibold text-gray-600">SKS</th>
                                                <th class="border border-gray-200 px-4 py-3 text-center text-sm font-semibold text-gray-600">Pilih</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($enrollments['data'] as $key => $enrollment)
                                                @if ($enrollment['schedule']['course']['semester'] == 'semester_' . $i)
                                                    <tr data-enrollment-id="{{ $enrollment['schedule']['id'] }}" class="hover:bg-gray-50">
                                                        <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">{{ $loop->iteration }}</td>
                                                        <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">{{ $enrollment['schedule']['course']['code'] }}</td>
                                                        <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">{{ $enrollment['schedule']['course']['name'] }}</td>
                                                        <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">{{ \Carbon\Carbon::parse($enrollment['schedule']['day'])->locale('id')->dayName }}, {{ $enrollment['schedule']['time'] }}</td>
                                                        <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">{{ $enrollment['schedule']['course']['semester'] }}</td>
                                                        <td class="border border-gray-200 px-4 py-3 text-sm text-gray-600">{{ $enrollment['schedule']['course']['sks'] }}</td>
                                                        <td class="border border-gray-200 px-4 py-3 text-center">
                                                            <input type="checkbox" name="enrollmentId" value="{{ $enrollment['schedule']['id'] }}" class="form-checkbox h-5 w-5 text-blue-600">
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="bg-gray-50">
                                                <td colspan="5" class="border border-gray-200 px-4 py-3 text-sm font-semibold text-gray-600 text-right">
                                                    Total SKS:
                                                </td>
                                                <td id="total-sks-{{ $i }}" colspan="2" class="border border-gray-200 px-4 py-3 text-sm font-semibold text-gray-600">
                                                    0
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="flex justify-end mt-3">
                                        <button type="submit" id="delete-selected" class="mb-5 bg-red-600 hover:bg-red-700 text-white py-2 px-[70px] rounded-lg">Hapus MataKuliah</button>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </form>
                </div>
            </div>
        </main>
    </x-layout>
</x-student-layout>

<script>
    document.getElementById('semester-select').addEventListener('change', function() {
        const semester = this.value;
        // Sembunyikan semua tabel semester
        document.querySelectorAll('.semester-table').forEach(table => {
            table.classList.add('hidden');
        });

        // Tampilkan tabel semester yang dipilih
        document.getElementById('semester-' + semester).classList.remove('hidden');

        // Update total SKS untuk semester yang dipilih
        updateTotalSks(semester);
    });

    // Tampilkan tabel semester 1 secara default
    document.addEventListener('DOMContentLoaded', () => {
        document.getElementById('semester-select').value = 1;
        document.getElementById('semester-1').classList.remove('hidden');
        updateTotalSks(1);
    });

    function updateTotalSks(semester) {
        let totalSks = 0;
        document.querySelectorAll(`#semester-${semester} tbody tr`).forEach((row) => {
            const sks = parseInt(row.querySelector('td:nth-child(6)').innerText);
            totalSks += sks;
        });
        document.getElementById(`total-sks-${semester}`).innerText = totalSks;
    }
</script>

<script>
    const addButtons = document.querySelectorAll('input[name="scheduleId"]');
    addButtons.forEach(addButton => {
        addButton.addEventListener('change', () => {
            const totalSks = document.getElementById('total-sks');
            addButton.checked ? totalSks.textContent = parseInt(totalSks.textContent) + parseInt(
                    addButton.parentElement.previousElementSibling.textContent) : totalSks.textContent =
                parseInt(totalSks.textContent) - parseInt(addButton.parentElement.previousElementSibling
                    .textContent);
        })
    });

    const form = document.querySelector('#krs');
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const scheduleId = [];
        let totalSks = 0;
        const scheduleTimes = new Set();
        let hasConflict = false;

        document.querySelectorAll('input[name="scheduleId"]:checked').forEach((checkbox) => {
            const row = checkbox.closest('tr');
            scheduleId.push(parseInt(checkbox.value));
            const sks = parseInt(row.querySelector('td:nth-child(6)').innerText);
            totalSks += sks;

            const scheduleTime = row.querySelector('td:nth-child(4)').innerText;
            if (scheduleTimes.has(scheduleTime)) {
                hasConflict = true;
            } else {
                scheduleTimes.add(scheduleTime);
            }
        });

        if (totalSks > 24) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Total SKS tidak boleh lebih dari 24.",
            })
            return;
        }

        if (hasConflict) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Jadwal bentrok terdeteksi. Silakan pilih jadwal yang tidak bentrok.",
            })
            return;
        }

        try {
            const token = await axios.post('/token/get-token').then(res => res.data);
            console.log(token);
            console.log(scheduleId);
            const response = await axios.post('http://localhost:3000/api/enrollment/register', {
                scheduleId
            }, {
                headers: {
                    'X-API-TOKEN': `${token}`
                }
            }).then(data => data.data);
            if (response.status === 201) {
                Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: response.message,
                })
                window.location.reload();
            }
        } catch (error) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: error.response?.data.errors || error.message,
            })
        }

        // After successful enrollment, hide the selected rows
        document.querySelectorAll('input[name="scheduleId"]:checked').forEach((checkbox) => {
            const row = checkbox.closest('tr');
            if (row) {
                row.classList.add('hidden');
            }
        });
    });

    const deleteForm = document.querySelector('#krs-delete');
    deleteForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const schedulesId = [];
        document.querySelectorAll('input[name="enrollmentId"]:checked').forEach((checkbox) => {
            schedulesId.push(parseInt(checkbox.value));
        });

        // ... rest of your delete handling code ...
        try {
            const token = await axios.post('/token/get-token').then(res => res.data);
            console.log(token);
            console.log(schedulesId);
            const response = await axios.delete('http://localhost:3000/api/enrollment', {
                data: {
                    scheduleId: schedulesId
                },
                headers: {
                    "X-API-TOKEN": `${token}`
                }
            }).then(data => data.data);
            if (response.status === 201) {
                Swal.fire({
                    icon: "success",
                    title: "Success",
                    text: response.message,
                })
                window.location.reload();
            }
        } catch (error) {
            console.log(error);
        }

        // Show the corresponding course in the top table
        document.querySelectorAll('input[name="enrollmentId"]:checked').forEach((checkbox) => {
            const row = checkbox.closest('tr');
            if (row) {
                row.classList.add('hidden');
            }
        });
    });

    document.getElementById('semester-filter').addEventListener('change', function() {
        document.getElementById('filter-form').submit();
    });
</script>
