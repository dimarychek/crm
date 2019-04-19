@extends('adminlte::page')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update</h1>

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
            <form method="post" action="{{ route('employees.update', $employee->id) }}">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" name="first_name" value={{ $employee->first_name }} />
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" name="last_name" value={{ $employee->last_name }} />
                </div>
                <div class="form-group">
                    <label for="company_id">Company</label>
                    <select class="form-control" id="company_id" name="company_id">
                        @foreach($companies as $company)
                            @if($company->id == $employee->company_id)
                                <option value="{{ $company->id }}" selected>{{ $company->name }}</option>
                            @else
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" class="form-control" name="email" value={{ $employee->email }} />
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" class="form-control" name="phone" value={{ $employee->phone }} />
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
