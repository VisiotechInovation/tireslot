<x-dashboardheader />
<x-dashboardnavbar />
<x-dashboardsidebar :active="__('store_settings')" />
@livewire('custom-scripts-table', ['tableName' => 'custom_scripts'])
<x-dashboardfooter />
