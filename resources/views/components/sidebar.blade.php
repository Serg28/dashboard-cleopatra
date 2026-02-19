<div id="sideBar"
    :class="sidebarOpen ? 'md:ml-0' : 'md:-ml-64'"
    class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster transition-all duration-300">

    <div class="flex flex-col">
        {{ $slot }}
    </div>

</div>
