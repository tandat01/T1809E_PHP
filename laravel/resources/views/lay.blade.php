<!doctype html>
<html lang="en">
@include("h1")
<body>
@include("panel")
<div id="right-panel" class="right-panel">
    @include("he1")

    <div class="col-xs-6 col-xs-offset-3">
        @yield("main_content")
    </div>
@yield("popup")

@include("j")
@include("sc")
</body>
</html>