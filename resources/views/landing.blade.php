<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Landing</title>
</head>
<body>
    <div class="p-5 flex items-center justify-center min-h-screen">
        <div class="overflow-x-auto relative">
            <table class="text-sm text-left text-gray-500 dark:text-gray-400 w-full">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Title
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Author
                        </th>
                        <th scope="col" class="py-3 px-6">
                            publish date
                        </th>
                        <th scope="col" class="py-3 px-6">
                            description
                        </th>
                        <th scope="col" class="py-3 px-6">
                            cover
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $comic->title }}
                            </th>
                            <td class="py-4 px-6">
                                {{ $comic->user->name }}
                            </td>
                            <td class="py-4 px-6">
                                {{ $comic->published_date }}
                            </td>
                            <td class="py-4 px-6">
                                {{ strip_tags($comic->description) }}
                            </td>
                            <td class="py-4 px-6 w-1/5">
                                <img src="{{ url('storage/'.$comic->cover) }}" alt="" class="w-full">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>        
    </div>
</body>
</html>