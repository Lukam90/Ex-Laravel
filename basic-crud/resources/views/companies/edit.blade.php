@extends("layout")

@section("content")
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Edit Company</h2>
            </div>

            <div class="pull-right mb-3">
                <a href="{{ route('companies.index') }}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    @if (session("status"))
        <div class="alert alert-success mb-1 mt-1">
            {{ session("status") }}
        </div>
    @endif

    <form action="{{ route('companies.update', $company->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method("PUT")

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Company Name:</strong>

                    <input type="text" name="name" class="form-control" value="{{ $company->name }}" />

                    @error("name")
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Country:</strong>

                    <input type="text" name="country" class="form-control" value="{{ $company->country }}" />

                    @error("country")
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary ml-3 mt-3">Submit</button>
        </div>
    </form>
@endsection