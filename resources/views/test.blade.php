<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="app-layout bg-white">
	
    {{-- Hovedcontainer for hele layoutet --}}
    <div id="layout-container" x-data="{ sidebarIsOpen: false }" class="flex flex-row bg-red-500">
			{{-- Side navbar --}}
			<nav id="side-navbar" x-bind:class="sidebarIsOpen ? 'translate-x-0' : '-translate-x-64'" class="h-dvh fixed md:static z-30 left-0 top-0 w-64 bg-fuchsia-600 transition-transform duration-300 md:translate-x-0 flex flex-col">
					<div id="lidtGuf" class="">
							<p>Hej1</p>
							<p>Hej2</p>
							<p>Hej3</p>
							<p>Hej4</p>
							<p>Hej5</p>
							<p>Hej6</p>
							<p>Hej7</p>
					</div>
					<div id="tango" class="overflow-y-auto bg-amber-300 grow">
							<p>Her er indhold aller første</p>
							<p>Her er indhold næst øverst</p>
							<p>Her er indhold tredje øverst</p>
							<p>Her er indhold</p>
							<p>Her er indhold</p>
							<p>Her er indhold</p>
							<p>Her er indhold 3. sidste</p>
							<p>Her er indhold 2. sidste</p>
							<p>Her er indhold aller sidste</p>
					</div>
					<div class="loldu">
							<p>her er noget crap1</p>
							<p>her er noget crap2</p>
					</div>
			</nav>
			
			{{-- "Top navbar + Main content"-wrapper --}}
			<div id="topnavbar-and-maincontent-wrapper" class="h-dvh flex flex-col grow overflow-y-auto bg-amber-700">
					{{-- Top navbar --}}
					<div id="top-navbar" class="sticky top-0 z-10 bg-amber-300">
							<p>2</p>
							<button x-on:click="sidebarIsOpen = !sidebarIsOpen" class="ms-50">Tttoooggggggllleee</button>
					</div>

					{{-- Main content --}}
					<div id="main-content" class="grow bg-green-400">
						<div class="ms-50">
							<p>Her er indholdHer er indhold aller første</p>
							<p>Her er indholdHer er indhold næst øverst</p>
							<p>Her er indholdHer er indhold tredje øverst</p>
							<p>Her er indholdHer er indhold</p>
							<p>Her er indholdHer er indhold</p>
							<p>Her er indholdHer er indhold 3. sidste</p>
							<p>Her er indholdHer er indhold 2. sidste</p>
							<p>Her er indholdHer er indhold aller sidste</p>
						</div>
					</div>
			</div>
	</div>

</body>
</html>

