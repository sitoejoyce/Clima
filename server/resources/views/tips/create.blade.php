<x-layout>
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Criar</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item">
              <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
              <a href="{{ route('tips.index') }}">Dicas</a>
            </li>
            <li class="breadcrumb-item active">Criar</li>
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
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Criar</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('tips.store') }}" method="POST"
              enctype="multipart/form-data">
              <div class="card-body">
                @csrf


                <div class="form-group">
                  <label for="description">Descrição</label>
                  <textarea id="description" name="description" required
                    @class([
                        'form-control',
                        'is-invalid' => $errors->has('description'),
                        'is-valid' => $errors->any() && !$errors->has('description'),
                    ])>{{ old('description') }}</textarea>
                  @error('description')
                    <span
                      class="error invalid-feedback">{{ $message }}</span>
                  @enderror

                </div>

                <div class="form-group">
                  <label for="image">Image</label>
                  <input id="image" name="image" type="file"
                  required
                    value="{{ old('image') }}" accept=".jpeg,.jpg,.png"
                    required @class([
                        'form-control',
                        'is-invalid' => $errors->has('image'),
                        'is-valid' => $errors->any() && !$errors->has('image'),
                    ])>
                  @error('image')
                    <span
                      class="error invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button class="btn btn-primary" type="submit">Enviar</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</x-layout>
