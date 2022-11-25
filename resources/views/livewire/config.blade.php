<div class="mt-3">
    @if($users)
        <table class="table table-striped table-dark">
            <thead>
            <tr>

                <th scope="col" class="text-center">#</th>
                <th scope="col" class="text-center">name</th>
                <th scope="col" class="text-center">email</th>
                <th scope="col" class="text-center">SID</th>
                <th scope="col" class="text-center">Type</th>

            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                        <td class="text-center">{{ $user->Profile->Name }}</td>
                        <td class="text-center">{{ $user->email }}</td>
                        <td class="text-center" style="user-select: text;">{{ $user->Profile->USER_SID }}</td>
                        @if($user->email == auth()->user()->email)
                            <td class="text-center">{{ $user->Profile->userType ? 'admin' : 'user' }} ( you )</td>
                        @else
                            <td class="text-center">

                                <form action="{{ route('saveProm') }}" method="POST">
                                    @csrf

                                    <select name="prom" id="prom" class="text-dark">
                                        <option value="{{ $user->Profile->userType ? 1 : 0 }}" selected>{{ $user->Profile->userType ? 'admin' : 'user' }}</option>
                                        <option value="{{ $user->Profile->userType ? 0 : 1 }}">{{ $user->Profile->userType ? 'user' : 'admin' }}</option>
                                    </select>

                                    <button id="sub" type="submit" hidden></button>
                                    <input type="text" name="id" value="{{ $user->id }}" hidden>
                                    <script>document.getElementById('prom').addEventListener('change',function(){document.getElementById('sub').click();})</script>
                                </form>

                            </td>
                        @endif
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
