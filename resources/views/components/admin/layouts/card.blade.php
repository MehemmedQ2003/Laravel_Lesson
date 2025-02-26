<div {{ $attributes->class("card text-center") }}>
    @if(isset($title))
        <div class="card-header">
            <h3>{{ $title }}</h3>
        </div>
    @endif
    @if(isset($content))
        <div class="card-body">
            {{ $content }}
        </div>
    @endif
    @if(isset($footer))
        <div class="card-footer">
            {{ $footer }}
        </div>
    @endif
</div>
