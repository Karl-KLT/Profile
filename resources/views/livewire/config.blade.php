<div class="mt-3">
    @if($users)
        <table class="table table-striped table-dark">
            <thead>
            <tr>
                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">name</th>
                <th scope="col" class="text-center">email</th>
                <th scope="col" class="text-center">SID_Link</th>
                <th scope="col" class="text-center">User_Type</th>

            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                        <td class="text-center">{{ $user->Profile->Name }}</td>
                        <td class="text-center">{{ $user->email }}</td>
                        <td class="text-center" style="user-select: text;">{{ $user->Profile->USER_SID }}</td>
                        <td class="text-center">{{ $user->Profile->userType ? 'admin' : 'user' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="d-flex justify-content-center">
            <div>Not found any users</div>
        </div>
    @endif
</div>
