<?php

namespace App\Interfaces;

interface RequestAttendanceInterface
{
    public function getAll();
    public function getById($id);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
    public function getAttendanceTypes();
    public function updateAdmin($id, $data);
}
