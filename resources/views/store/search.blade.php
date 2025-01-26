<x-store-head :canonical="'search'" :title="'Search'" :description="'Search'" />
@livewire('store-header')
<main>
	@livewire("store-search", ["data" => $data])
</main>
<x-store-footer />
