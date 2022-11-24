@extends('admin.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Add Virtual Mining Machine
            <div class="pt-3">
                <a href="{{ route('vmm.create') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('vmm.store') }}" method="POST">
                @csrf
                <div class="form-group pb-2">
                    <label>Title:</label>
                    <input name="title" type="text" class="form-control">
                </div>
                <div class="form-group pb-2">
                    <label>Life Time:</label>
                    <input name="life_time" type="number" class="form-control">
                </div>
                <div class="form-group pb-2">
                    <label>Minimum Invest:</label>
                    <input name="min_invest" type="number" class="form-control">
                </div>
                <div class="form-group pb-2">
                    <label>Distributed Coin:</label>
                    <input name="dist_coin" type="number" class="form-control">
                </div>
                <div class="form-group pb-2">
                    <label>Execution Time:</label>
                    <input name="exe_time" type="text" class="form-control">
                </div>
                <div class="form-group pb-2">
                    <label>Preparation Time:</label>
                    <input name="prep_time" type="number" class="form-control">
                </div>
                <div class="form-group pb-2">
                    <label>Start Time:</label>
                    <input name="start_time" type="datetime-local" class="form-control">
                </div>
                <div class="form-group pb-2">
                    <label for="status">Status:</label>
                    <select name="status" class="form-control" id="status">
                        <option value="draft">Draft</option>
                        <option value="active">Active</option>
                        <option value="in_preparation">In Preparation</option>
                        <option value="running">Running</option>
                        <option value="finished">Finished</option>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
