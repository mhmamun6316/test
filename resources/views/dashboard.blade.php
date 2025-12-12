@extends('layouts.app')

@section('title', __('common.dashboard'))

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="mb-0">{{ __('common.dashboard') }}</h2>
</div>

<div class="row">
    <div class="col-md-3">
        <div class="stat-card blue">
            <h3>{{ $totalUsers }}</h3>
            <p><i class="bi bi-people me-2"></i>{{ __('common.total_users') }}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card green">
            <h3>{{ $activeUsers }}</h3>
            <p><i class="bi bi-check-circle me-2"></i>{{ __('common.active_users') }}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card orange">
            <h3>{{ $inactiveUsers }}</h3>
            <p><i class="bi bi-x-circle me-2"></i>{{ __('common.inactive_users') }}</p>
        </div>
    </div>
    <div class="col-md-3">
        <div class="stat-card red">
            <h3>{{ $newUsersToday }}</h3>
            <p><i class="bi bi-person-plus me-2"></i>{{ __('common.new_users_today') }}</p>
        </div>
    </div>
</div>

<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="bi bi-clock-history me-2"></i>{{ __('common.recent_users') }}</h5>
            </div>
            <div class="card-body">
                @if($recentUsers->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>{{ __('common.profile') }}</th>
                                    <th>{{ __('common.name') }}</th>
                                    <th>{{ __('common.email') }}</th>
                                    <th>{{ __('common.status') }}</th>
                                    <th>{{ __('common.created_at') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentUsers as $user)
                                <tr>
                                    <td>
                                        @if($user->profile_photo)
                                            <img src="{{ asset('storage/' . $user->profile_photo) }}" 
                                                 alt="{{ $user->name }}" class="table-img">
                                        @else
                                            <div class="table-img bg-primary d-flex align-items-center justify-content-center text-white">
                                                {{ strtoupper(substr($user->name, 0, 1)) }}
                                            </div>
                                        @endif
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if($user->status === 'active')
                                            <span class="badge bg-success">{{ __('common.active') }}</span>
                                        @else
                                            <span class="badge bg-danger">{{ __('common.inactive') }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $user->created_at->format('M d, Y') }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-muted text-center mb-0">{{ __('common.no_data') }}</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
