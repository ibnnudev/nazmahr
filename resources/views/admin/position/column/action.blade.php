<x-edit id="btnEdit" route="{{ route('admin.position.edit', $data->id) }}" />
<x-delete id="btnDelete" onclick="btnDelete('{{ $data->id }}')" />
