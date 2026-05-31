@extends('layouts.app', ['title' => 'Admin Dashboard'])

@section('content')

<div class="flex justify-between items-center mb-8">

    <div>
        <p class="text-sm uppercase tracking-[0.3em] text-amber-700 font-semibold mb-2">
            CMS Admin
        </p>

        <h1 class="text-4xl font-bold">
            Manage Exhibitions
        </h1>
    </div>

    <a href="/admin/exhibitions/create" class="bg-black text-white px-5 py-3 rounded-xl hover:bg-stone-800">
        + New Exhibition
    </a>

</div>

<div class="bg-white rounded-2xl shadow border border-stone-200 overflow-hidden">

    <table class="w-full">

        <thead class="bg-stone-100 border-b border-stone-200">
            <tr class="text-left">

                <th class="p-4">Title</th>
                <th class="p-4">Asset ID</th>
                <th class="p-4">Published</th>
                <th class="p-4">Dates</th>
                <th class="p-4">Actions</th>

            </tr>
        </thead>

        <tbody>

            @foreach ($exhibitions as $exhibition)

            <tr class="border-b border-stone-100 hover:bg-stone-50">

                <td class="p-4 font-semibold">
                    {{ $exhibition->title }}
                </td>

                <td class="p-4 text-sm text-stone-600">
                    {{ $exhibition->netx_asset_id }}
                </td>

                <td class="p-4">

                    @if ($exhibition->is_published)

                    <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                        Published
                    </span>

                    @else

                    <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                        Draft
                    </span>

                    @endif

                </td>

                <td class="p-4 text-sm text-stone-600">
                    {{ $exhibition->start_date }}
                </td>

                <td class="p-4">
                    <a href="/admin/exhibitions/{{ $exhibition->id }}/edit" class="text-blue-600 hover:underline">
                        Edit
                    </a>
                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection
