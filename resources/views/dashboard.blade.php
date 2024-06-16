<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach (['Horizon', 'Telescope', 'Pulse'] as $tool)
                    <div class="card" style="background-color: #fff">
                        <div class="card-header">
                            <a href="/{{ strtolower($tool) }}" target="_blank" class="block text-center text-lg font-semibold text-blue-500 hover:text-blue-700">{{ __($tool) }}</a>
                        </div>
                        <div class="card-body">
                            <p class="text-gray-600">
                                @if ($tool === 'Horizon')
                                    {{ __('Horizon is a dashboard and configuration system for Laravel queues. It provides a beautiful and intuitive interface to monitor and manage Redis queues, track key metrics such as job throughput, runtime, and failure rates, and monitor job processing in real-time.') }}
                                @elseif ($tool === 'Telescope')
                                    {{ __('Telescope is an elegant debug assistant for the Laravel framework. It offers detailed insights into incoming requests, including exceptions, log entries, database queries, queued jobs, mail, notifications, cache operations, scheduled tasks, and more, making it easier to debug and understand application behavior.') }}
                                @else
                                    {{ __('Pulse is a real-time monitoring tool for Laravel applications. It provides insights into application performance, error rates, and usage patterns, helping to quickly identify and address issues, and ensuring the smooth operation of applications.') }}
                                @endif
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
<style>
.card {
    background-color: #fff !important;
    border: 1px solid #e2e8f0; 
    border-radius: 0.5rem; 
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06); 
}

.card-header {
    background-color: #f7fafc; 
    padding: 1rem;
    border-bottom: 1px solid #e2e8f0; 
}

.card-body {
    padding: 1rem;
}

</style>