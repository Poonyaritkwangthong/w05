<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Promotion Form - Laravel 9 CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add promotion</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('promotion.index') }}"> Back</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('promotion.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Promotion Name:</strong>
                        <input type="text" name="promotion_name" class="form-control" placeholder="Promotion Name">
                        <strong>Promotion Start:</strong>
                        <input type="date" name="promotion_start" class="form-control" placeholder="Promotion Start">
                        <strong>Promotion End:</strong>
                        <input type="date" name="promotion_end" class="form-control" placeholder="Promotion Emd">
                        <strong>Percent Discount:</strong>
                        <input type="float" name="percent_discount" class="form-control" placeholder="Percent Discount">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>