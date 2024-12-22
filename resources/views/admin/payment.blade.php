<x-dashboardheader />
<x-dashboardnavbar />
<x-dashboardsidebar :active="__('store_settings')" />
@livewire('paymentstable', ['tableName' => 'payments'])
<x-dashboardfooter />
