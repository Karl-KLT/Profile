<div id="container_Skills">
    <div>
        @forelse ($skills as $skill)

            <div class="Box container-fluid navbar mt-2" id="{{ $skill->Name }}">

                <div style="letter-spacing: 0.8px;font-weight: bold;">
                    {{ Str::upper($skill->Name) }}
                </div>
                <div class="flex text-secondary" style="font-weight: bold;"><span id="{{ $skill->Name }}Num">
                    <span>
                        {{ $skill->MaxNum }}</span>%
                    </span>
                    @if (!$visitor)
                        @auth
                            <span class="ms-2">
                                <form wire:submit.prevent="remove({{ $skill->id }})">
                                    <button type="submit" style="outline: none" class="hover:text-red-400"><i class='bx bxs-message-square-x'></i></button>
                                </form>
                            </span>
                        @endauth
                    @endif
                </div>
                <div style="display: flex;width: 100%;height: 10px;">
                    <div class="badge bg-secondary w-100 p-0">
                        <div class="badge" id="{{ $skill->Name }}Num_bar" style="float:left;height: 10px;background-color: #A2CABD;width:{{$skill->MaxNum}}%;">&nbsp;</div>
                    </div>
                </div>
            </div>

        @empty
            <div class="Box container-fluid navbar mt-2">
                <div style="letter-spacing: 0.8px;font-weight: bold;letter-spacing: 1px" class="flex justify-center w-100 underline">
                    without any skills
                </div>
            </div>
        @endforelse
    </div>
    @if (!$visitor)
        @auth

            <div class="w-100 mt-2  container-fluid">





                <form wire:submit.prevent='$emit("save")' class="flex">


                    <div class="w-100">
                        <input type="text" placeholder="Name" wire:model.lazy='Name'  maxlength="12" class="form-control" id="">
                    </div>



                    <div class="w-25 mx-2">
                        <input type="text" maxlength="3" placeholder="MaxNum" wire:model.lazy='MaxNum' class="form-control" id="">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-dark text-gray-900">Add</button>
                    </div>
                </form>

                @if($errors->any())
                    <div class="flex my-4 justify-content-between w-100">

                        @error('Name')
                            <div>
                                <span class="error alert alert-danger">{{ $message }}</span>
                            </div>
                        @enderror


                        @error('MaxNum')
                            <div>
                                <span class="error alert alert-danger">{{ $message }}</span>
                            </div>
                        @enderror

                    </div>
                @endif


            </div>
        @endauth
    @endif
    <style>.Box{width: 100%;height: auto;background-color: #CDE4DD;border-radius: 10px; }</style>
</div>

