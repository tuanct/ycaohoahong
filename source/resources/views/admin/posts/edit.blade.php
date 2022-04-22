<x-admin-layout>

    <div class="py-4 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex justify-end">
                    <a href="{{ route('admin.posts.index') }}"
                       class="px-4 py-2 bg-green-700 hover:bg-green-500 text-slate-100 rounded-md">Back</a>
                </div>
                <div class="flex flex-col">
                    <div class="space-y-8 divide-y divide-gray-200">
                        <form
                            action="{{ route('admin.posts.update',['post' => $post]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="sm:col-span-6">
                                <label for="category" class="block text-sm font-medium text-gray-700"> Category </label>
                                <div class="mt-1">
                                    <select name="category" id="category"
                                            class="block appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                        @foreach($categories as $key => $category)
                                            <option value="{{ $category->key }}"
                                                    @if($category->key == $post->category_id) selected @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('category') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="sm:col-span-6">
                                <label for="title" class="block text-sm font-medium text-gray-700"> Title </label>
                                <div class="mt-1">
                                    <input type="text" id="title" name="title" value="{{ $post->title }}"
                                           class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                </div>
                                @error('title') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="sm:col-span-6">
                                <label for="thumbnail" class="block text-sm font-medium text-gray-700">
                                    Thumbnail </label>
                                <div class="mt-1">
                                    <input type="file" id="thumbnail" name="thumbnail"
                                           class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                </div>
                                @error('thumbnail') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                <img src="{{ asset($post->thumbnail) }}" class="w-48" alt="">
                            </div>
                            <div class="sm:col-span-6">
                                <label for="content" class="block text-sm font-medium text-gray-700"> Content </label>
                                <div class="mt-1">
                                    <textarea id="editor" name="content" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal
                                    transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                              rows="5">{!! $post->content !!}</textarea>
                                </div>
                                @error('content') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>

                            <div class="sm:col-span-6">
                                <label for="tags" class="block text-sm font-medium text-gray-700"> Tags </label>
                                <div class="mt-1">
                                    <input type="text" id="tags" name="tags"
                                           class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                </div>
                                @error('tags') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                                <script>
                                    let tagify = new Tagify(document.querySelector('[name="tags"]'));
                                    @foreach($post->tags as $tag)
                                    tagify.addTags([{"value":"{{ $tag->value }}"}])
                                    @endforeach
                                </script>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="status" class="block text-sm font-medium text-gray-700"> Status </label>
                                <div class="mt-1">
                                    <input type="radio" id="status" name="status"
                                           value="1" {{ $post->status ? 'checked' : '' }}> Active
                                    <input type="radio" id="status" name="status"
                                           value="0" {{ !$post->status ? 'checked' : '' }}> Inactive
                                </div>
                                @error('status') <span class="text-red-400 text-sm">{{ $message }}</span> @enderror
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-md">
                                    Edit
                                </button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>
    </div>
</x-admin-layout>


