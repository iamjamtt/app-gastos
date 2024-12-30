<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full" data-theme="true" data-theme-mode="light"
    dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ $title ?? 'Page Title' }}</title>

    <link href="assets/media/app/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" />
    <link href="assets/media/app/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" />
    <link href="assets/media/app/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" />
    <link href="assets/media/app/favicon.ico" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link href="assets/vendors/keenicons/styles.bundle.css" rel="stylesheet" />
    <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body
    class="antialiased flex h-full text-base text-gray-700 [--tw-page-bg:#F6F6F9] [--tw-page-bg-dark:var(--tw-coal-200)] [--tw-content-bg:var(--tw-light)] [--tw-content-bg-dark:var(--tw-coal-500)] [--tw-content-scrollbar-color:#e8e8e8] [--tw-header-height:60px] [--tw-sidebar-width:270px] bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark] lg:overflow-hidden">
    <!-- Theme Mode -->
    <script>
        const defaultThemeMode = 'light'; // light|dark|system
        let themeMode;

        if (document.documentElement) {
            if (localStorage.getItem('theme')) {
                themeMode = localStorage.getItem('theme');
            } else if (document.documentElement.hasAttribute('data-theme-mode')) {
                themeMode = document.documentElement.getAttribute('data-theme-mode');
            } else {
                themeMode = defaultThemeMode;
            }

            if (themeMode === 'system') {
                themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
            }

            document.documentElement.classList.add(themeMode);
        }
    </script>
    <!-- End of Theme Mode -->
    <!-- Page -->
    <!-- Base -->
    <div class="flex grow">
        <!-- Header -->
        <header
            class="flex lg:hidden items-center fixed z-10 top-0 start-0 end-0 shrink-0 bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark] h-[--tw-header-height]"
            id="header">
            <!-- Container -->
            <div class="container-fixed flex items-center justify-between flex-wrap gap-3">
                <a href="html/demo6.html">
                    <img class="dark:hidden min-h-[30px]" src="assets/media/app/mini-logo-gray.svg" />
                    <img class="hidden dark:block min-h-[30px]" src="assets/media/app/mini-logo-gray-dark.svg" />
                </a>
                <button class="btn btn-icon btn-light btn-clear btn-sm -me-2" data-drawer-toggle="#sidebar">
                    <i class="ki-filled ki-menu">
                    </i>
                </button>
            </div>
            <!-- End of Container -->
        </header>
        <!-- End of Header -->
        <!-- Sidebar -->
        <div class="fixed top-0 bottom-0 z-20 hidden lg:flex flex-col shrink-0 w-[--tw-sidebar-width] bg-[--tw-page-bg] dark:bg-[--tw-page-bg-dark]"
            data-drawer="true" data-drawer-class="drawer drawer-start flex top-0 bottom-0"
            data-drawer-enable="true|lg:false" id="sidebar">
            <!-- Sidebar Header -->
            <div id="sidebar_header">
                <a
                    href="{{ route('inicio') }}"
                    class="flex items-center gap-2.5 px-3.5 h-[70px]"
                >
                    <img class="dark:hidden h-[42px]" src="assets/media/app/mini-logo-circle.svg" />
                    <img class="hidden dark:inline-block h-[42px]" src="assets/media/app/mini-logo-circle-dark.svg" />
                    <div class="menu-label cursor-pointer text-gray-900 font-medium grow justify-between">
                        <span class="text-base font-medium text-gray-900 grow justify-start">
                            Gastofy
                        </span>
                    </div>
                </a>
                {{-- <div class="pt-2.5 px-3.5 mb-1">
                    <div class="input">
                        <i class="ki-filled ki-magnifier">
                        </i>
                        <input class="min-w-0" placeholder="Search" type="text" value="" />
                        <span class="text-2sm text-gray-700 text-nowrap">
                            cmd + /
                        </span>
                    </div>
                </div> --}}
            </div>
            <!-- End of Sidebar Header -->
            <!-- Sidebar menu -->
            <div class="flex items-stretch grow shrink-0 justify-center my-5" id="sidebar_menu">
                <div class="scrollable-y-auto light:[--tw-scrollbar-thumb-color:var(--tw-content-scrollbar-color)] grow"
                    data-scrollable="true" data-scrollable-dependencies="#sidebar_header, #sidebar_footer"
                    data-scrollable-height="auto" data-scrollable-offset="0px"
                    data-scrollable-wrappers="#sidebar_menu">
                    <!-- Primary Menu -->
                    <div class="menu flex flex-col w-full gap-1.5 px-3.5" data-menu="true"
                        data-menu-accordion-expand-all="false" id="sidebar_primary_menu">
                        <div class="menu-item active">
                            <a class="menu-link gap-2.5 py-2 px-2.5 rounded-md border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200"
                                href="html/demo6.html">
                                <span
                                    class="menu-icon items-start text-lg text-gray-600 menu-item-active:text-gray-800 menu-item-here:text-gray-800 menu-item-show:text-gray-800 menu-link-hover:text-gray-800 dark:menu-item-active:text-gray-900 dark:menu-item-here:text-gray-900 dark:menu-item-show:text-gray-900 dark:menu-link-hover:text-gray-900">
                                    <i class="ki-filled ki-home-3">
                                    </i>
                                </span>
                                <span
                                    class="menu-title text-sm text-gray-800 font-medium menu-item-here:text-gray-900 menu-item-show:text-gray-900 menu-link-hover:text-gray-900">
                                    Inicio
                                </span>
                            </a>
                        </div>
                        {{-- <div class="menu-item show" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                            <div class="menu-link gap-2.5 py-2 px-2.5 rounded-md border border-transparent">
                                <span
                                    class="menu-icon items-start text-gray-600 text-lg menu-item-here:text-gray-800 menu-item-show:text-gray-800 menu-link-hover:text-gray-800 dark:menu-item-here:text-gray-900 dark:menu-item-show:text-gray-900 dark:menu-link-hover:text-gray-900">
                                    <i class="ki-filled ki-profile-circle">
                                    </i>
                                </span>
                                <span
                                    class="menu-title font-medium text-sm text-gray-800 menu-item-here:text-gray-900 menu-item-show:text-gray-900 menu-link-hover:text-gray-900">
                                    Public Profile
                                </span>
                                <span
                                    class="menu-arrow text-gray-600 menu-item-here:text-gray-800 menu-item-show:text-gray-800 menu-link-hover:text-gray-800">
                                    <i class="ki-filled ki-down text-xs menu-item-show:hidden">
                                    </i>
                                    <i class="ki-filled ki-up text-xs hidden menu-item-show:inline-flex">
                                    </i>
                                </span>
                            </div>
                            <div class="menu-accordion gap-px ps-7">
                                <div class="menu-item active">
                                    <a class="menu-link py-2 px-2.5 rounded-md border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200"
                                        href="html/demo6/public-profile/works.html">
                                        <span
                                            class="menu-title text-2sm text-gray-800 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                            Works
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2 px-2.5 rounded-md border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200"
                                        href="html/demo6/public-profile/teams.html">
                                        <span
                                            class="menu-title text-2sm text-gray-800 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                            Teams
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2 px-2.5 rounded-md border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200"
                                        href="html/demo6/public-profile/network.html">
                                        <span
                                            class="menu-title text-2sm text-gray-800 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                            Network
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-2 px-2.5 rounded-md border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200"
                                        href="html/demo6/public-profile/activity.html">
                                        <span
                                            class="menu-title text-2sm text-gray-800 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                            Activity
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item flex-col-reverse" data-menu-item-toggle="accordion"
                                    data-menu-item-trigger="click">
                                    <div class="menu-link py-2 px-2.5 rounded-md border border-transparent">
                                        <span
                                            class="menu-title text-2sm text-gray-600 menu-item-here:text-gray-800 menu-item-show:text-gray-800 menu-link-hover:text-gray-800 dark:menu-item-here:text-gray-900 dark:menu-item-show:text-gray-900 dark:menu-link-hover:text-gray-900">
                                            <span class="hidden menu-item-show:!flex">
                                                Show less
                                            </span>
                                            <span class="flex menu-item-show:hidden">
                                                Show 3 more
                                            </span>
                                        </span>
                                        <span
                                            class="menu-arrow text-gray-600 menu-item-here:text-gray-800 menu-item-show:text-gray-800 menu-link-hover:text-gray-800">
                                            <i class="ki-filled ki-down text-xs menu-item-show:hidden">
                                            </i>
                                            <i class="ki-filled ki-up text-xs hidden menu-item-show:inline-flex">
                                            </i>
                                        </span>
                                    </div>
                                    <div class="menu-accordion gap-px">
                                        <div class="menu-item">
                                            <a class="menu-link py-2 px-2.5 rounded-md border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200"
                                                href="html/demo6/public-profile/campaigns/card.html">
                                                <span
                                                    class="menu-title text-2sm text-gray-800 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                                    Campaigns - Card
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-2 px-2.5 rounded-md border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200"
                                                href="html/demo6/public-profile/campaigns/list.html">
                                                <span
                                                    class="menu-title text-2sm text-gray-800 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                                    Campaigns - List
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link py-2 px-2.5 rounded-md border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200"
                                                href="html/demo6/public-profile/empty.html">
                                                <span
                                                    class="menu-title text-2sm text-gray-800 menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                                    Empty
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                    <!-- End of Primary Menu -->
                    {{-- <div class="border-b border-gray-300 mt-4 mb-1 mx-3.5"></div> --}}
                    <!-- Secondary Menu -->
                    {{-- <div class="menu flex flex-col w-full gap-1.5 px-3.5" data-menu="true"
                        data-menu-accordion-expand-all="true" id="sidebar_secondary_menu">
                        <div class="menu-item show" data-menu-item-toggle="accordion" data-menu-item-trigger="click">
                            <div class="menu-label flex items-center justify-between">
                                <div
                                    class="menu-toggle cursor-pointer pb-2 pt-3 ps-[14.5px] rounded-md border border-transparent">
                                    <span class="menu-arrow me-2.5">
                                        <i class="ki-filled ki-right text-sm menu-item-show:hidden text-gray-500">
                                        </i>
                                        <i
                                            class="ki-filled ki-down text-sm hidden menu-item-show:inline-flex text-gray-500">
                                        </i>
                                    </span>
                                    <span class="menu-title text-sm text-gray-800 font-medium">
                                        Spaces
                                    </span>
                                </div>
                                <a class="btn btn-sm btn-icon btn-icon-sm text-gray-500 hover:text-gray-800"
                                    href="#">
                                    <i class="ki-filled ki-plus">
                                    </i>
                                </a>
                            </div>
                            <div class="menu-accordion">
                                <div class="menu-item">
                                    <a class="menu-link py-1 px-2 my-0.5 rounded-md border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200"
                                        href="html/demo6/public-profile/profiles/creator.html">
                                        <span
                                            class="menu-icon text-gray-800 menu-link-hover:text-gray-900 rounded-md flex place-content-center size-7 me-2.5 bg-gray-200 border border-gray-300 menu-item-active:border-none menu-link-hover:border-light menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-none dark:menu-item-active:text-gray-900 menu-icon-xs">
                                            <i class="ki-filled ki-abstract-26">
                                            </i>
                                        </span>
                                        <span
                                            class="menu-title text-2sm text-gray-800 menu-item-active:font-medium menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                            Metrics Hub
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item active">
                                    <a class="menu-link py-1 px-2 my-0.5 rounded-md border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200"
                                        href="html/demo6/public-profile/profiles/company.html">
                                        <span
                                            class="menu-icon text-gray-800 menu-link-hover:text-gray-900 rounded-md flex place-content-center size-7 me-2.5 bg-gray-200 border border-gray-300 menu-item-active:border-none menu-link-hover:border-light menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-none dark:menu-item-active:text-gray-900 menu-icon-xs">
                                            <i class="ki-filled ki-abstract-41">
                                            </i>
                                        </span>
                                        <span
                                            class="menu-title text-2sm text-gray-800 menu-item-active:font-medium menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                            Data Lab
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-1 px-2 my-0.5 rounded-md border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200"
                                        href="html/demo6/public-profile/profiles/nft.html">
                                        <span
                                            class="menu-icon text-gray-800 menu-link-hover:text-gray-900 rounded-md flex place-content-center size-7 me-2.5 bg-gray-200 border border-gray-300 menu-item-active:border-none menu-link-hover:border-light menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-none dark:menu-item-active:text-gray-900 menu-icon-xs">
                                            <i class="ki-filled ki-abstract-39">
                                            </i>
                                        </span>
                                        <span
                                            class="menu-title text-2sm text-gray-800 menu-item-active:font-medium menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                            Creative Commons
                                        </span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link py-1 px-2 my-0.5 rounded-md border border-transparent menu-item-active:border-gray-200 menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-gray-200"
                                        href="html/demo6/public-profile/profiles/blogger.html">
                                        <span
                                            class="menu-icon text-gray-800 menu-link-hover:text-gray-900 rounded-md flex place-content-center size-7 me-2.5 bg-gray-200 border border-gray-300 menu-item-active:border-none menu-link-hover:border-light menu-item-active:bg-light menu-link-hover:bg-light menu-link-hover:border-none dark:menu-item-active:text-gray-900 menu-icon-xs">
                                            <i class="ki-filled ki-abstract-35">
                                            </i>
                                        </span>
                                        <span
                                            class="menu-title text-2sm text-gray-800 menu-item-active:font-medium menu-item-active:text-gray-900 menu-link-hover:text-gray-900">
                                            KPI Monitor
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!-- End of Secondary Menu -->
                </div>
            </div>
            <!-- End of Sidebar menu-->
            <!-- Footer -->
            <div class="flex flex-center justify-between shrink-0 ps-4 pe-3.5 mb-3.5" id="sidebar_footer">
                <div class="menu" data-menu="true">
                    <div class="menu-item" data-menu-item-offset="-10px, 15px" data-menu-item-placement="right-end"
                        data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
                        <div class="menu-toggle btn btn-icon rounded-full">
                            <img alt=""
                                class="size-8 rounded-full justify-center border border-gray-500 shrink-0"
                                src="assets/media/avatars/gray/5.png">
                            </img>
                        </div>
                        <div class="menu-dropdown menu-default light:border-gray-300 w-screen max-w-[250px]">
                            <div class="flex items-center justify-between px-5 py-1.5 gap-1.5">
                                <div class="flex items-center gap-2">
                                    <img alt="" class="size-9 rounded-full border-2 border-success"
                                        src="assets/media/avatars/300-2.png">
                                    <div class="flex flex-col gap-1.5">
                                        <span class="text-sm text-gray-800 font-semibold leading-none">
                                            Cody Fisher
                                        </span>
                                        <a class="text-xs text-gray-600 hover:text-primary font-medium leading-none"
                                            href="html/demo6/account/home/get-started.html">
                                            c.fisher@gmail.com
                                        </a>
                                    </div>
                                    </img>
                                </div>
                                <span class="badge badge-xs badge-primary badge-outline">
                                    Pro
                                </span>
                            </div>
                            <div class="menu-separator">
                            </div>
                            <div class="flex flex-col">
                                <div class="menu-item">
                                    <a class="menu-link" href="html/demo6/public-profile/profiles/default.html">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-badge">
                                            </i>
                                        </span>
                                        <span class="menu-title">
                                            Mi perfil
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="menu-separator">
                            </div>
                            <div class="flex flex-col">
                                <div class="menu-item mb-0.5">
                                    <div class="menu-link">
                                        <span class="menu-icon">
                                            <i class="ki-filled ki-moon">
                                            </i>
                                        </span>
                                        <span class="menu-title">
                                            Modo oscuro
                                        </span>
                                        <label class="switch switch-sm">
                                            <input data-theme-state="dark" data-theme-toggle="true" name="check"
                                                type="checkbox" value="1" />
                                        </label>
                                    </div>
                                </div>
                                <div class="menu-item px-4 py-1.5">
                                    <a class="btn btn-sm btn-light justify-center"
                                        href="html/demo6/authentication/classic/sign-in.html">
                                        Cerrar sesión
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center gap-1.5">
                    <a class="btn btn-icon btn-icon-lg size-8 hover:bg-light hover:text-primary text-gray-600"
                        href="html/demo6/authentication/classic/sign-in.html">
                        <i class="ki-filled ki-exit-right">
                        </i>
                    </a>
                </div>
            </div>
            <!-- End of Footer -->
        </div>
        <!-- End of Sidebar -->
        <!-- Wrapper -->
        <div class="flex flex-col lg:flex-row grow pt-[--tw-header-height] lg:pt-0">
            <!-- Main -->
            <div
                class="flex flex-col grow items-stretch rounded-xl bg-[--tw-content-bg] dark:bg-[--tw-content-bg-dark] border border-gray-300 dark:border-gray-200 lg:ms-[--tw-sidebar-width] mt-0 lg:mt-[15px] m-[15px]">
                <div class="flex flex-col grow lg:scrollable-y-auto lg:[scrollbar-width:auto] lg:light:[--tw-scrollbar-thumb-color:var(--tw-content-scrollbar-color)] pt-5"
                    id="scrollable_content">
                    <main class="grow" role="content">
                        <!-- Toolbar -->
                        <div class="pb-5">
                            <!-- Container -->
                            <div class="container-fixed flex items-center justify-between flex-wrap gap-3">
                                <div class="flex items-center flex-wrap gap-1 lg:gap-5">
                                    <h1 class="font-medium text-lg text-gray-900">
                                    </h1>
                                    <div class="flex items-center gap-1 text-sm font-normal">
                                        <a class="text-gray-700 hover:text-primary" href="html/demo6.html">
                                            Home
                                        </a>
                                    </div>
                                </div>
                                <div class="flex items-center flex-wrap gap-1.5 lg:gap-3.5">
                                    <a class="btn btn-sm btn-light" href="html/demo6/account/home/get-started.html">
                                        <i class="ki-filled ki-exit-down !text-base">
                                        </i>
                                        Export
                                    </a>
                                    <div class="menu menu-default" data-menu="true">
                                        <div class="menu-item" data-menu-item-offset="0, 0"
                                            data-menu-item-placement="bottom-end" data-menu-item-toggle="dropdown"
                                            data-menu-item-trigger="hover">
                                            <button class="menu-toggle btn btn-light btn-sm flex-nowrap">
                                                <span class="flex items-center me-1">
                                                    <i class="ki-filled ki-calendar !text-md">
                                                    </i>
                                                </span>
                                                <span class="hidden md:inline text-nowrap">
                                                    September, 2024
                                                </span>
                                                <span class="inline md:hidden text-nowrap">
                                                    Sep, 2024
                                                </span>
                                                <span class="flex items-center lg:ms-4">
                                                    <i class="ki-filled ki-down !text-xs">
                                                    </i>
                                                </span>
                                            </button>
                                            <div class="menu-dropdown w-48 py-2 scrollable-y max-h-[250px]">
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-title">
                                                            January, 2024
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-title">
                                                            February, 2024
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item active">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-title">
                                                            March, 2024
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-title">
                                                            April, 2024
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-title">
                                                            May, 2024
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-title">
                                                            June, 2024
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-title">
                                                            July, 2024
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-title">
                                                            August, 2024
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-title">
                                                            September, 2024
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-title">
                                                            October, 2024
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-title">
                                                            November, 2024
                                                        </span>
                                                    </a>
                                                </div>
                                                <div class="menu-item">
                                                    <a class="menu-link" href="#">
                                                        <span class="menu-title">
                                                            December, 2024
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Container -->
                        </div>
                        <!-- End of Toolbar -->
                        <!-- Container -->
                        <div class="container-fixed">
                            <div class="grid gap-5 lg:gap-7.5">
                                <!-- begin: grid -->
                                <div class="grid lg:grid-cols-3 gap-5 lg:gap-7.5 items-stretch">
                                    <div class="lg:col-span-2">
                                        <div class="card h-full">
                                            <div class="card-body flex flex-col place-content-center gap-5">
                                                <div class="flex justify-center">
                                                    <img alt="image" class="dark:hidden max-h-[180px]"
                                                        src="assets/media/illustrations/32.svg" />
                                                    <img alt="image" class="light:hidden max-h-[180px]"
                                                        src="assets/media/illustrations/32-dark.svg" />
                                                </div>
                                                <div class="flex flex-col gap-4">
                                                    <div class="flex flex-col gap-3 text-center">
                                                        <h2 class="text-1.5xl font-semibold text-gray-900">
                                                            Bienvenidos al sistema de gestión de gastos personales
                                                        </h2>
                                                        <p class="text-sm font-medium text-gray-700">
                                                            Este sistema te permitirá llevar un control de tus gastos personales, ingresos y
                                                            ahorros.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lg:col-span-1">
                                        <!-- // -->
                                    </div>
                                </div>
                                <!-- end: grid -->
                            </div>
                        </div>
                        <!-- End of Container -->
                    </main>
                    <!-- Footer -->
                    <footer class="footer">
                        <!-- Container -->
                        <div class="container-fixed">
                            <div
                                class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5">
                                <div class="flex order-2 md:order-1 gap-2 font-normal text-2sm">
                                    <span class="text-gray-500">
                                        {{ date('Y') }}©
                                    </span>
                                    <a class="text-gray-600 hover:text-primary" href="https://keenthemes.com">
                                        Desarrollado por MendCode
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End of Container -->
                    </footer>
                    <!-- End of Footer -->
                </div>
            </div>
            <!-- End of Main -->
        </div>
        <!-- End of Wrapper -->
    </div>
    <!-- End of Base -->
    <!-- Scripts -->
    <script src="assets/js/core.bundle.js"></script>
    <script src="assets/js/widgets/general.js"></script>
    <!-- End of Scripts -->
</body>

</html>
