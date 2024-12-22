<x-dashboardheader />
<x-dashboardnavbar />
<x-dashboardsidebar :active="__('store_settings')" />
@livewire('variantstable', ['tableName' => 'variants'])
<x-dashboardfooter />
