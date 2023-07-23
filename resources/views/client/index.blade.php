@extends('client.layouts.master')

@section('content')
{{-- @vite('resources/css/app.css') --}}
{{-- @section('nabvar')
@endsection --}}

<div class="mx-auto max-w-7xl">
    <h2 class="text-center mt-10">لیست موتور ها</h2>
    <hr
        class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />
</div>
<div class="mx-auto max-w-7xl" >
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">

                    <form action="{{route('filter')}}" method="post">
                        @csrf
                        <div class="relative mb-4 flex flex-wrap items-stretch">
                            <label
                                class="bg-black  flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-100 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
                                for="inputGroupSelect01">رنگ</label>
                            <select
                                class="form-select relative mr-2 m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                id="color" name="color">
                                <option value="">انتخاب نمایید...</option>
                                @foreach ($motor->unique('color') as $item)
                                <option value="{{$item->color}}">{{$item->color}}</option>
                                @endforeach

                            </select>
                            <label
                                class="bg-black flex items-center whitespace-nowrap rounded-l border border-r-0 border-solid border-neutral-300 px-3 py-[0.25rem] text-center text-base font-normal leading-[1.6] text-neutral-100 dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200"
                                for="inputGroupSelect01">وزن</label>
                            <select
                                class="form-select relative m-0 block w-[1px] min-w-0 flex-auto rounded-r border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                                id="weight" name="weight">
                                <option value="">انتخاب نمایید...</option>
                                @foreach ($motor->unique('weight') as $item)
                                <option value="{{$item->weight}}">{{$item->weight}}</option>
                                @endforeach
                            </select>

                            <button
                                class="z-[2] inline-block mx-5 rounded-r bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:z-[3] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                                data-te-ripple-init type="submit" id="button-addon2">
                                فیلتر
                            </button>
                        </div>
                    </form>
                    <table class="min-w-full text-right text-sm font-light" dir="rtl">
                        <thead class="border bg-blue-600 font-medium dark:border-neutral-500 dark:bg-neutral-600">
                            <tr>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">Model</th>
                                <th scope="col" class="px-6 py-4">Color</th>
                                <th scope="col" class="px-6 py-4">Price</th>
                                <th scope="col" class="px-6 py-4">Weight</th>
                                <th scope="col" class="px-6 py-4">Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i='1';
                            @endphp
                            @foreach ($motor as $motors)

                            <tr
                                class="hover:bg-gray-400 border-b {{$i%2 ? ' bg-neutral-100' : ' bg-white'}} dark:border-neutral-500 dark:bg-neutral-700">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{$i++}}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $motors->model}}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $motors->color}}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $motors->price}}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $motors->weight}}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $motors->image}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{$motor->links()}}
</div>
@section('footer')

@endsection
@endsection