<x-admin-layout>
    <div class="py-4 w-full">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-2">
                <div class="flex justify-between items-center">
                    <h4>{{ strtoupper('Posts') }}</h4>
                    <a href="{{ route('admin.posts.create') }}"
                       class="px-4 py-2 text-white bg-green-700 hover:bg-green-500 rounded-md">Create</a>
                </div>
                <div class="flex flex-col mt-4">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="align-middle inline-block min-w-full">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="w-full divide-y divide-gray-200">
                                    <form action="">
                                        <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                                ID
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                                Category
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                                Creator
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Title
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                                                Thumbnail
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wide text-center">
                                                Status
                                            </th>
                                            <th scope="col" rowspan="2">
                                                <button type="submit" class="px-4 py-2 border rounded-md">Search
                                                </button>
                                                <a href="{{ route('admin.posts.index') }}"
                                                   class="px-4 py-2 border-red-900 rounded-md">Reset</a>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="flex justify-center">
                                                <select name="category_id" id="category"
                                                        class="block w-auto appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                                    <option value="">---</option>
                                                    @foreach($categories as $category)
                                                        <option
                                                            value="{{ $category->key }}"
                                                            @if(request()->get('category_id') == $category->key) selected @endif>{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td></td>
                                            <td>
                                                <input type="text" id="title" name="title"
                                                       value="{{ request()->get('title') }}"
                                                       class="block w-full appearance-none bg-white border border-gray-400
                                                        rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"/>
                                            </td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        </thead>
                                    </form>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                    @if($posts->count())
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex justify-center">
                                                        {{ $post->id }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex justify-center">
                                                        {{ $post->category->name }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex justify-center">
                                                        {{ $post->user->name }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex">
                                                        {{ subText($post->title, 30) }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex justify-center">
                                                        <img class="object-contain w-20"
                                                             src="{{ asset($post->thumbnail) }}" alt="">
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex justify-center">
                                                        <x-status-view :status="!!$post->status">
                                                        </x-status-view>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex justify-center">
                                                        <div class="flex space-x-2">
                                                            <a href="{{ route('admin.posts.edit', ['post' => $post]) }}"
                                                               class="px-4 py-2 bg-blue-500 hover:bg-blue-700 rounded-md text-white">Edit</a>
                                                            <form
                                                                class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-md text-white"
                                                                method="POST"
                                                                action="{{ route('admin.posts.destroy', ['post' => $post]) }}"
                                                                onsubmit="return confirm('Are you sure?');">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif()
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4">
                    {{ $posts->appends(['sort' => 'id']) }}
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
