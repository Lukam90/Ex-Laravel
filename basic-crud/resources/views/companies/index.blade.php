@extends("layout")

@section("content")
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Example Tutorial</h2>
            </div>

            <div class="pull-right mb-2">
                <a href="{{ route('companies.create') }}" class="btn btn-success">Create Company</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get("success"))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Company Name</th>
            <th>Country</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($companies as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->country }}</td>

                <td>
                    <form action="{{ route('companies.destroy', $company->id) }}" method="POST">
                        <a href="{{ route('companies.edit', $company->id) }}" class="btn btn-primary">Edit</a>

                        @csrf

                        @method("DELETE")

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $companies->links() }}
@endsection