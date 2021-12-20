<article class="border-black border rounded-md shadow-lg mb-6 p-6 max-h-72 flex justify-between bg-semi-blue">
    <div class="max-w-sm">
        <img src="{{ $url }}" alt="{{ $alt }}" class="h-60 rounded-lg">
    </div>
    <div class="flex flex-col w-8/12 bg-bold-blue shadow-md">
        <h5 class="text-2xl font-bold text-center">{{ $title }}</h5>
        <p class="text-md m-6">{{ $description }}</p>
        <a href="{{ route($alt) }}" class=" mx-auto px-6 py-2 bg-dark-blue text-light-blue rounded-md max-w-max shadow-xl hover:bg-light-blue hover:text-dark-blue font-bold">Ir </a>
    </div>
</article>