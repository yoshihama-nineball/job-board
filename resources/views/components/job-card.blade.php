 <x-card class="mb-4">
   <div class="mb-4 flex justify-between">
     <h2 class="text-lg font-medium">{{ $job->title }}</h2>
     <div class="text-slate-500">
       {{ number_format($job->salary / 10000) }}万円
     </div>
   </div>

   <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
     <div class="flex space-x-4 items-center">
       株式会社<div>{{ $job->employer->company_name }}</div>
       <div>{{ $job->location }}</div>
       @if ($job->deleted_at)
         <span class="text-xs text-red-500">削除済み</span>
       @endif
     </div>
     <div class="flex space-x-1 text-xs">
       <x-tag>
         <a href="{{ route('jobs.index', ['experience' => $job->experience]) }}">
           {{ Str::ucfirst($job->experience) }}
         </a>
       </x-tag>
       <x-tag>
         <a href="{{ route('jobs.index', ['category' => $job->category]) }}">
           {{ $job->category }}
         </a>
       </x-tag>
     </div>
   </div>

   {{ $slot }}
 </x-card>
