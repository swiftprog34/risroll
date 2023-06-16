@extends('layouts.admin_layout')

@section('title', 'Редактировать город')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать город: {{ $site['city'] }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('site.update', $site['id']) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="cityInput">Город</label>
                                    <input type="text" name="city" class="form-control" id="cityInput"
                                           placeholder="Название города" value="{{ $site['city'] }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="prefixInput">Префикс города</label>
                                    <input type="text" name="prefix" class="form-control" id="prefixInput"
                                           placeholder="Указывается префикс для города, [префикс].risroll.ru"
                                           value="{{ $site['prefix'] }}"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="restaurantIDInput">UID службы доставки</label>
                                    <input type="number" name="restaurantID" class="form-control" id="restaurantIDInput"
                                           placeholder="UID службы доставки (мобидел)"
                                           value="{{ $site['restaurantID'] }}"
                                           required>
                                </div>
                                <div class="form-group">
                                    <label for="prefixInput">Идентификатор предприятия</label>
                                    <input type="number" name="wid" class="form-control" id="prefixInput"
                                           placeholder="Идентификатор предприятия (id) (мобидел)"
                                           value="{{ $site['wid'] }}"
                                           required>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
                        </form>
                        <a class="btn btn-info btn-sm" href="{{ route('fetchMobidelData', ['restaurantID' => $site['restaurantID'], 'wid' => $site['wid']]) }}">
                            Выгрузить товары и категории из Мобидел
                        </a>
                    </div>
                    <h5 class="mt-4 mb-2">Редактирование телефонов</h5>
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('phone.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="phoneInput">Новый телефон</label>
                                    <input type="number" name="number" class="form-control" id="phoneInput"
                                           placeholder="Номер телефона (только цифры)" value="{{ $site['id'] }}" required>
                                </div>

                                <input type="hidden" name="site_id"  value="{{ $site['id'] }}" required>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 5%">
                                    ID
                                </th>
                                <th>
                                    Номер
                                </th>
                                <th style="width: 30%">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($phones as $phone)
                                <tr>
                                    <td>
                                        {{ $phone['id'] }}
                                    </td>
                                    <td>
                                        {{ $phone['number'] }}
                                    </td>

                                    <td class="project-actions text-right">
                                        <form action="{{ route('phone.destroy', $phone['id']) }}" method="POST"
                                              style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                <i class="fas fa-trash">
                                                </i>
                                                Удалить
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    <h5 class="mt-4 mb-2">Редактирование точек самовывоза</h5>
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('pickup_point.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="pickupInput">Новая точка самовывоза</label>
                                    <input type="text" name="name" class="form-control" id="pickupInput"
                                           placeholder="Номер телефона (только цифры)" required>
                                </div>

                                <input type="hidden" name="site_id" value="{{ $site['id'] }}" required>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 5%">
                                    ID
                                </th>
                                <th>
                                    Название
                                </th>
                                <th style="width: 30%">
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($pickupPoints as $pickupPoint)
                                <tr>
                                    <td>
                                        {{ $pickupPoint['id'] }}
                                    </td>
                                    <td>
                                        {{ $pickupPoint['name'] }}
                                    </td>

                                    <td class="project-actions text-right">
                                        <form action="{{ route('pickup_point.destroy', $pickupPoint['id']) }}" method="POST"
                                              style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete-btn">
                                                <i class="fas fa-trash">
                                                </i>
                                                Удалить
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
