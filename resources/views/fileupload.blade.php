<x-guest-fileeupload>

    <x-auth.fileupload>

        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>


        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('filepupload.post') }}">
            @csrf



            <div class="p-1">
                <div class="p-1">
                    <div class="mt-4">



                        <x-jet-label for="profile_photo_path" value="{{ __('Set Your Profile Picture') }}" />
                        <input class="block mt-1 w-full" type="file" id="profile_photo_path" name="profile_photo_path"
                            :value="old({{ Auth::user()->profile_photo_url }})">
                        <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3"
                            role="alert">
                            <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path
                                    d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                            </svg>
                            <p>Large images might not get uploaded.</p>
                        </div>
                    </div>
                </div>




                <div class="text-center mt-6">
                    <button
                        class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                        type="submit" style="transition: all 0.15s ease 0s;">
                        Complete Registration
                    </button>
                </div>
                @section('scripts')
                    <script>
                        FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginImageValidateSize, FilePondPluginFileValidateType,
                            FilePondPluginFileValidateSize, FilePondPluginImageTransform);

                        const inputElement = document.querySelector('input[id="profile_photo_path"]');
                        // const pond = FilePond.create(inputElement, {
                        //     maxFileSize: 2097152,
                        //     labelMaxFileSizeExceeded: 'File is too large',
                        // allowImageValidateSize: true,

                        //     acceptedFileTypes: ['image/png', 'image/jpeg'],
                        //     fileValidateTypeDetectType: (source, type) => new Promise((resolve, reject) => {

                        //         // Do custom type detection here and return with promise

                        //         resolve(type);
                        //     }),
                        //     imageValidateSizeLabelFormatError: 'Image type not supported',
                        // });


                        const pond = FilePond.create(inputElement, {
                            imageResizeTargetWidth: 600,
                            imageCropAspectRatio: "1:1",
                            acceptedFileTypes: ['image/png', 'image/jpeg'],
                            imageTransformVariants: {
                                thumb_medium_: (transforms) => {
                                    transforms.resize = {
                                        size: {
                                            width: 1080,
                                            height: 1080,
                                        },
                                    };
                                    return transforms;
                                },
                                thumb_small_: (transforms) => {
                                    transforms.resize = {
                                        size: {
                                            width: 1080,
                                            height: 1080,
                                        },
                                    };
                                    return transforms;
                                },
                            },
                        });
                        FilePond.setOptions({
                            server: {
                                instantUpload: false,
                                url: '/upload',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                }
                            }
                        });
                    </script>
                @endsection
            </div>
        </form>

    </x-auth.fileupload>

</x-guest-fileeupload>
