<!-- nav -->
  <!-- Main navigation container -->
  <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/tw-elements/css/tw-elements.min.css" />
  <nav
    class="relative flex w-full flex-wrap items-center justify-between bg-zinc-50 py-2 shadow-dark-mild dark:bg-neutral-700 lg:py-4"
    data-twe-navbar-ref>
    <div class="flex w-full flex-wrap items-center justify-between px-3">
      <div>
        <a class="mx-4 my-1 flex items-center lg:mb-0 lg:mt-0" href="#">
          <img class="me-2" src="../assets/images/logo.svg" style="height: 30px" alt="Large logo" loading="lazy" />
        </a>
      </div>

      <!-- Hamburger button for mobile view -->
      <button
        class="block border-0 bg-transparent px-2 text-black/50 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
        type="button" data-twe-collapse-init data-twe-target="#navbarSupportedContent4"
        aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
        <!-- Hamburger icon -->
        <span class="[&>svg]:w-7 [&>svg]:stroke-black/50 dark:[&>svg]:stroke-neutral-200">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd"
              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
              clip-rule="evenodd" />
          </svg>
        </span>
      </button>

      <!-- Collapsible navbar container -->
      <div class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
        id="navbarSupportedContent4" data-twe-collapse-item>
        <!-- Left links -->
        <ul class="list-style-none me-auto flex flex-col ps-0 lg:mt-1 lg:flex-row" data-twe-navbar-nav-ref>
          <!-- Home link -->
          <li class="my-4 ps-2 lg:my-0 lg:pe-1 lg:ps-2" data-twe-nav-item-ref>
          </li>
        </ul>

        <div class="flex items-center">
          <button type="button" data-twe-ripple-init data-twe-ripple-color="light"
            class="log-sign me-3 inline-block rounded px-2 pb-2 pt-2.5 font-bold leading-normal text-primary hover:text-primary focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 dark:text-secondary-600 dark:hover:text-secondary-500 dark:focus:text-secondary-500 dark:active:text-secondary-500">
            Masuk
          </button>
          <button type="button"
            class="log-sign inline-block rounded-full bg-white border-2 border-custom px-6 pb-2 pt-2.5 font-bold leading-normal text-primary transition duration-150 ease-in-out hover:bg-primary hover:text-primary hover:shadow-lg focus:bg-primary focus:text-white focus:shadow-lg focus:outline-none focus:ring-0 active:bg-primary active:text-white active:shadow-lg">
            Buat Akun
          </button>
        </div>
      </div>
    </div>
  </nav>
  <!-- nav -->
  @push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script
  type="text/javascript"
  src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
  <script>
  import {
    Collapse,
    initTWE,
  } from "tw-elements";
  
  initTWE({ Collapse });
  </script>
  @endpush