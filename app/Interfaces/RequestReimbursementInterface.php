<?php

namespace App\Interfaces;

interface RequestReimbursementInterface
{
    public function getAll();
    public function getById($id);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
    public function updateAdmin($id, $data);
    public function changeStatus($id, $status);
}
