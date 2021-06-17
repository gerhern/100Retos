<div class="shadow-md border-black border mb-6 p-6 max-h-72 flex justify-between">
    <div class="max-w-sm">
        <img src="{{ $url }}" alt="{{ $alt }}" class="h-60 rounded-lg">
    </div>
    <div class="flex flex-col w-8/12 bg-blue-100 shadow-md">
        <h5 class="text-2xl font-bold text-center">{{ $title }}</h5>
        <p class="text-md m-6">{{ $description }}</p>
        <a href="{{ route($alt) }}" class=" mx-auto px-6 py-2 bg-blue-500 text-white rounded-md max-w-max shadow-xl hover:bg-blue-700 font-bold">Ir </a>
    </div>
</div>