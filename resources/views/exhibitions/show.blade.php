@extends('layouts.app', ['title' => $exhibition->title])

@section('content')

<a href="/exhibitions" class="text-sm font-semibold text-amber-700 hover:text-black">
    ← Back to Exhibitions
</a>

<section class="mt-8 bg-white rounded-2xl shadow border border-stone-200 p-8">

    <p class="text-xs uppercase tracking-widest text-stone-500 mb-4">
        NetX Asset ID: {{ $exhibition->netx_asset_id }}
    </p>

    <h1 class="text-5xl font-bold mb-6">
        {{ $exhibition->title }}
    </h1>

    <p class="text-xl text-stone-700 leading-relaxed mb-8">
        {{ $exhibition->description }}
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
        <div class="bg-stone-100 rounded-xl p-5">
            <p class="font-semibold mb-1">Start Date</p>
            <p>{{ $exhibition->start_date }}</p>
        </div>

        <div class="bg-stone-100 rounded-xl p-5">
            <p class="font-semibold mb-1">End Date</p>
            <p>{{ $exhibition->end_date }}</p>
        </div>
    </div>

</section>

@endsection