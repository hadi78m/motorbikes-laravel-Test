<x-layout>
    <x-slot name="header">
        {{ __('Motors') }}
    </x-slot>

    <div class="mx-auto max-w-7xl mt-5">
        <x-splade-table :for="$motor" striped>
            @cell('image',$motor)
            <img src="{{asset($motor->image)}}" class="h-auto max-w-full w-36 rounded-lg"  alt="">
            @endcell
            @cell('created_at',$motor)
            <span>{{Verta($motor->created_at)->format('Y-m-d')}}</span>
            @endcell
            @cell('action',$motor)
            <Link  href="/show/{{$motor->id}}" class="btn font-bold text-indigo-600">
            {{-- <Link slideover href="/show/{{$motor->id}}" class="btn font-bold text-indigo-600"> --}}
            {{-- <Link modal href="/show/{{$motor->id}}" class="btn font-bold text-indigo-600"> --}}
            Show
            </Link>
            @endcell

        </x-splade-table>
     </div>
</x-layout>