<!-- Main navigation container -->
<nav class="relative flex w-full flex-nowrap items-center justify-between bg-[#FBFBFB] py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:flex-wrap lg:justify-start lg:py-4"
    data-te-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3">
        <!-- Hamburger button for mobile view -->
        <button
            class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
            type="button" data-te-collapse-init data-te-target="#navbarSupportedContent8"
            aria-controls="navbarSupportedContent8" aria-expanded="false" aria-label="Toggle navigation">
            <!-- Hamburger icon -->
            <span class="[&>svg]:w-7">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
                    <path fill-rule="evenodd"
                        d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                        clip-rule="evenodd" />
                </svg>
            </span>
        </button>

        <!-- Collapsible navbar container -->
        <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center justify-center lg:mt-0 lg:!flex lg:basis-auto"
            id="navbarSupportedContent8" data-te-collapse-item>
            <!-- Left links -->
            <ul class="list-style-none flex flex-col pl-0 lg:mt-1 lg:flex-row" data-te-navbar-nav-ref>
                <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                    <a class="active disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                        aria-current="page" href="#" data-te-nav-link-ref>ثبت موتور جدید</a>
                </li>
                    <!-- Home link -->
                <li class="my-4 pl-2 lg:my-0 lg:pl-2 lg:pr-1" data-te-nav-item-ref>
                    <a class="active disabled:text-black/30 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
                        aria-current="page" href="{{route('home')}}" data-te-nav-link-ref>صفحه اصلی</a>
                </li>  
              


            </ul>
        </div>
    </div>
</nav>

<script src="{{asset('js/dist/tw-elements.umd.min.js')}}"></script>

<script>
    // Initialization for ES Users
    import {
        Collapse,
        initTE,
    } from "tw-elements";

    initTE({
        Collapse
    });
</script>