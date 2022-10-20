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
        <select id="{{ $inputId }}" required="{{ $required ? 'required' : '' }}" aria-labelledby="{{ $labelId }}" {!! $help ? 'aria-describedby="' . $helpId . '"' : '' !!} {!! $error ? ':aria-invalid="' . $error . '"' : '' !!} {{ $attributes }}>
            @foreach($options as $value => $option)
                <option value="{{ $value }}">{{ $option }}</option>
            @endforeach
        </select>
        <x-better-icon name="nav-arrow-down" size="small" class="select"></x-better-icon>
        @if($error)
            <x-better-icon name="cancel" size="small" class="error" :x-show="$error ?? 'false'" x-cloak></x-better-icon>
        @endif
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
