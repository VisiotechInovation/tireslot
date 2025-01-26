<x-store-head :canonical="'terms'" :title='" Termeni si Conditii"' :description='"Termeni și conditii"'/>
@livewire('store-header')
<main>
	<!---------------------------------------------------------->
	<!------------------------Breadcrumbs----------------------->
	<div class="breadcrumbs container">
		<a class="breadcrumbs__link" href="{{ url("/") }}">
			Home
		</a>
		<a class="breadcrumbs__link" href="{{ url("/terms") }}">
			Terms
	</div>
	<!----------------------End Breadcrumbs--------------------->
	<!---------------------------------------------------------->
	<!----------------------Section Header---------------------->

	<!------------------End Terms & Conditions------------------>
	<!---------------------------------------------------------->
</main>
<x-store-footer />
