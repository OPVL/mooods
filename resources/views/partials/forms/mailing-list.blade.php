<form action="{{ $route }}">
    @method($method)
    <input type="email" name="mailableEmail" id="mailableEmail" autocomplete="{{ $autocomplete ?? 'email' }}" {{ $attributes ?? ''}}>
    <input type="checkbox" name="mailableConsent" id="mailableConsent" required aria-readonly="true">
</form>
