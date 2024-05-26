<!-- resources/views/vendor/backpack/crud/filters/text.blade.php -->
<div class="input-group backpack-filter mb-2">
    <input type="text" class="form-control" id="text_filter" placeholder="{{ $filter->label }}" value="{{ request($filter->name) }}">
    <div class="input-group-append">
        <button class="btn btn-primary" type="button" onclick="applyFilter()">Apply</button>
    </div>
</div>

<script>
    function applyFilter() {
        var value = document.getElementById('text_filter').value;
        var url = new URL(window.location.href);
        url.searchParams.set('{{ $filter->name }}', value);
        window.location.href = url.toString();
    }
</script>
