<x-layout>
    <x-slot name="header">
        {{ __('show') }}
    </x-slot>

    <x-panel>
    <x-splade-data :default="\App\Models\Motor::whereId($id)->first()">
                <img
                  {{-- v-show="{{$default->image}}" --}}
                  src="{{asset($image->image)}}"
                  class="mx-auto mb-4 w-96 rounded-lg"
                  alt="Avatar" />
                <p class="mb-2 text-xl font-medium leading-tight">Model :<span class="h5 text-indigo-600 mb-2 text-xl font-medium leading-tight" v-text="data.model"/></p>
                <p class="mb-2 text-xl font-medium leading-tight">Color : <span class="text-indigo-600 dark:text-neutral-400" v-text="data.color"/></p>
                <p class="mb-2 text-xl font-medium leading-tight">Price :<span class="text-indigo-600 dark:text-neutral-400" v-text="data.price"/> toman</p>
                <p class="mb-2 text-xl font-medium leading-tight">Weight :<span class="text-indigo-600 dark:text-neutral-400" v-text="data.weight"/> kg</p>
              </div>
        </x-splade-data>
    </x-panel>
</x-layout>