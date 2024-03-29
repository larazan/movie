<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">
        
        <!-- Welcome banner -->
        <x-dashboard.welcome-banner />

        <!-- Dashboard actions -->
        <div class="sm:flex sm:justify-between sm:items-center mb-8">

                  <!-- Left: Avatars -->
            <x-dashboard.dashboard-avatars />

            <!-- Right: Actions -->
            <div class="flex flex-row space-x-3">

                <!-- Filter button -->
                <x-dropdown-filter align="right" />

                 <!-- Datepicker built with flatpickr -->
                 <x-datepicker />

                <!-- Add view button -->
                <button class="flex items-center justify-center w-full py-2 px-4 border rounded space-x-3 btn bg-indigo-500 hover:bg-indigo-600 text-white">
                    <svg class="w-4 h-4 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="hidden2 text-sm font-semibold xs:block ml-2">Add View</span>
                </button>
                
            </div>

        </div>
        
        
        <!-- Cards -->
        <div class="grid grid-cols-12 gap-6">

        
        <x-dashboard.dashboard-card-04 />
        <x-dashboard.dashboard-card-05 />
        <x-dashboard.dashboard-card-06 />


            <!-- Table (Top Channels) -->
            <x-dashboard.dashboard-card-07 />

            <!-- Line chart (Sales Over Time)  -->
            <x-dashboard.dashboard-card-08 />

            <!-- Stacked bar chart (Sales VS Refunds) -->
            <x-dashboard.dashboard-card-09 />

            <!-- Card (Customers)  -->
            <x-dashboard.dashboard-card-10 />

            <!-- Card (Reasons for Refunds)   -->
            <x-dashboard.dashboard-card-11 />             

            <!-- Card (Recent Activity) -->
            <x-dashboard.dashboard-card-12 />
            
            <!-- Card (Income/Expenses) -->
            <x-dashboard.dashboard-card-13 />

        </div>

    </div>
</x-app-layout>
