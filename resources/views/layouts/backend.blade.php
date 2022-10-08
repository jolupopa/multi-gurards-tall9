<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Administrador Site</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">




        <!-- Styles -->
        <link href="/css/vendors/flatpickr.min.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">




        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])


        @livewireStyles
        <style>
            [x-cloak] {
                display: none !important
            }
        </style>



    </head>

	<body	class="font-serif antialiased text-gray-400 bg-gray-200"
        :class="{ 'sidebar-expanded': sidebarOpen }"
        x-data="{ sidebarOpen: false, sidebarOpen: localStorage.getItem('sidebar-expanded') == 'true' }"
        x-init="$watch('sidebarOpen', value => localStorage.setItem('sidebar-expanded', value))" >
		<script>
			if (localStorage.getItem('sidebar-expanded') == 'true') {
				document.querySelector('body').classList.add('sidebarOpen');
			} else {
				document.querySelector('body').classList.remove('sidebarOpen');
			}
		</script>
		<!-- Page wrapper -->
		<div class="flex h-screen overflow-hidden">
			<!-- Sidebar -->
			<div>
				<!-- capa de opacidad -->
				<div
					class="fixed inset-0 z-10 transition-opacity duration-200 bg-slate-400 opacity-30 lg:hidden lg:z-auto"
					:class="sidebarOpen ? 'opacity-100' : 'opacity-0 pointer-events-none'"
					aria-hidden="true"
					x-cloak=""
				></div>
				<!-- sidebar -->
				<div
					id="sidebar"
					class=" flex flex-col absolute z-40 left-0 top-0 lg:static lg:left-auto lg:top-auto translate-x-0 translate-y-0 skew-y-0 skew-x-0 rotate-0 scale-100  h-screen overflow-y-auto overflow-hidden w-64 lg:w-20
					lg:translate-x-0
					2xl:!w-64 shrink-0  bg-gray-700 p-4 transition-all duration-200"
					:class="sidebarOpen ? 'translate-x-0  !w-64 ' : '-translate-x-64'"
					@click.outside="sidebarOpen = false"
					@keydown.escape.window="sidebarOpen = false"
					x-cloak="lg"
				>
					<!-- logo y btn -->
					<div class="flex justify-between px-2 pr-3 mb-5 border-b-2 border-slate-400">
						<!-- boton -->
						<button
							class="block lg:hidden text-slate-500"
							@click.stop="sidebarOpen = !sidebarOpen"
							aria-controls="sidebar"
							:aria-expanded="sidebarOpen"
						>
							<span class="absolute w-[1px] h-[1px] p-0 -m-[1px] overflow-hidden bg-clip-border whitespace-nowrap border-0">Close sidebar</span>
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-white" viewBox="0 0 16 16">
								<path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
							</svg>
						</button>
						<!-- icon logo  -->
						<a class="block mx-auto" href="../pages/dashboard-livewire.html">
							<x-logo />
						</a>
					</div>
					<!-- cuerpo de sidebar -->
					<div class="recal">
						<div>

							<!-- 1 links -->
							<ul class="mt-1">
								<!-- dashboard -->
								<li class="px-3 py-2 rounded-sm mb-[0.125rem]"
									x-data="{ open: true }">
									<a class="block overflow-hidden text-indigo-200 transition-all hover:text-white text-ellipsis whitespace-nowrap"
										href="#0"
										@click.prevent="sidebarOpen ? open = !open : sidebarOpen = true">
										<div class="flex items-center justify-between">
											<div class="flex">

												<svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="w-8 h-8 shrink-0" viewBox="0 0 24 24">
													<path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
													<path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z"/>
												</svg>
												<span class="ml-3 text-sm font-medium">Dashboard</span>
											</div>
										</div>
									</a>
								</li>


								<!-- anuncios 3 nivels -->
								<li class="px-3 py-2 rounded-sm mb-[0.125rem]  last:mb-0 bg-slate-900"
									x-data="{ open: true }">
									<a class="block overflow-hidden text-blue-400 transition-all hover:text-white text-ellipsis whitespace-nowrap"
										href="#0"
										@click.prevent="sidebarOpen ? open = !open : sidebarOpen = true">
										<div class="flex items-center justify-between">
											<div class="flex items-center">

												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-8 h-8 pt-2 shrink-0" viewBox="0 0 24 24">
												<path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
												<path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
												</svg>
												<span class="ml-3 text-sm font-medium">Anuncios</span>
											</div>
											<!-- Icon caret -->
											<div class="flex ml-2 duration-200 shrink-0 lg:max-w-none">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-3 h-3 ml-1 font-bold fill-current shrink-0 opacity-1" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
												</svg>
											</div>
										</div>
									</a>

									<div class=" 2xl:block"
										:class="sidebarOpen ? 'block' : 'hidden' ">
										<ul class="mt-1 pl-9" :class="open ? '!block' : 'hidden'">
											<li class="mb-1 last:mb-0">
												<a class="block overflow-hidden text-indigo-500 transition-all duration-150 text-ellipsis whitespace-nowrap" href="index.html">
													<span class="text-sm font-medium duration-200 "
													:class="sidebarOpen ? 'opacity-100' : 'opacity-0' ">Normal</span>
												</a>
											</li>
											<li class="mb-1 last:mb-0">
												<a class="block overflow-hidden transition-all duration-150 gq hover:text-slate-200 text-ellipsis whitespace-nowrap" href="analytics.html">
													<span class="text-sm font-medium duration-200 "
													:class="sidebarOpen ? 'opacity-100' : 'opacity-0' ">Destacados</span>
												</a>
											</li>
											<li class="mb-1 last:mb-0">
												<a class="block overflow-hidden transition-all duration-150 text-ellipsis whitespace-nowrap  hover:text-slate-200" href="fintech.html">
													<span class="text-sm font-medium duration-200 "
													:class="sidebarOpen ? 'opacity-100' : 'opacity-0' ">Super destacados</span>
												</a>
											</li>
										</ul>
									</div>
								</li>

								<!-- Clientes activa añadir  a li bg-slate-900 y el color text-indigo-500 al svg-->
								<li class="px-3 py-2 rounded-sm mb-[0.125rem]  last:mb-0"
								x-data="{ open: false }">
									<a class="block overflow-hidden text-indigo-200 transition-all hover:text-white text-ellipsis whitespace-nowrap"
										href="#0"
										@click.prevent="sidebarOpen ? open = !open : sidebarOpen = true">
										<div class="flex items-center justify-between">
											<div class="flex items-center">

												<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 shrink-0" viewBox="0 0 16 16">
													<path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
												</svg>
												<span class="ml-3 text-sm font-medium ">Clientes</span>
											</div>
											<!-- Icon caret -->
											<div class="flex ml-2 duration-200 shrink-0 lg:max-w-none 2xl:opacity-100">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-3 h-3 ml-1 font-bold fill-current shrink-0 opacity-1" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
												</svg>
											</div>
										</div>
									</a>
										<!-- anadir text-indigo-500 al selector  li a activo -->
									<div class=" 2xl:block"
										:class="sidebarOpen ? 'block' : 'hidden' ">
										<ul class="mt-1 pl-9" :class="open ? '!block' : 'hidden'">
											<li class="mb-1 last:mb-0">
												<a class="block overflow-hidden transition-all duration-150  hover:text-slate-200 text-ellipsis whitespace-nowrap" href="#">
													<span class="text-sm font-medium duration-200 "
													:class="sidebarOpen ? 'opacity-100' : 'opacity-0' ">Corredores</span>
												</a>
											</li>
											<li class="mb-1 last:mb-0">
												<a class="block overflow-hidden transition-all duration-150 hover:text-slate-200 text-ellipsis whitespace-nowrap" href="#">
													<span class="text-sm font-medium duration-200"
													:class="sidebarOpen ? 'opacity-100' : 'opacity-0' ">Agentes</span>
												</a>
											</li>
											<li class="mb-1 last:mb-0">
												<a class="block overflow-hidden transition-all duration-150 hover:text-slate-200 text-ellipsis whitespace-nowrap" href="#">
													<span class="text-sm font-medium duration-200"
													:class="sidebarOpen ? 'opacity-100' : 'opacity-0' ">Empresas</span>
												</a>
											</li>

										</ul>
									</div>
								</li>

                                                            							<!-- texto cabecera -->
							    <h3 class="pl-3 text-base font-semibold uppercase text-slate-500">
								<!-- texto contraido-->
								<span x-data
								class=""
								:class="sidebarOpen ? 'hidden' : 'block' "
								aria-hidden="true"
									>•••</span
								>
								<!--texto expandido -->
								<span x-data
								:class="sidebarOpen ? 'block' : 'hidden' "
								class=""
								>Web</span>

							    </h3>

                                <!-- Configuracion activa añadir  a li bg-slate-900 y el color text-indigo-500 al svg-->
								<li class="px-3 py-2 rounded-sm mb-[0.125rem]  last:mb-0"
								x-data="{ open: false }">
									<a class="block overflow-hidden text-indigo-200 transition-all hover:text-white text-ellipsis whitespace-nowrap"
										href="#0"
										@click.prevent="sidebarOpen ? open = !open : sidebarOpen = true">
										<div class="flex items-center justify-between">
											<div class="flex items-center">

                                                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-6 h-6 shrink-0" viewBox="0 0 16 16">
                                                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                                                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                                                  </svg>
												<span class="ml-3 text-sm font-medium ">Configuración</span>
											</div>
											<!-- Icon caret -->
											<div class="flex ml-2 duration-200 shrink-0 lg:max-w-none 2xl:opacity-100">
												<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-3 h-3 ml-1 font-bold fill-current shrink-0 opacity-1" :class="open ? 'rotate-180' : 'rotate-0'" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
												</svg>

											</div>
										</div>
									</a>
										<!-- anadir text-indigo-500 al selector  li a activo -->
									<div class=" 2xl:block"
										:class="sidebarOpen ? 'block' : 'hidden' ">
										<ul class="mt-1 pl-9" :class="open ? '!block' : 'hidden'">
											<li class="mb-1 last:mb-0">
												<a class="block overflow-hidden transition-all duration-150  hover:text-slate-200 text-ellipsis whitespace-nowrap" href="#">
													<span class="text-sm font-medium duration-200 "
													:class="sidebarOpen ? 'opacity-100' : 'opacity-0' ">Carrusel</span>
												</a>
											</li>
											<li class="mb-1 last:mb-0">
												<a class="block overflow-hidden transition-all duration-150  hover:text-slate-200 text-ellipsis whitespace-nowrap" href="#">
													<span class="text-sm font-medium duration-200"
													:class="sidebarOpen ? 'opacity-100' : 'opacity-0' ">Destacados</span>
												</a>
											</li>
											<li class="mb-1 last:mb-0">
												<a class="block overflow-hidden transition-all duration-150  hover:text-slate-200 text-ellipsis whitespace-nowrap" href="#">
													<span class="text-sm font-medium duration-200"
													:class="sidebarOpen ? 'opacity-100' : 'opacity-0' ">Datos Empresa</span>
												</a>
											</li>

										</ul>
									</div>
								</li>
							</ul>
						</div>

					</div>
					<!-- collapse  -->
					<div class="justify-end hidden pt-3 mt-auto lg:inline-flex 2xl:hidden">
						<div class="px-3 py-2">
							<button @click="sidebarOpen = !sidebarOpen">
								<span class="absolute w-[1px] h-[1px] p-0 -m-[1px] overflow-hidden bg-clip-border whitespace-nowrap border-0">Expand / collapse sidebar</span>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="text-white bi bi-arrow-bar-right" :class=" sidebarOpen && 'rotate-180' " viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M6 8a.5.5 0 0 0 .5.5h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L12.293 7.5H6.5A.5.5 0 0 0 6 8zm-2.5 7a.5.5 0 0 1-.5-.5v-13a.5.5 0 0 1 1 0v13a.5.5 0 0 1-.5.5z"/>
									</svg>

							</button>
						</div>
					</div>

				</div>
			</div>

			<!-- Content area -->
			<div class="relative flex flex-col flex-1 overflow-x-hidden overflow-y-auto">
				<!--   navbar-->
				<header class="sticky top-0 z-10 bg-white border-2 border-b-slate-200">
					<div class="px-4 sm:px-6 lg:m-2">
						<div class="flex items-center justify-between h-16 -mb-[1px]">
							<div class="flex">
								<!-- lg:hidden poner en boton de abajo -->
								<button
									class="text-slate-500 hover:text-slate-600 "
									@click.stop="sidebarOpen = !sidebarOpen"
									aria-controls="sidebar"
									:aria-expanded="sidebarOpen"
									>
									<span class="absolute w-[1px] h-[1px] p-0 -m-[1px] overflow-hidden whitespace-nowrap border-0">Open sidebar</span>
									<svg
										class="w-6 h-6 fill-current"
										viewBox="0 0 24 24"
										xmlns="http://www.w3.org/2000/svg"
									>
										<rect x="4" y="5" width="16" height="2"></rect>
										<rect x="4" y="11" width="16" height="2"></rect>
										<rect x="4" y="17" width="16" height="2"></rect>
									</svg>
								</button>
							</div>

							<div class="flex items-center">

								<!--2 btn search -->
								<div x-data="{ searchOpen: false }" x-cloak="" >  <!-- open btn search -->
									<button @click="searchOpen = true" class="relative inline-flex items-center justify-center w-8 h-8 transition-all rounded-full bg-slate-100 hover:bg-slate-200">
										<span class="absolute w-[1px] h-[1px] p-0 -m-[1px] overflow-hidden bg-clip-border whitespace-nowrap border-0 ">Search</span>
										<svg
											class="w-4 h-4 "
											viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												class="fill-current text-slate-500"
												d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"
											></path>
											<path
												class="fill-current text-slate-500"
												d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"
											></path>
										</svg>
									</button>
									<!-- capa se opacidad -->
										<div
												class="fixed inset-0 z-50 transition-opacity bg-slate-900 opacity-30"
												x-show="searchOpen"
												x-transition:enter="transition-all transform ease-out"
												x-transition:enter-start="translate-y-0 opacity-0"
												x-transition:enter-end="translate-y-0 opacity-100"
												x-transition:leave="transition-all transform ease-in"
												x-transition:leave-start="translate-y-0 opacity-100"
												x-transition:leave-end="translate-y-0 opacity-0"
												aria-hidden="true"
												x-cloak=""
											></div>
										<!-- search modal -->
									<div
										id="search-modal"
										class="fixed shrink-0 z-50 overflow-hidden flex min-w-[30rem] content-start top-20 right-2  lg:right-20 mb-4 justify-center opacity-100 px-4 sm:px-6"
										role="dialog"
										aria-modal="true"
										x-show="searchOpen"
										x-transition:enter="transition ease-in duration-200"
										x-transition:enter-start="opacity-0 translate-y-4"
										x-transition:enter-end="opacity-100"
										x-transition:leave="transition ease-in-out duration-200"
										x-transition:leave-start="opacity-100 translate-y-0"
										x-transition:leave-end="opacity-0 translate-y-4"
										x-cloak=""
										>  <!-- open one-->
											<div
											class="bg-white overflow-auto max-w-[42rem] w-full h-full rounded shadow-lg"
											@click.outside="searchOpen = false"
											@keydown.escape.window="searchOpen = false"
											> <!-- open two-->
											<form class="border border-slate-200">
												<div class="relative">
													<label for="modal-search" class="absolute w-[1px] h-[1px] p-0 -m-[1px] overflow-hidden whitespace-nowrap border-0">Search</label>
													<input
														id="modal-search"
														class="w-full py-3 pl-10 pr-4 border-0 appearance-none focus:ring-transparent bg placeholder:opacity-100"
														type="search"
														placeholder="Search Anything…"
														x-ref="searchInput"
													/>
													<button
														class="absolute inset-0 mr-auto hover:opacity-100"
														type="submit"
														aria-label="Search"
													>
														<svg
															class="w-4 h-4 ml-3 mr-2 fill-current shrink-0 current hover:opacity-100 hover:ml-4"
															viewBox="0 0 16 16"
															xmlns="http://www.w3.org/2000/svg"
														>
															<path
																d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"
															></path>
															<path
																d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"
															></path>
														</svg>
													</button>
												</div>
											</form>

											<div class="px-2 py-4">
												<div class="mb-3 last:mb-0 ">
													<div class="px-2 mb-2 text-sm font-semibold uppercase text-slate-600">Recent searches</div>

													<ul class="text-sm">
														<li>
															<a
																class="flex items-center p-2 rounded text-slate-800 hover:text-blue-800"
																href="#0"
																@click="searchOpen = false"
																@focus="searchOpen = true"
																@focusout="searchOpen = false"
															>
																<svg
																	class="w-4 h-4 mr-3 opacity-100 fill-current ml hover:opacity-50 shrink-0"
																	viewBox="0 0 16 16"
																>
																	<path
																		d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"
																	></path>
																</svg>
																<span
																	>Form Builder - 23 hours on-demand video</span
																>
															</a>
														</li>

														<li>
															<a
																class="flex items-center p-2 rounded text-slate-800 hover:text-blue-800"
																href="#0"
																@click="searchOpen = false"
																@focus="searchOpen = true"
																@focusout="searchOpen = false"
															>
																<svg
																	class="w-4 h-4 mr-3 opacity-100 fill-current ml hover:opacity-50 shrink-0"
																	viewBox="0 0 16 16"
																>
																	<path
																		d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"
																	></path>
																</svg>
																<span
																	>Access Mosaic on mobile and TV</span
																>
															</a>
														</li>

														<li>
															<a
																class="flex items-center p-2 rounded text-slate-800 hover:text-blue-800"
																href="#0"
																@click="searchOpen = false"
																@focus="searchOpen = true"
																@focusout="searchOpen = false"
															>
																<svg
																	class="w-4 h-4 mr-3 opacity-100 fill-current ml hover:opacity-50 shrink-0"
																	viewBox="0 0 16 16"
																>
																	<path
																		d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"
																	></path>
																</svg>
																<span
																	>Product Update - Q4 2021</span
																>
															</a>
														</li>

														<li>
															<a
																class="flex items-center p-2 rounded text-slate-800 hover:text-blue-800"
																href="#0"
																@click="searchOpen = false"
																@focus="searchOpen = true"
																@focusout="searchOpen = false"
															>
																<svg
																	class="w-4 h-4 mr-3 opacity-100 fill-current ml hover:opacity-50 shrink-0"
																	viewBox="0 0 16 16"
																>
																	<path
																		d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"
																	></path>
																</svg>
																<span
																	>Master Digital Marketing Strategy course</span
																>
															</a>
														</li>
														<li>
															<a
																class="flex items-center p-2 rounded text-slate-800 hover:text-blue-800"
																href="#0"
																@click="searchOpen = false"
																@focus="searchOpen = true"
																@focusout="searchOpen = false"
															>
																<svg
																	class="w-4 h-4 mr-3 opacity-100 fill-current ml hover:opacity-50 shrink-0"
																	viewBox="0 0 16 16"
																>
																	<path
																		d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"
																	></path>
																</svg>
																<span
																	>Dedicated forms for products</span
																>
															</a>
														</li>
														<li>
															<a
																class="flex items-center p-2 rounded text-slate-800 hover:text-blue-800"
																href="#0"
																@click="searchOpen = false"
																@focus="searchOpen = true"
																@focusout="searchOpen = false"
															>
																<svg
																	class="w-4 h-4 mr-3 opacity-100 fill-current ml hover:opacity-50 shrink-0"
																	viewBox="0 0 16 16"
																>
																	<path
																		d="M15.707 14.293v.001a1 1 0 01-1.414 1.414L11.185 12.6A6.935 6.935 0 017 14a7.016 7.016 0 01-5.173-2.308l-1.537 1.3L0 8l4.873 1.12-1.521 1.285a4.971 4.971 0 008.59-2.835l1.979.454a6.971 6.971 0 01-1.321 3.157l3.107 3.112zM14 6L9.127 4.88l1.521-1.28a4.971 4.971 0 00-8.59 2.83L.084 5.976a6.977 6.977 0 0112.089-3.668l1.537-1.3L14 6z"
																	></path>
																</svg>
																<span
																	>Product Update - Q4 2021</span
																>
															</a>
														</li>

													</ul>
												</div>

												<div class="mb-3 last:mb-0">
													<div class="px-2 mb-2 text-sm font-semibold uppercase text-slate-600">Recent pages</div>
													<ul class="text-sm">
														<li>
															<a
																class="flex items-center p-2 rounded text-slate-800 hover:text-blue-800"
																href="#0"
																@click="searchOpen = false"
																@focus="searchOpen = true"
																@focusout="searchOpen = false"
															>
																<svg class="w-4 h-4 mr-3 opacity-100 fill-current hover:opacity-50 shrink-0" viewBox="0 0 16 16">
																	<path
																		d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"
																	></path>
																</svg>
																<span
																	><span class="font-medium text-slate-800 hover:text-blue-700">Messages</span> - Conversation / …
																	/ Mike Mills</span
																>
															</a>
														</li>
														<li>
															<a
																class="flex items-center p-2 rounded text-slate-800 hover:text-blue-800"
																href="#0"
																@click="searchOpen = false"
																@focus="searchOpen = true"
																@focusout="searchOpen = false"
															>
																<svg class="w-4 h-4 mr-3 opacity-100 fill-current hover:opacity-50 shrink-0" viewBox="0 0 16 16">
																	<path
																		d="M14 0H2c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h8l5-5V1c0-.6-.4-1-1-1zM3 2h10v8H9v4H3V2z"
																	></path>
																</svg>
																<span
																	><span class="font-medium text-slate-800 hover:text-blue-800">Messages</span> - Conversation / …
																	/ Eva Patrick</span
																>
															</a>
														</li>
													</ul>
												</div>

											</div>

										</div> <!-- close two-->
									</div> <!-- close one-->
								</div> <!-- close btn search -->



								<!--3 btn notifications -->
								<div class="relative inline-flex items-center justify-center w-8 h-8 mx-2 transition-all rounded-full bg-slate-100 hover:bg-slate-200"
								x-data="{ open: false }"
								@click="open = true" x-cloak="">
									<button>
										<svg
											class="w-4 h-4 "
											viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg"
											>
											<!-- circulo icon mensaje -->
												<path
												class="fill-current text-slate-500"
												d="M6.5 0C2.91 0 0 2.462 0 5.5c0 1.075.37 2.074 1 2.922V12l2.699-1.542A7.454 7.454 0 006.5 11c3.59 0 6.5-2.462 6.5-5.5S10.09 0 6.5 0z"
												></path>
												<!-- cola icon mensaje -->
												<path
												class="fill-current text-slate-500"
												d="M16 9.5c0-.987-.429-1.897-1.147-2.639C14.124 10.348 10.66 13 6.5 13c-.103 0-.202-.018-.305-.021C7.231 13.617 8.556 14 10 14c.449 0 .886-.04 1.307-.11L15 16v-4h-.012C15.627 11.285 16 10.425 16 9.5z"
												></path>
										</svg>
										<!-- pto tienes mensajes -->
										<div class="absolute top-0 right-0 w-2 h-2 bg-red-500 rounded-full border-1"></div>
									</button>
									<!-- panel de notificacion -->

									<div
									class="origin-top-right z-10 absolute top-full right-0 -mr-48 sm:mr-0
									min-w-[20rem]  bg-white border border-slate-200 py-2 rounded shadow-md
									overflow-hidden mt-1"
									@click.outside="open = false"
									@keydown.escape.window="open = false"
									x-show="open"
									x-transition:enter="transition-all transform ease-out"
									x-transition:enter-start="translate-y-0 opacity-0"
									x-transition:enter-end="translate-y-0 opacity-100"
									x-transition:leave="transition-all transform ease-in"
									x-transition:leave-start="translate-y-0 opacity-100"
									x-transition:leave-end="translate-y-0 opacity-0"
									x-cloak="">
									<div class="p-2 px-2 ml-3 text-base font-semibold uppercase"
									>Notifications</div>
									<ul>
										<li class="border border-slate-200 ">
											<a
												class="block px-4 py-2 border-slate-400 hover:bg-slate-100"
												href="#0"
												@click="open = false"
												@focus="open = true"
												@focusout="open = false"
											>
												<span class="block mb-2 text-sm"
													>📣
													<span class="font-medium text-slate-800"
														>Edit your information in a swipe</span
													>
													Sint occaecat cupidatat non proident, sunt in culpa
													qui officia deserunt mollit anim.</span
												>
												<span class="block ml-3 text-base font-medium">Feb 12, 2021</span>
											</a>
										</li>
										<li class="border border-slate-200 ">
											<a
												class="block px-4 py-2 border-slate-400 hover:bg-slate-100"
												href="#0"
												@click="open = false"
												@focus="open = true"
												@focusout="open = false"
											>
												<span class="block mb-2 text-sm"
													>📣
													<span class="font-medium text-slate-800"
														>Edit your information in a swipe</span
													>
													Sint occaecat cupidatat non proident, sunt in culpa
													qui officia deserunt mollit anim.</span
												>
												<span class="block ml-3 text-base font-medium">Feb 9, 2021</span>
											</a>
										</li>

									</ul>
									</div>
								</div>


								<!--3 btn info -->
								<div class="relative inline-flex w-8" x-data="{ open: false }" x-cloak="">
									<button
										class="flex items-center justify-center w-8 h-8 transition-all rounded-full bg-slate-100 hover:bg-slate-200"
										:class="{ 'bg-gray-300': open }"
										aria-haspopup="true"
										@click.prevent="open = !open"
										:aria-expanded="open"
									>
										<span class="absolute w-[1px] h-[1px] p-0 -m-[1px] overflow-hidden bg-clip-border whitespace-nowrap border-0 ">Info</span>
										<svg
											class="w-4 h-4"
											viewBox="0 0 16 16"
											xmlns="http://www.w3.org/2000/svg"
										>
											<path
												class= "text-white fill-currentl"
												d="M8 0C3.6 0 0 3.6 0 8s3.6 8 8 8 8-3.6 8-8-3.6-8-8-8zm0 12c-.6 0-1-.4-1-1s.4-1 1-1 1 .4 1 1-.4 1-1 1zm1-3H7V4h2v5z"
											></path>
										</svg>
									</button>
									<div
										class="absolute right-0 z-20 w-40 py-2 mt-1 overflow-hidden origin-top-right bg-white border rounded shadow-md top-full border-slate-200 "
										@click.outside="open = false"
										@keydown.escape.window="open = false"
										x-show="open"
										x-transition:enter="transition-all transform ease-out"
										x-transition:enter-start="translate-y-0 opacity-0"
										x-transition:enter-end="translate-y-0 opacity-100"
										x-transition:leave="transition-all transform ease-in"
										x-transition:leave-start="translate-y-0 opacity-100"
										x-transition:leave-end="translate-y-0 opacity-0"
										x-cloak=""
									>
										<div class="px-3 pt-2 pb-1 text-sm font-semibold text-gray-400 uppercase "> Buscas Ayuda?</div>
										<ul>
											<li>
												<a
													class="flex items-center px-3 py-1 text-sm font-medium text-indigo-500 hover:text-indigo-700"
													href="#0"
													@click="open = false"
													@focus="open = true"
													@focusout="open = false"
												>
													<svg
														class="w-3 h-3 mr-2 text-indigo-300 fill-current shrink-0"
														viewBox="0 0 12 12"
													>
														<rect y="3" width="12" height="9" rx="1"></rect>
														<path d="M2 0h8v2H2z"></path>
													</svg>
													<span>Documentación</span>
												</a>
											</li>
											<li>
												<a
													class="flex items-center px-3 py-1 text-sm font-medium text-indigo-500 hover:text-indigo-700"
													href="#0"
													@click="open = false"
													@focus="open = true"
													@focusout="open = false"
												>
													<svg
														class="w-3 h-3 mr-2 text-indigo-300 fill-current shrink-0"
														viewBox="0 0 12 12"
													>
														<path
															d="M10.5 0h-9A1.5 1.5 0 000 1.5v9A1.5 1.5 0 001.5 12h9a1.5 1.5 0 001.5-1.5v-9A1.5 1.5 0 0010.5 0zM10 7L8.207 5.207l-3 3-1.414-1.414 3-3L5 2h5v5z"
														></path>
													</svg>
													<span>Soporte en linea</span>
												</a>
											</li>
											<li>
												<a
													class="flex items-center px-3 py-1 text-sm font-medium text-indigo-500 hover:text-indigo-700"
													href="#0"
													@click="open = false"
													@focus="open = true"
													@focusout="open = false"
												>
													<svg
														class="w-3 h-3 mr-2 text-indigo-300 fill-current shrink-0"
														viewBox="0 0 12 12"
													>
														<path
															d="M11.854.146a.5.5 0 00-.525-.116l-11 4a.5.5 0 00-.015.934l4.8 1.921 1.921 4.8A.5.5 0 007.5 12h.008a.5.5 0 00.462-.329l4-11a.5.5 0 00-.116-.525z"
														></path>
													</svg>
													<span>Contactanos</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<!-- linea vertical -->
								<hr class="w-[1px] h-6 bg-slate-500 mx-3" />

								<!--5 dropdown user -->
								<div class="relative inline-flex ml-4 " x-data="{ open: false }" x-cloak="">
									<button
										class="inline-flex items-center justify-center hover:text-gray-600"
										aria-haspopup="true"
										@click.prevent="open = !open"
										:aria-expanded="open"
									>
										<img
											class="w-8 h-8 rounded-full"
											src="../images/user-avatar-32.png"
											width="32"
											height="32"
											alt="User"
										/>
										<div class="flex items-center overflow-hidden text-ellipsis whitespace-nowrap hover:text-slate-500">
											<span class="ml-2 overflow-hidden text-sm font-medium bg-white text-ellipsis whitespace-nowrap">Juan Perez</span>
											<!-- icon de caret v -->
											<svg class="w-3 h-3 ml-1 fill-current shrink-0 text-slate-500" viewBox="0 0 12 12">
												<path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z"></path>
											</svg>
										</div>
									</button>
									<div
										class="absolute right-0 z-20 w-40 py-2 mt-1 overflow-hidden origin-top-right bg-white border rounded shadow-md top-full border-slate-200"
										@click.outside="open = false"
										@keydown.escape.window="open = false"
										x-show="open"
										x-transition:enter="transition-all transform ease-out"
										x-transition:enter-start="translate-y-0 opacity-0"
										x-transition:enter-end="translate-y-0 opacity-100"
										x-transition:leave="transition-all transform ease-in"
										x-transition:leave-start="translate-y-0 opacity-100"
										x-transition:leave-end="translate-y-0 opacity-0"
										x-cloak=""
									>
										<div class="pt-[.125rem] pb-2 px-3 mb-1  border-slate-200 border-b-2">
											<div class="font-medium text-slate-800">Juan Perez</div>
											<div class="text-sm italic text-slate-300">Administrador</div>
										</div>
										<ul class="divide-y">
											<li>
												<a
													class="flex items-center px-3 py-1 text-sm font-medium text-indigo-500 hover:bg-slate-400 hover:text-white"
													href="settings.html"
													@click="open = false"
													@focus="open = true"
													@focusout="open = false"
													>Perfil</a
												>
											</li>

											<li>
												<a
													class="flex items-center px-3 py-1 text-sm font-medium text-indigo-500 hover:bg-slate-400 hover:text-white"
													href="settings.html"
													@click="open = false"
													@focus="open = true"
													@focusout="open = false"
													>Configuración</a
												>
											</li>
											<li>
												<a
													class="flex items-center px-3 py-1 text-sm font-medium text-indigo-500 hover:bg-slate-400 hover:text-white"
													href="signin.html"
													@click="open = false"
													@focus="open = true"
													@focusout="open = false"
													>Salir</a
												>
											</li>
										</ul>
									</div>
								</div>

							</div>
						</div>
					</div>
				</header>

				<main>
					<div class="p-1 px-6 lg:pl-8 py-8 w-full max-w-[96rem] mx-auto">
					Hola desde contenido




					</div>
				</main>
			</div>
		</div>

	</body>


</html>
