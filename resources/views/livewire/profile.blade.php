<div>

    <div class="mb-3">
        <span>copy Link of your Profile :</span>
        <span wire:click='copySidLink' class="cursor-pointer">
            <i class='bx bxs-copy-alt'></i>
        </span>
    </div>

    <div class="row rounded">

        <div class="col-md-6 flex justify-content-between align-items-center">

            <div>
                <div id="select_img" class="cursor-pointer border rounded-circle">

                    <img wire:ignore style="width: 155px;height: 120px;border-radius: 100%;" id="img" src="{{ $Image ? asset($Image) : asset('storage/imgs/default-user-image.png') }}" alt="Profile_image">

                </div>

                <div hidden>
                    <input id="fileInput" wire:model='Image' accept="image/*" type="file" >
                </div>
                <script>
                    function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                document.getElementById('img').src = e.target.result
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                    document.addEventListener('DOMContentLoaded',function(){
                        document.getElementById('select_img').onclick = () => {
                            var file = document.getElementById('fileInput');
                            file.click();
                            file.onchange = (event) => {
                                readURL(event.target);
                            }
                        }
                    })
                </script>
            </div>

            <div class="ms-4 w-100">

                <div class="my-2">
                    <input type="text" wire:model.lazy='Name' placeholder="Name . . ." class="form-control">
                </div>

                <div class="my-2">
                    <input type="text" wire:model.lazy='Bio' placeholder="Bio . . ." class="form-control">
                </div>

                <div class="my-2">
                    <input type="text" wire:model.lazy='localBio' placeholder="Local Bio . . ." class="form-control">
                </div>

            </div>
        </div>


        <div class="col-md-6 my-3">
            <div style="user-select: none;" class="d-flex p-2 firstBox container-fluid justify-content-start w-100 align-items-center">
                <div class="w-100 @auth py-2 @endauth" id="scroll_skills" style="height: auto;max-height: 245px; overflow: auto;">

                    <livewire:skills />

                </div>
            </div>
        </div>

    </div>

    {{-- <div>
        <livewire:accounts />
    </div> --}}



    <div class="my-3">

        <input type="text" placeholder="UR Message . . ." wire:model.lazy="Message" class="form-control">
        {{-- <textarea id="editor" wire:model='Message'>{{ $Message }}</textarea> --}}

    </div>


    <div class="text-end mb-2">

        <button class="btn btn-outline-dark" type="submit" wire:click='$emit("Save")'>
            <div wire:loading.remove>
                Save
            </div>
            <div wire:loading>
                <div class="spinner-border"></div>
            </div>
        </button>

    </div>
    {{-- <script>
        $(document).ready(function(){
            CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
                toolbar: {
                    items: [
                        'undo','selectAll','redo','|',
                        'bold','italic','underline','subscript','superscript','|',
                        'outdent','indent','|',
                        'findAndReplace','fontSize','fontFamily','fontColor','link','insertImage'
                    ],
                    shouldNotGroupWhenFull: true
                },
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                },
                placeholder: 'Message . . .',
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                fontSize: {
                    options: [10, 12, 14, 'default', 18, 20, 22, 25 ],
                    supportAllValues: true
                },
                htmlSupport: {
                    allow: [
                        {
                            name: /.*/,
                            attributes: true,
                            classes: true,
                            styles: true
                        }
                    ]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [
                        {
                            marker: '@',
                            feed: [
                                //  ex : '@html'
                            ],
                            minimumCharacters: 1
                        }
                    ]
                },

                removePlugins: [
                    'CKBox',
                    'CKFinder',
                    'EasyImage',

                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',

                    'MathType'
                ]
            }).then((editor)=>{

                editor.model.document.on('change',function(){



                })

            });

        })

    </script> --}}


</div>
