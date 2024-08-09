@extends('layouts/layout')
@section('section')
    <div class="container p-5">
        <h1>Search</h1>

        <input type="text" name="search" id="search" class="form-control"
            placeholder="Search name / designation / department">


        <div class="row" id="userList">
            @foreach ($users as $user)
                <div class="col-6 mt-4 user-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="user-name">{{ $user->name }}</h4>
                            <p class="user-department"> {{ $user->department->name }} </p>
                            <p class="user-designation"> {{ $user->designation->name }} </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection


@push('script')
    <script>
        $(document).ready(function() {
            $('#search').on('keyup', function() {
                var searchKeyword = $(this).val().toLowerCase();

                $("#userList .user-card").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(searchKeyword) > -1)
                });
            });
        });
    </script>
@endpush
