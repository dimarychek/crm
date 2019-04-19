@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="box box-primary">
                <h1 class="display-3 box-header">Update</h1>
                <div class="box-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br />
                    @endif
                    <form method="post" action="{{ route('companies.update', $company->id) }}">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="first_name">Name:</label>
                            <input type="text" class="form-control" name="name" value={{ $company->name }} />
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email" value={{ $company->email }} />
                        </div>
                        <div class="form-group">
                            <label for="country">Website:</label>
                            <input type="text" class="form-control" name="country" value={{ $company->website }} />
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
