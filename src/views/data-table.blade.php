{{ isset($table) ? $table->table($attributes ?? []) : $dataTable->table($attributes ?? []) }}

@push('scripts')
    {{ isset($table) ? $table->scripts() : $dataTable->scripts() }}
@endpush
