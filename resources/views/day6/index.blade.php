@extends('layout')
@section('content')
    <main class="container mx-auto flex flex-col items-center justify-center">
        <x-page-header challengeNumber="{{ $data->id }}" challengeName="{{ $data->title }}"></x-page-header>

        <section class="w-full mx-auto bg-ash-gray rounded-xl shadow-lg flex flex-col items-center py-10">

            <div class="w-1/3 border-2 border-black border-collapse text-4xl flex flex-row flex-wrap my-6">
                <input type="text" class="border-2 border-black w-full" id="numberBox">

                <x-calculator-button event="getNumber(1)" number="1"></x-calculator-button>
                <x-calculator-button event="getNumber(2)" number="2"></x-calculator-button>
                <x-calculator-button event="getNumber(3)" number="3"></x-calculator-button>
                <x-calculator-button event="getOperator('/')" number="/"></x-calculator-button>

                <x-calculator-button event="getNumber(4)" number="4"></x-calculator-button>
                <x-calculator-button event="getNumber(5)" number="5"></x-calculator-button>
                <x-calculator-button event="getNumber(6)" number="6"></x-calculator-button>
                <x-calculator-button event="getOperator('*')" number="*"></x-calculator-button>

                <x-calculator-button event="getNumber(7)" number="7"></x-calculator-button>
                <x-calculator-button event="getNumber(8)" number="8"></x-calculator-button>
                <x-calculator-button event="getNumber(9)" number="9"></x-calculator-button>
                <x-calculator-button event="getOperator('+')" number="+"></x-calculator-button>

                <x-calculator-button event="getNumber('.')" number="."></x-calculator-button>
                <x-calculator-button event="getNumber(0)" number="0"></x-calculator-button>
                <x-calculator-button event="deleteAll()" number="C"></x-calculator-button>
                <x-calculator-button event="getOperator('-')" number="-"></x-calculator-button>

                <button class="bg-ash-gray hover:bg-artichoke w-full h-full border-2 border-black"
                    onclick="calculate()">=</button>

            </div>
            <x-return-button />
        </section>
    </main>
    <script src="{{ asset('js/calculator.js') }}"></script>
@endsection
