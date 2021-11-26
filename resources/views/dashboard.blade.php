<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div id="edw-calculator" data-dealer-id="{{ Auth::user()->dealerid }}" data-car-price="20000" data-car-price-editable="true" data-title="Financial Lease Calculator" data-intro="Bereken het maandtermijn én vraag vrijblijvend een offerte aan.">
</div>
                </div>
            </div>
        </div>
    </div>

    
<script type="text/javascript" src="https://calculator.edwautolease.nl/widget/1.0/bundle.min.js"></script>



</x-app-layout>
