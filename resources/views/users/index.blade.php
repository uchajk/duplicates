@extends('app')
@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
@section('content')
    <div class="container">
        <livewire:export-button :table-id="$dataTable->getTableId()" />
        {{ $dataTable->table() }}
    </div>
@endsection
