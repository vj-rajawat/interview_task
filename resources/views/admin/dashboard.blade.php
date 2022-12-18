<x-app-layout>
<main class="flex-1 max-h-full p-5 ">
    <!-- Main content header -->
    <div class="">
      <h1 class="text-2xl font-semibold whitespace-nowrap">Dashboard</h1>
    </div>

    <!-- Start Content -->

    <!-- Chart cards (Four columns grid) -->
    <div class="grid grid-cols-1 gap-6 mt-6 md:grid-cols-2 lg:grid-cols-4">
      <!-- Users chart card -->
      <a href="#" class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg bg-white">
        <div class="flex items-start">
          <div class="flex flex-col flex-shrink-0 space-y-2">
            <span class="text-gray-800">Genre</span>
            <span class="text-lg font-semibold">100,221</span>
          </div>
          <div class="relative min-w-0 ml-auto h-14">
            <canvas id="usersChart"></canvas>
          </div>
        </div>
        <div>
          <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">14%</span>
          <span>from 2020</span>
        </div>
      </a>

      <!-- Upcoming Event chart card -->
      <a href="#" class="p-4 bg-white transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start">
          <div class="flex flex-col flex-shrink-0 space-y-2">
            <span class="text-gray-800">Artist</span>
            <span class="text-lg font-semibold">40%</span>
          </div>
          <div class="relative min-w-0 ml-auto h-14">
            <canvas id="sessionsChart"></canvas>
          </div>
        </div>
        <div>
          <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">1.2%</span>
          <span>from 2020</span>
        </div>
      </a>

      <!-- Volunteer card -->
      <a href="#" class="p-4 bg-white transition-shadow border rounded-lg shadow-sm hover:shadow-lg">
        <div class="flex items-start">
          <div class="flex flex-col flex-shrink-0 space-y-2">
            <span class="text-gray-800">Venue</span>
            <span class="text-lg font-semibold">300,527</span>
          </div>
          <div class="relative min-w-0 ml-auto h-14">
            <canvas id="vistsChart"></canvas>
          </div>
        </div>
        <div>
          <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">10%</span>
          <span>from 2020</span>
        </div>
      </a>

      <!-- Internship card -->
      <a href="#" class="p-4 transition-shadow border rounded-lg shadow-sm hover:shadow-lg bg-white">
        <div class="flex items-start">
          <div class="flex flex-col flex-shrink-0 space-y-2">
            <span class="text-gray-800">Events</span>
            <span class="text-lg font-semibold">600,429</span>
          </div>
          <div class="relative min-w-0 ml-auto h-14">
            <canvas id="articlesChart"></canvas>
          </div>
        </div>
        <div>
          <span class="inline-block px-2 text-sm text-white bg-green-300 rounded">30%</span>
          <span>from 2020</span>
        </div>
      </a>
    </div>

    
     

    <!-- Table see (https://tailwindui.com/components/application-ui/lists/tables) -->

  </main>
</x-app-layout>