<!-- Main Footer -->
<footer class="main-footer">
    {{$slot}}
    <div class="float-right d-none d-sm-inline-block">
        @isset($app_version)
            {{$app_version}}
        @endisset
    </div>
</footer>