@section('title')
Customers
@endsection
@extends('admin.master')
@section('content')
<div class="mdl-grid ui-tables">
    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h1 class="mdl-card__title-text">Customers</h1>
            </div>
            <div class="mdl-card__supporting-text no-padding">
                <table class="mdl-data-table mdl-js-data-table bordered-table">
                    <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric" style="width:30px">No.</th>
                            <th class="mdl-data-table__cell--non-numeric">Full Name</th>
                            <th class="mdl-data-table__cell--non-numeric">Avatar</th>
                            <th class="mdl-data-table__cell--non-numeric">Phone</th>
                            <th class="mdl-data-table__cell--non-numeric">Email</th>
                            <th class="mdl-data-table__cell--non-numeric">Address</th>
                            <th class="mdl-data-table__cell--non-numeric">Job</th>
                            <th class="mdl-data-table__cell--non-numeric">Job Address</th>
                            <th class="mdl-data-table__cell--non-numeric">Active</th>
                            <th class="mdl-data-table__cell--non-numeric">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($customers) && $customers->count() > 0)
                        @foreach($customers as $key => $item)
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">{{ $key + 1 }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->full_name ?? 'Chưa cập nhật' }}</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <img src="{{ $item->avatar ? Storage::url($item->avatar) : '' }}" alt="" height="30" width="30">
                            </td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->phone ?? 'Chưa cập nhật' }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->email ?? 'Chưa cập nhật' }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->address ?? 'Chưa cập nhật'}}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->job ?? 'Chưa cập nhật' }}</td>
                            <td class="mdl-data-table__cell--non-numeric">{{ $item->job_address ?? 'Chưa cập nhật' }}</td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green"
                                    for="active{{ $item->id }}">
                                    <input name="active"
                                        type="checkbox"
                                        id="active{{ $item->id }}"
                                        class="mdl-switch__input off-account"
                                        data-href = "{{ route('admin.customer.update', ['id' => $item->id ]) }}"
                                        {{ !empty($item) && $item->active == 1 ? 'checked' : "" }}>
                                    <span class="mdl-switch__label">Active</span>
                                </label>
                            </td>
                            <td class="mdl-data-table__cell--non-numeric">
                                <a  href="{{ route('admin.customer.delete', ['id' => $item->id]) }}"
                                    class="delete-item mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red">
                                    Delete
                                </a>
                                {{-- <a href="{{ route('admin.customer.view', ['id' => $item->id ]) }}"
                                    class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-orange">
                                    View
                                </a> --}}
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="8" class="mdl-data-table__cell--non-numeric" style="text-align: center">
                                No data
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
@include('admin.include.modal.delete')
@endsection
@push('scripts')
    <script>
        $( function() {
            $('.delete-item').on('click', function (e) {
                e.preventDefault();
                let urlDelete = $(this).attr('href');
                $('#form-delete').attr('action', urlDelete);
                $('#modalDelete').modal('show');
            });

            $('.off-account').on('change', function () {
                let urlUpdate = $(this).attr('data-href');
                let active = 0;
                if($(this).is(':checked')) {
                    active = 1
                }
                $.ajax({
                    url: urlUpdate,
                    type: "PUT",
                    data: { active: active },
                    success: function () {
                        alert('Update status success !')
                    },
                    error: function () {
                        alert('Update status fail !')
                    }
                });
            });
        });
    </script>
@endpush
