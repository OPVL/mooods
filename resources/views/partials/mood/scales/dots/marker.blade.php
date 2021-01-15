<label class="container moood-icon">
    {{-- {{dd($level)}} --}}
    <input type="radio" name="mood" id="mood-{{ $level['index'] }}" value="{{ floatval($level['value']) }}">
    <span class="checkmark mood mood-{{ $level['index'] }}"></span>
</label>
