<div class="better-input" :class="{'has-error': {{ $error }} }">
    <label id="{{ $labelId }}" for="{{ $inputId }}">
        {{ $label }}
        @if($required)
            <span>
                *
            </span>
        @endif
    </label>
    <div class="inputWrapper">
        <{{ $type === 'textarea' ? 'textarea' : 'input' }} {!! $type !== 'textarea' ? 'type="' . $type . '"' : '' !!} id="{{ $inputId }}" placeholder="{{ $placeholder }}" required="{{ $required ? 'required' : '' }}" aria-labelledby="{{ $labelId }}" {!! $help ? 'aria-describedby="' . $helpId . '"' : '' !!} {!! $error ? ':aria-invalid="' . $error . '"' : '' !!} {{ $attributes }}></{{ $type === 'textarea' ? 'textarea' : 'input' }}>
        <x-better-icon name="cancel" size="small" :x-show="$error ?? 'false'" x-cloak></x-better-icon>
    </div>
    @if($help)
        <p id="{{ $helpId }}" class="help">
            {{ $help }}
        </p>
    @endif

    @if($error)
        <p class="error" aria-live="assertive" aria-relevant="additions removals" {!! $error ? 'x-show="' . $error . '" x-text="' . $error . '"' : '' !!} x-cloak></p>
    @endif
</div>
