@props(["job"])

<x-panel class="flex flex-col text-center">
    <div class="self-start">{{$job->employer->name}}</div>
    <div class="py-8">
        <h3 class="text-xl font-bold group-hover:text-blue-800 transition-colors duration-300">
            <a href="{{$job->url}}"  target="_blank">
                {{$job->title}}
            </a>
        </h3>
        <p class="text-sm mt-4">{{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center">
        @foreach($job->tags as $tag)
            <x-tag :$tag size="small"/>
        @endforeach
        <x-employer-logo :employer="$job->employer" />
    </div>
</x-panel>
