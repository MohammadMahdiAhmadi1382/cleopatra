@extends('admin.layouts.admin')

{{-- title --}}
@section('title', 'panel list users')

{{-- add styles --}}
@section('add_styles')
@endsection

{{-- add modals --}}
@section('add_modals')
    @include('components.modals.user._modal-delete-user')
    @include('components.modals.log._modal-log')
@endsection

{{-- contents --}}
@section('content')
    <div class="relative flex justify-center w-full h-auto px-2 py-2 mt-10 md:px-4">
        {{-- base --}}
        <section class="relative w-full px-3 bg-white rounded-lg pb-14">
            {{-- header --}}
            <header class="relative w-full py-6">
                <h1 class="text-xl francy md:text-2xl lg:text-3xl">List Users</h1>
            </header>
            {{-- base list users --}}
            <table id="userTable" class="display nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>email</th>
                        {{-- <th></th> --}}
                        <th>actions</th>
                    </tr>
                </thead>
            </table>

        </section>
    </div>

@endsection

{{-- add scripts --}}
@section('add_scripts')

    <script>
        $(document).ready(function() {
            // btn-delete-user
            $(document).on('click', '.btn-delete-user', function() {
                const user_id = $(this).data('user-id');
                const data = {
                    user_id: user_id
                };
                let url = `{{ route('action.user.delete') }}`;
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, keep it'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // action delete
                        ReqAjaxDelete(url, 'DELETE', data, handleDeleteSuccess, handleError);
                    }
                });

            });
            // handleDeleteSuccess
            function handleDeleteSuccess(response) {
                if (response.status == "success") {
                    showMessage(response.message);
                    $('#userTable').DataTable().ajax.reload();
                } else {
                    showErrorMessage(response.message);
                }
            }

            // btn-history-user
            $(document).on('click', '.btn-history-user', function() {
                const user_id = $(this).data('user-id');
                const data = {
                    user_id: user_id
                };
                let url = `{{ route('get.user.log') }}`;
                // action get log
                ReqAjax(url, 'DELETE', data, handleHistorySuccess, handleError);
            });

            // handleHistorySuccess
            function handleHistorySuccess(response) {
                if (response.status == "success") {
                    showMessage(response.message);
                } else {
                    showErrorMessage(response.message);
                }
            }


            // user table
            $('#userTable').DataTable({
                responsive: true, // Enable responsive design
                paging: true, // Enable pagination
                searching: true, // Enable search box
                ordering: true, // Enable column ordering
                processing: true, // Show processing indicator
                serverSide: true, // Enable server-side processing
                ajax: {
                    url: '{{ route('get.data.users') }}', // Laravel route
                    type: 'GET', // HTTP method
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `
                                <div class="relative flex flex-wrap items-center content-center justify-start">
                                    <div class="cursor-pointer btn-delete-user" data-user-id="${row.id}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24"><path fill="#ef4444" d="M10 5h4a2 2 0 1 0-4 0M8.5 5a3.5 3.5 0 1 1 7 0h5.75a.75.75 0 0 1 0 1.5h-1.32l-1.17 12.111A3.75 3.75 0 0 1 15.026 22H8.974a3.75 3.75 0 0 1-3.733-3.389L4.07 6.5H2.75a.75.75 0 0 1 0-1.5zm2 4.75a.75.75 0 0 0-1.5 0v7.5a.75.75 0 0 0 1.5 0zM14.25 9a.75.75 0 0 0-.75.75v7.5a.75.75 0 0 0 1.5 0v-7.5a.75.75 0 0 0-.75-.75"/></svg>
                                    </div>
                                    <div class="cursor-pointer mx-2 btn-history-user" data-user-id="${row.id}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 512 512"><path fill="#4b5563" d="M48.5 224H40c-13.3 0-24-10.7-24-24V72c0-9.7 5.8-18.5 14.8-22.2S50.1 48.1 57 55l41.6 41.6c87.6-86.5 228.7-86.2 315.8 1c87.5 87.5 87.5 229.3 0 316.8s-229.3 87.5-316.8 0c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0c62.5 62.5 163.8 62.5 226.3 0s62.5-163.8 0-226.3c-62.2-62.2-162.7-62.5-225.3-1L185 183c6.9 6.9 8.9 17.2 5.2 26.2S177.7 224 168 224z"/></svg>
                                    </div>
                                </div>
                            `;
                        }
                    }
                ],
                // <button class="btn btn-primary btn-sm" onclick="editUser(${row.id})">Edit</button>
                // <button class="btn btn-danger btn-sm" onclick="deleteUser(${row.id})">Delete</button>
                language: {
                    search: "Search:",
                    lengthMenu: "Show _MENU_ entries per page",
                    info: "Showing _START_ to _END_ of _TOTAL_ entries",
                    paginate: {
                        previous: "Previous",
                        next: "Next",
                        first: "First",
                        last: "Last"
                    }
                }
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const dropdownToggle = document.querySelector('[data-dropdown-toggle]');
            const dropdownMenu = document.querySelector('[data-dropdown-menu]');

            dropdownToggle.addEventListener('click', function() {
                dropdownMenu.classList.toggle('hidden');
            });
        });
    </script>
@endsection
