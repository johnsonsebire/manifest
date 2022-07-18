<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    <div class="lang-dropdown">
    
        <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{__($default_language)}}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#" wire:click="english">{{__('English')}}</a>
              <a class="dropdown-item" href="#" wire:click="french">{{__('French')}}</a>
              {{-- <a class="dropdown-item" href="#"></a> --}}
            </div>
          </div>
        
    </div>

</div> 
