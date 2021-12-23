<article class="border-black border rounded-md shadow-lg mb-6 p-6 max-h-72 flex justify-between bg-ash-gray">
    <div class="max-w-sm">
        <img src="{{ $url }}" alt="{{ $alt }}" class="h-60 rounded-lg">
    </div>
    <div class="flex flex-col w-8/12 bg-artichoke shadow-md">
        <h5 class="text-2xl font-bold text-center">{{ $title }}</h5>
        <p class="text-md m-6">{{ $description }}</p>
        <a href="{{ route($alt) }}" class="border border-ash-gray mx-auto px-6 py-2 bg-ebony rounded-md max-w-max shadow-xl hover:bg-ash-gray hover:border-ebony  font-bold">Ir </a>
    </div>
</article>