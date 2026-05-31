@extends('layouts.app', ['title' => 'Create Exhibition'])

@section('content')

<a href="/admin/exhibitions" class="text-sm font-semibold text-amber-700 hover:text-black">
    ← Back to Admin
</a>

<section class="mt-8 bg-white rounded-2xl shadow border border-stone-200 p-8 max-w-3xl">

    <h1 class="text-4xl font-bold mb-8">
        Create Exhibition
    </h1>

    <form method="POST" action="/admin/exhibitions" class="space-y-6">

        @csrf

        <div>
            <label class="block font-semibold mb-2">Title</label>

            <input
                type="text"
                name="title"
                class="w-full border border-stone-300 rounded-xl px-4 py-3"
            >
        </div>

        <div>
            <label class="block font-semibold mb-2">Slug</label>

            <input
                type="text"
                name="slug"
                class="w-full border border-stone-300 rounded-xl px-4 py-3"
            >
        </div>

        <div>
            <label class="block font-semibold mb-2">Description</label>

            <textarea
                name="description"
                rows="5"
                class="w-full border border-stone-300 rounded-xl px-4 py-3"
            ></textarea>
        </div>

        <div>
            <label class="block font-semibold mb-2">
                NetX Asset ID
            </label>

            <input
                type="text"
                name="netx_asset_id"
                class="w-full border border-stone-300 rounded-xl px-4 py-3"
            >
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <div>
                <label class="block font-semibold mb-2">
                    Start Date
                </label>

                <input
                    type="date"
                    name="start_date"
                    class="w-full border border-stone-300 rounded-xl px-4 py-3"
                >
            </div>

            <div>
                <label class="block font-semibold mb-2">
                    End Date
                </label>

                <input
                    type="date"
                    name="end_date"
                    class="w-full border border-stone-300 rounded-xl px-4 py-3"
                >
            </div>

        </div>

        <label class="flex items-center gap-3">

            <input
                type="checkbox"
                name="is_published"
                value="1"
            >

            <span class="font-semibold">
                Published
            </span>

        </label>

        <button class="bg-black text-white px-6 py-3 rounded-xl hover:bg-stone-800">

            Create Exhibition

        </button>

    </form>

</section>

@endsection