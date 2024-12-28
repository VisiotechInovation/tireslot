<div>

 @if ($paginator->hasPages())
  @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : ($this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1))

  <nav role="navigation" aria-label="Pagination Navigation" style="margin-top:15px" class="section__header container">
   <div>
    <p>
     <span>
      @if (app()->has('label_pagination_display'))
       {!! app('label_pagination_display') !!}
      @endif
     </span>
     <strong>{{ $paginator->firstItem() }}</strong>
     <span>
      @if (app()->has('label_pagination_to'))
       {!! app('label_pagination_to') !!}
      @endif
     </span>
     <strong>{{ $paginator->lastItem() }}</strong>
     <span>
      @if (app()->has('label_pagination_of'))
       {!! app('label_pagination_of') !!}
      @endif
     </span>
     <strong>{{ $paginator->total() }}</strong>
     <span>
      @if (app()->has('label_pagination_results'))
       {!! app('label_pagination_results') !!}
      @endif
     </span>
    </p>
   </div>

   <div style="display:flex; align-items:center; text-align:center; justify-content:space-between; margin:0">
    {{-- Previous Page Link --}}
    <span>
     @if ($paginator->onFirstPage())
      <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
       <span class="quantity__arrow disabled" aria-hidden="true" style="display: inline !important">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
         <path fill-rule="evenodd"
          d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
          clip-rule="evenodd" />
        </svg>
       </span>
      </span>
     @else
      <a href="{{ $paginator->previousPageUrl() }}" onclick="gotop()" type="button"
       wire:click="previousPage('{{ $paginator->getPageName() }}')"
       dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
       rel="prev" class="leftbar__close" aria-label="{{ __('pagination.previous') }}">
       <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd"
         d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
         clip-rule="evenodd" />
       </svg>
      </a>
     @endif
    </span>

    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
     @if (is_array($element))
      @foreach ($element as $page => $url)
       <span wire:key="paginator-{{ $paginator->getPageName() }}-{{ $page }}">

        @if (
            $page == 1 ||
                $page == $paginator->lastPage() ||
                $page == $paginator->currentPage() ||
                $page == $paginator->currentPage() - 1 ||
                $page == $paginator->currentPage() + 1)
         @if ($page == $paginator->currentPage())
          <span class="leftbar__close" style="background: transparent">{{ $page }}</span>
         @else
          <a href="{{ $url }}" onclick="gotop()" type="button"
           wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" class="leftbar__close"
           style="color: white; margin-left: 1px; margin-right: 1px;text-decoration: none"
           onmouseover="this.style.color='black';" onmouseout="this.style.color='white';">
           {{ $page }}
          </a>
         @endif
        @elseif (
            ($page == 2 && $paginator->currentPage() > 3) ||
                ($page == $paginator->lastPage() - 1 && $paginator->currentPage() < $paginator->lastPage() - 2))
         <span style="margin-left: 15px; margin-right: 10px;">...</span>
        @endif
       </span>
      @endforeach
     @endif
    @endforeach
    {{-- Next Page Link --}}
    <span>
     @if ($paginator->hasMorePages())
      <a href="{{ $paginator->nextPageUrl() }}" wire:click="nextPage('{{ $paginator->getPageName() }}')"
       onclick="gotop()"
       dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after"
       rel="next" class="leftbar__close" aria-label="{{ __('pagination.next') }}">
       <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd"
         d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
         clip-rule="evenodd" />
       </svg>
      </a>
     @else
      <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
       <span class="quantity__arrow disabled" aria-hidden="true">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
         <path fill-rule="evenodd"
          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
          clip-rule="evenodd" />
        </svg>
       </span>
      </span>
     @endif
    </span>
   </div>
  </nav>
 @endif
 <script>
  function gotop() {
   let livewireRequestDuration = 0;
   let startTime;

   Livewire.hook('message.sent', () => {
    startTime = Date.now();
   });

   Livewire.hook('message.processed', () => {
    livewireRequestDuration = Date.now() - startTime;

    setTimeout(() => {
     document.documentElement.style.scrollBehavior = 'smooth';
     window.scrollTo({
      top: 0,
      left: 0
     });
     setTimeout(() => {
      document.documentElement.style.scrollBehavior = 'auto';
     }, 500);
    }, livewireRequestDuration);
   });
  }
 </script>

</div>
