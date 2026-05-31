@extends('layouts.app', ['title' => 'Edit Exhibition'])

@section('content')

<a href="/admin/exhibitions" class="text-sm font-semibold text-amber-700 hover:text-black">
    ← Back to Admin
</a>

<section class="mt-8 bg-white rounded-2xl shadow border border-stone-200 p-8 max-w-3xl">

    <h1 class="text-4xl font-bold mb-8">
        Edit Exhibition
    </h1>

    <form method="POST" action="/admin/exhibitions/{{ $exhibition->id }}" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-semibold mb-2">Title</label>
            <input
                type="text"
                name="title"
                value="{{ old('title', $exhibition->title) }}"
                class="w-full border border-stone-300 rounded-xl px-4 py-3"
            >
        </div>

        <div>
            <label class="block font-semibold mb-2">Slug</label>
            <input
                type="text"
                name="slug"
                value="{{ old('slug', $exhibition->slug) }}"
                class="w-full border border-stone-300 rounded-xl px-4 py-3"
            >
        </div>

        <div>
            <label class="block font-semibold mb-2">Description</label>
            <textarea
                name="description"
                rows="5"
                class="w-full border border-stone-300 rounded-xl px-4 py-3"
            >{{ old('description', $exhibition->description) }}</textarea>
        </div>

        <div>
            <label class="block font-semibold mb-2">NetX Asset ID</label>
            <input
                type="text"
                name="netx_asset_id"
                value="{{ old('netx_asset_id', $exhibition->netx_asset_id) }}"
                class="w-full border border-stone-300 rounded-xl px-4 py-3"
            >
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label class="block font-semibold mb-2">Start Date</label>
                <input
                    type="date"
                    name="start_date"
                    value="{{ old('start_date', $exhibition->start_date) }}"
                    class="w-full border border-stone-300 rounded-xl px-4 py-3"
                >
            </div>

            <div>
                <label class="block font-semibold mb-2">End Date</label>
                <input
                    type="date"
                    name="end_date"
                    value="{{ old('end_date', $exhibition->end_date) }}"
                    class="w-full border border-stone-300 rounded-xl px-4 py-3"
                >
            </div>
        </div>

        <label class="flex items-center gap-3">
            <input
                type="checkbox"
                name="is_published"
                value="1"
                @checked(old('is_published', $exhibition->is_published))
            >

            <span class="font-semibold">Published</span>
        </label>

        <button class="bg-black text-white px-6 py-3 rounded-xl hover:bg-stone-800">
            Save Changes
        </button>
    </form>

</section>

@endsection