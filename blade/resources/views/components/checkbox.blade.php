<div class="better-checkbox">
    <label class="container" id="{{ $labelId }}" htmlFor="{{ $inputId }}">
        <input type="checkbox" id="{{ $inputId }}" aria-labelledby="{{ $labelId }}" />
        <span class="checkmark">
            <svg width="24" height="24" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5 13L9 17L19 7" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </span>
        {{ $label }}
    </label>
    @if($error)
        <p class="error" aria-live="assertive" aria-relevant="additions removals" {!! $error ? 'x-show="' . $error . '" x-text="' . $error . '"' : '' !!} x-cloak></p>
    @endif
</div>
