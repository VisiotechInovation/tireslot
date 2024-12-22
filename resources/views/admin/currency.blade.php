<x-dashboardheader />
<x-dashboardnavbar />
<x-dashboardsidebar :active="__('store_settings')" />
@livewire('currenciestable', ['tableName' => 'currencies'])
<x-dashboardfooter />
