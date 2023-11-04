<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Illuminate\Support\Str;

// Dashboard
Breadcrumbs::for('admin.dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('admin.dashboard'));
});

// Attendance Time Config
Breadcrumbs::for('admin.attendance-time-config', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Konfigurasi Jam Kerja', route('admin.attendance-time-config.index'));
});

// Attendance Time Config > Create
Breadcrumbs::for('admin.attendance-time-config.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.attendance-time-config');
    $trail->push('Tambah', route('admin.attendance-time-config.create'));
});

// Attendance Time Config > Edit
Breadcrumbs::for('admin.attendance-time-config.edit', function (BreadcrumbTrail $trail, $attendanceTimeConfig) {
    $trail->parent('admin.attendance-time-config');
    $trail->push($attendanceTimeConfig->day);
    $trail->push('Ubah', route('admin.attendance-time-config.edit', $attendanceTimeConfig));
});

// Position
Breadcrumbs::for('admin.position', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Jabatan', route('admin.position.index'));
});

// Position > Create
Breadcrumbs::for('admin.position.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.position');
    $trail->push('Tambah', route('admin.position.create'));
});

// Position > Edit
Breadcrumbs::for('admin.position.edit', function (BreadcrumbTrail $trail, $position) {
    $trail->parent('admin.position');
    $trail->push($position->name);
    $trail->push('Ubah', route('admin.position.edit', $position));
});

// Employee
Breadcrumbs::for('admin.employee', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Karyawan', route('admin.employee.index'));
});

// Employee > Create
Breadcrumbs::for('admin.employee.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.employee');
    $trail->push('Tambah', route('admin.employee.create'));
});

// Employee > Edit
Breadcrumbs::for('admin.employee.edit', function (BreadcrumbTrail $trail, $employee) {
    $trail->parent('admin.employee');
    $trail->push($employee->name);
    $trail->push('Ubah', route('admin.employee.edit', $employee));
});

// Casbon
Breadcrumbs::for('admin.casbon', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Kasbon', route('admin.casbon.index'));
});

// Casbon > Create
Breadcrumbs::for('admin.casbon.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.casbon');
    $trail->push('Tambah', route('admin.casbon.create'));
});

// Casbon > Edit
Breadcrumbs::for('admin.casbon.edit', function (BreadcrumbTrail $trail, $casbon) {
    $trail->parent('admin.casbon');
    $trail->push($casbon->user->name);
    $trail->push('Ubah', route('admin.casbon.edit', $casbon));
});

// Overtime
Breadcrumbs::for('admin.overtime', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Lembur', route('admin.overtime.index'));
});

// Overtime > Create
Breadcrumbs::for('admin.overtime.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.overtime');
    $trail->push('Tambah', route('admin.overtime.create'));
});

// Overtime > Edit
Breadcrumbs::for('admin.overtime.edit', function (BreadcrumbTrail $trail, $overtime) {
    $trail->parent('admin.overtime');
    $trail->push($overtime->user->name);
    $trail->push('Ubah', route('admin.overtime.edit', $overtime));
});

// Permit Leave
Breadcrumbs::for('admin.permit-leave', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Izin / Cuti', route('admin.permit-leave.index'));
});

// Permit Leave > Create
Breadcrumbs::for('admin.permit-leave.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.permit-leave');
    $trail->push('Tambah', route('admin.permit-leave.create'));
});

// Permit Leave > Edit
Breadcrumbs::for('admin.permit-leave.edit', function (BreadcrumbTrail $trail, $permitLeave) {
    $trail->parent('admin.permit-leave');
    $trail->push(Str::limit($permitLeave->id, 10));
    $trail->push('Ubah', route('admin.permit-leave.edit', $permitLeave));
});

// Task Type
Breadcrumbs::for('admin.task-type', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.dashboard');
    $trail->push('Tipe Tugas', route('admin.task-type.index'));
});

// Task Type > Create
Breadcrumbs::for('admin.task-type.create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin.task-type');
    $trail->push('Tambah', route('admin.task-type.create'));
});

// Task Type > Edit
Breadcrumbs::for('admin.task-type.edit', function (BreadcrumbTrail $trail, $taskType) {
    $trail->parent('admin.task-type');
    $trail->push($taskType->name);
    $trail->push('Ubah', route('admin.task-type.edit', $taskType));
});