@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Import Creditor List</h3>
        </div>
        <div class="panel-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('creditor.list.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="file">Choose Excel File</label>

                    <input type="file" name="file" class="form-control" id="file" required>
                    @error('file')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Import List</button>
            </form>
        </div>
    </div>
@endsection
