<x-layout>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dicas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a
                href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Dicas</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <x-alert />
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Dicas</h3>
              <div class="card-tools">
                <a class="btn btn-info btn-flat" type="button"
                  href="{{ route('tips.create') }}">
                  <i class="fas fa-plus"></i>
                  Criar
                </a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table-bordered table-striped table" id="example1">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Imagem</th>
                    <th>Descrição</th>
                    <th style="width: 40px;">Ações</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($tips as $tip)
                    <tr>
                      <td>{{ $tip->id }}</td>
                      <td>
                        <img src="{{ $tip->image_url }}"
                          alt="{{ $tip->name }}"
                          style="object-fit: cover;aspect-ratio:16/9;display:block;vertical-align:middle;max-width:100%;height:60px">
                      </td>
                      <td>{{ $tip->description }}</td>
                      <td>
                        <div class="btn-group">
                          <a class="btn btn-info btn-flat" type="button"
                            href="{{ route('tips.edit', ['tip' => $tip->id]) }}">
                            <i class="fas fa-edit"></i>
                          </a>
                          <form
                            action="{{ route('tips.destroy', ['tip' => $tip->id]) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-flat"
                              type="submit">
                              <i class="fas fa-trash"></i>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

  <x-slot:script>
    <script>
      $(function() {
        $("#example1").DataTable({
          "language": {
            "url": '/plugins/datatables-i18n/pt-PT.json',
          },
          "responsive": true,
          "lengthChange": true,
          "autoWidth": false,
        });
      });
    </script>
  </x-slot>
</x-layout>
