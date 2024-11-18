<x-app-layout>

    <aside class="bg-blue-900 text-gray-100 fixed h-screen w-64 shadow-lg">
        <div class="flex items-center justify-center h-16 border-b border-blue-700">
            <h1 class="text-lg font-bold">Mi Proyecto</h1>
        </div>
        <nav class="p-4">
            <ul class="space-y-4">
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-2 text-gray-100 hover:bg-gray-800 hover:text-white rounded-lg transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 10l1.5 1.5L7 9m10-4l1.5 1.5L21 5m-9 7h.01M12 5l9 9M3 5l9 9m0 0v10" />
                        </svg>
                        <span class="font-medium">Dashboard</span>
                    </a>
                </li>
            </ul>
        </nav>
    </aside>
    
    

</x-app-layout>
