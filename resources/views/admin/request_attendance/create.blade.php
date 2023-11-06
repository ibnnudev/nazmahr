<x-app-layout>
    @section('title', 'Tambah Request Absensi')

    <x-breadcrumb name="admin.request-attendance.create" />

    <x-card-container>
        <form action="{{ route('admin.request-attendance.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <x-select id="user_id" label="Karyawan" class="w-full" name="user_id" required>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                @endforeach
            </x-select>
            <x-select id="attendance_type_id" name="attendance_type_id" label="{{ __('Tipe Absensi') }}" required>
                @foreach ($attendanceTypes as $attendanceType)
                    <option value="{{ $attendanceType->id }}">{{ $attendanceType->name }}</option>
                @endforeach
            </x-select>
            <x-input id="entry_at" name="entry_at" label="{{ __('Jam Masuk') }}" type="datetime-local" required />
            <x-input id="exit_at" name="exit_at" label="{{ __('Jam Keluar') }}" type="datetime-local" required />
            <x-input id="description" name="description" label="{{ __('Ketarangan') }}" type="text" required />
            <x-button id="store" label="{{ __('Tambah') }}" type="submit" />
        </form>
    </x-card-container>

</x-app-layout>
