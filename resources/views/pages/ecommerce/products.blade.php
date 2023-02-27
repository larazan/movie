<x-app-layout>


    <div class="vs jj ttm vl ou uf na">

        <!-- Page header -->
        <div class="ii">

            <!-- Title -->
            <h1 class="gu teu text-slate-800 font-bold">Find the right product for you ✨</h1>

        </div>

        <!-- Page content -->
        <div class="flex ak fq ja jv jm zh zx zk tnq trr tri iv">

            <!-- Sidebar -->
            <x-product.sidebar />

            <!-- Content -->
            <div>

                <!-- Filters -->
                <x-product.sorting />

                <div class="text-sm text-slate-500 gm ri">67.975 Items</div>

                <!-- Cards 1 (Video Courses) -->
                <x-product.cards />

                <!-- Pagination -->
                <x-pagination-table />

            </div>

        </div>

    </div>

</x-app-layout>