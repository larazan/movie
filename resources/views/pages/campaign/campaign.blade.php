<x-app-layout>
<div class="vs jj ttm vl ou uf na">

<!-- Page header -->
<div class="sm:flex sm:justify-between sm:items-center mb-8">

    <!-- Left: Title -->
    <div class="mb-4 sm:mb-0">
        <h1 class="text-2xl md:text-3xl text-gray-800 font-bold">Campaigns ✨</h1>
    </div>

    <!-- Right: Actions -->
    <x-campaigns.campaign-action />

</div>


    <!-- Campaign cards -->
    <x-campaigns.campaign-cards />



<!-- Pagination -->
<div class="mt-8">
    <x-pagination />
</div>

</div>
</x-app-layout>