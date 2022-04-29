{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Id do Cliente</th>
        <th>Nome do Cliente</th>
        <th>Email do Cliente</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach ($clientes as $cliente): ?>
        <tr>
        <td><?= $cliente->id; ?></td>
        <td><?= $cliente->name; ?></td>
        <td><?= $cliente->email; ?></td>
        <td>
          <div class="d-flex justify-content-around">
            <form method="GET" action="/clientes/{{$cliente->id}}/editar">
              @csrf
              <button class="btn btn-outline-warning btn-sm"><i class="bi bi-pencil-square"></i></button>
            </form>

            <form method="POST" action="/clientes/remover/{{$cliente->id}}">
              @csrf
              <button class="btn btn-outline-danger btn-sm"> <i class="bi bi-trash3"></i> </button>
            </form>
          </div>
        </td>
        <?php endforeach; ?>
      </tr>
    </tbody>
</table>
<div class="m-2">
  {{ $clientes->links() }}
</div>

