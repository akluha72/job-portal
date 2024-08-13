<x-layout>
    @foreach($jobs as $job)
        <div class="title">
            {{ $job->title }}
        </div>
    @endforeach
</x-layout>