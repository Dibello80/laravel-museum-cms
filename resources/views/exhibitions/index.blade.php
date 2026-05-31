@extends('layouts.app', ['title' => 'Exhibitions'])

@section('content')

<section class="mb-10">
    <p class="text-sm uppercase tracking-[0.3em] text-amber-700 font-semibold mb-3">
        Digital Content CMS
    </p>

    <h1 class="text-5xl font-bold mb-4">
        Exhibitions
    </h1>

    <p class="text-lg text-stone-600 max-w-2xl">
        A Laravel-based museum CMS practice project for managing public-facing exhibition content,
        digital assets, and API-ready structured data.
    </p>
</section>

<section class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach ($exhibitions as $exhibition)

        <article class="bg-white rounded-2xl shadow p-6 border border-stone-200 hover:shadow-lg transition">

            <p class="text-xs uppercase tracking-widest text-stone-500 mb-3">
                NetX Asset ID: {{ $exhibition->netx_asset_id }}
            </p>

            <h2 class="text-2xl font-bold mb-3">
                <a href="/exhibitions/{{ $exhibition->slug }}" class="hover:text-amber-700">
                    {{ $exhibition->title }}
                </a>
            </h2>

            <p class="text-stone-700 mb-5">
                {{ $exhibition->description }}
            </p>

            <div class="flex justify-between items-center text-sm text-stone-500">
                <span>
                    {{ $exhibition->start_date }} — {{ $exhibition->end_date }}
                </span>

                <a href="/exhibitions/{{ $exhibition->slug }}" class="font-semibold text-black hover:text-amber-700">
                    View →
                </a>
            </div>

        </article>

    @endforeach
</section>

@endsection