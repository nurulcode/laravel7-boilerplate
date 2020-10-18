<div class="row justify-content-center">
    <div class="{{ $col1 }}">
        <div class="card">
            <div class="card-body">
                {{ $slot1 ?? '' }}
            </div>
        </div>
    </div>
    <div class="{{ $col2 }}">
        <div class="card">
            <div class="card-body">
                {{ $slot2 ?? ''}}
            </div>
        </div>
    </div>
</div>
