<div class="overflow-x-hidden relative flex">
    <div class="animate-marquee whitespace-nowrap">
        @foreach ($rtext as $item)
        <span class="font-semibold text-base px-1">{{$item->text}}</span>
        @endforeach
    </div>
    <div class="absolute top-0 animate-marquee2 whitespace-nowrap">
        @foreach ($rtext as $item)
        <span class="font-semibold text-base px-1">{{$item->text}}</span>
        @endforeach
    </div>
</div>
