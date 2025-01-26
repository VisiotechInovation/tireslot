<x-store-head :canonical="'about'" :title="' About us'" :description="'About us'" />
@livewire('store-header')
<main>
	<!---------------------------------------------------------->
	<!------------------------Breadcrumbs----------------------->
	<div class="breadcrumbs container">
		<a class="breadcrumbs__link" href="{{ url("/") }}">
			Home
		</a>
		<a class="breadcrumbs__link" href="{{ url("/about") }}">
			About us
		</a>
	</div>
	<!----------------------End Breadcrumbs--------------------->
	<!---------------------------------------------------------->
	<!----------------------Section Header---------------------->

	<!---------------------End About Info----------------------->
	<!---------------------------------------------------------->

</main>
<x-store-footer />
