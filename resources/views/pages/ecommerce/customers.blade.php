<x-app-layout>

    <div class="vs jj ttm vl ou uf na">

        <!-- Page header -->
        <div class="je jd jc rc">

            <!-- Left: Title -->
            <div class="ri _y">
                <h1 class="gu teu text-slate-800 font-bold">Customers ✨</h1>
            </div>

            <!-- Right: Actions -->
            <x-customer.action />

        </div>

        <!-- Table -->
        <x-customer.table />

        <!-- Pagination -->
        <div class="mt-8">
            <x-pagination />
        </div>

    </div>

</x-app-layout>