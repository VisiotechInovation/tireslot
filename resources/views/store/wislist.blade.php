<x-store-head :canonical="'wishlist'" :title='"Lista de produse favorite"' :description='"Lista de produse favorite | "'/>
@livewire('store-header')
<main>
	@livewire("store-wishlist")
	<x-support />
</main>
<x-store-footer />
