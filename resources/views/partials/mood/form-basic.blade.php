<div class="question">
    {{ $question ?? 'how are you feeling?' }}
</div>
<div class="response">
    <form class="response-form" action="{{ $route }}" method="POST">
        @csrf
        {{-- {{ dd(__METHOD__, $scale) }} --}}
        @include($scale['template'] ?? 'scales::dots.root')

        <div class="moood-thoughts">
            <label for="mood-thought">enter your thoughts</label>
            <input class="hidden" type="text" name="thoughts" id="mood-thought">
        </div>
        {{-- extract this to separate method to show privacy policy on env
        (prod|dev) --}}
        @if (config('app.env') !== 'self-hosted')
            <div class="privacy-policy">usage of this service is subject to our data privacy policy. you can
                opt out of any anonymoised tracking <a href="opt-out-tracking">here</a> or find out more
                about the data collected and your options <a href="privacy-policy">here</a></div>
        @endif
    </form>
</div>
