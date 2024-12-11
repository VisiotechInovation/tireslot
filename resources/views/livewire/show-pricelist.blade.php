<section class="content">
 {{-- X-Components --}}
 <x-alert />


 {{-- Delete Record --}}
 <aside>
  <div class="background background--center @if ($delete) active @endif"></div>
  <div class="aside aside--confirm @if ($delete) active @endif">
   <span>
    Are you sure to delete this record?
   </span>
   <button class="button button--primary button--long" wire:click.prevent="deleteSingleRecord()">
    <span>Delete</span>
   </button>
   <button class="button button--danger button--long" wire:click.prevent="cancelItemRemoval()">
    <span>Cancel</span>
   </button>
  </div>
 </aside>


 {{-- Navigation --}}
 <nav class="nav--controls">
  <h1 class="table--name">Pricelist: {{ $pricelist->name }}</h1>
  {{-- Refresh Button --}}
  <a class="button button--primary button--centered" tooltip="Back to all pricelist" tooltip-top
   href="{{ route('pricelists') }}">
   <svg>
    <polyline points="15 18 9 12 15 6"></polyline>
   </svg>
  </a>
  <a class="button button--primary button--centered" tooltip="Create new pricelist" tooltip-top
   href="{{ route('new_pricelist') }}">
   <svg>
    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
    <polyline points="14 2 14 8 20 8"></polyline>
    <line x1="12" y1="18" x2="12" y2="12"></line>
    <line x1="9" y1="15" x2="15" y2="15"></line>
   </svg>
  </a>
  @if ($edititem === null)
   <button class="button button--primary button--centered" tooltip="Edit this Price" tooltip-left
    wire:click.prevent="edititem()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
     <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
     <path d="M16 5l3 3" />
    </svg>
   </button>
  @else
   <button class="button button--primary button--centered" tooltip="Save Edit" tooltip-left
    wire:click.prevent="saveitem()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M14 3v4a1 1 0 0 0 1 1h4" />
     <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
     <path d="M9 15l2 2l4 -4" />
    </svg>
   </button>
   <button class="button button--primary button--centered" tooltip="Cancel edit" tooltip-left
    wire:click.prevent="cancelitem()">
    <svg>
     <path stroke="none" d="M0 0h24v24H0z" fill="none" />
     <path d="M14 3v4a1 1 0 0 0 1 1h4" />
     <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2" />
     <path d="M10 12l4 5" />
     <path d="M10 17l4 -5" />
    </svg>
   </button>
  @endif
  <button class="button button--primary button--centered" tooltip="Delete this Price" tooltip-left
   wire:click.prevent="confirmItemRemoval({{ $pricelist->id }})">
   <svg>
    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
    <path d="M14 3v4a1 1 0 0 0 1 1h4" />
    <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
    <path d="M9 14l6 0" />
   </svg>
  </button>
 </nav>


 {{-- Tabs Header --}}
 <nav class="nav--tabs">
  <button class="button button--primary button--long button--active" id="detailsButton">
   Details
  </button>
  <button class="button button--primary button--long" id="relatedButton">
   Related
  </button>
 </nav>


 {{-- Tabs Body (Details) --}}
 <form style="height: calc(100% - 107.5px);" class="tabs__content details__view active" id="detailsContent">
  {{-- Price List Name --}}
  <div class="input__tabs">
   @if ($edititem === null)
    <span class="disabled">{{ $pricelist->name }}</span>
   @else
    <input type="text" placeholder=" " wire:model.defer="record.name">
   @endif
   <label> Name</label>
  </div>

  {{-- Price List Currency --}}
  <div class="input__tabs">
   @if ($edititem === null)
    <span class="disabled">{{ $pricelist->currency->name }}</span>
   @else
    <select wire:model.defer="record.currency">
     @foreach ($currencies as $currency)
      <option value="{{ $currency->id }}">{{ $currency->name }}</option>
     @endforeach
    </select>
   @endif
   <label>Currency</label>
  </div>

  {{-- Price List Active --}}
  <div class="details__checkboxes details__long">
   {{-- Price List Active --}}
   <div class="checkbox__details ">
    @if ($edititem === null)
     @if ($pricelist->active)
      <input type="checkbox" id="active1" checked class="disabled" disabled />
      <label for="active1" class="disabled">Active</label>
     @else
      <input type="checkbox" id="active2" class="disabled" disabled />
      <label for="active2" class="disabled">Active</label>
     @endif
    @else
     <input type="checkbox" id="active3" wire:model.defer="record.active" />
     <label for="active3">Active</label>
    @endif
   </div>
  </div>



  {{-- Price List Create date / time --}}
  <div class="input__tabs">
   <span class="disabled">{{ $pricelist->created_at }}</span>
   <label>Create date / time</label>
  </div>

  {{-- Price List Create by --}}
  <div class="input__tabs">
   <span class="disabled">{{ $pricelist->createdby }}</span>
   <label>Create by</label>
  </div>

  {{-- Price List Updated date / time --}}
  <div class="input__tabs">
   <span class="disabled">{{ $pricelist->updated_at }}</span>
   <label>Updated date / time</label>
  </div>

  {{-- Price List Last modified by --}}
  <div class="input__tabs">
   <span class="disabled">{{ $pricelist->lastmodifiedby }}</span>
   <label>Last modified by</label>
  </div>

  {{-- Save Button --}}
  @if ($edititem != null)
   <button class="button button--fill button--secondary details__long" wire:click.prevent="saveitem()" value="Save">
    Save
   </button>
  @endif
 </form>


 {{-- Tabs Body (Related) --}}
 <div style="height: calc(100% - 107.5px);" class="tabs__content related__view" id="relatedContent">
  @livewire('related-productson-pricelist', ['priceId' => $pricelist->id])
 </div>
</section>