<x-store-head :canonical='"cart"' :title='"Coș de cumpărături"' :description="'Cos de cumparaturi'"/>
@livewire('store-header')
<main>
	@livewire("store-cart")
	<x-support />
</main>
<x-store-footer />
