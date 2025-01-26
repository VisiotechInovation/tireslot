<x-store-head :canonical="'privacy'" :title="'Politica de confidențialitate'" :description="'Politica de confidențialitate'"/>
@livewire('store-header')
	<main>
		<!---------------------------------------------------------->
		<!------------------------Breadcrumbs----------------------->
		<div class="breadcrumbs container">
			<a class="breadcrumbs__link" href="{{ url("/") }}">
				Home
			</a>
			<a class="breadcrumbs__link" href="{{ url("/privacy") }}">
				Privacy
			</a>
		</div>

	</main>
	<x-store-footer />
