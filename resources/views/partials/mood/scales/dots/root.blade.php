<div class="moood-icons">
    {{-- {{ dd(__METHOD__, $scale) }} --}}
    @foreach ($scale['levels'] as $level)
        @include('partials.mood.scales.dots.marker', ['level' => $level])
    @endforeach
    {{-- @for ($i = 0; $i < $scale['levels']; $i++)
        @include('partials.mood.scales.dots.marker', ['index' => $i])
    @endfor --}}
    @include('partials.mood.scales.dots.submit')
</div>
<script>
    document.querySelectorAll('.moood-icon input').forEach(e => {
        e.addEventListener('click', () => {
            document.querySelector('#submittable').classList.remove('hidden');
        });
    });

</script>
