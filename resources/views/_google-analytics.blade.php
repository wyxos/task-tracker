@if(app()->environment('production') && config('services.google.analytics'))
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
            src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google.analytics') }}"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', {{ config('services.google.analytics') }});
    </script>
@endif
