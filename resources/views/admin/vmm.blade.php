@extends('admin.master')

@section('content')
    <div class="card">
        <div class="card-header">
            Virtual Mining Machine
            <div class="pt-3">
                <a href="{{ route('vmm.create') }}" class="btn btn-primary btn-sm">Add VMM</a>
            </div>
        </div>
        <div class="card-body">

            @if (count($vmms) > 0)
                @foreach ($vmms as $vmm)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $vmm->title }}</h5>
                            <p class="card-text">
                            <ul>
                                <li><b>Life Time:</b> {{ $vmm->life_time }} Minutes</li>
                                <li><b>Minimum Invest:</b> {{ $vmm->min_invest }}$</li>
                                <li><b>Distributed Coin:</b> {{ $vmm->dist_coin }}</li>
                                <li><b>Execution Time:</b> {{ $vmm->exe_time }} seconds</li>
                                <li><b>Preparation Time:</b> {{ $vmm->prep_time }} Mintues</li>
                                <li><b>Start Time:</b> {{ $vmm->start_time }}</li>
                                <li><b>Status:</b> {{ $vmm->status }}</li>
                            </ul>
                            </p>
                            <a href="#" class="btn btn-info">Update</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="text-center">No VMM Found</div>
            @endif
        </div>
    </div>
@endsection
