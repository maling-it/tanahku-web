<x-app-layout>
    <div class="card p-2 m-2" data-bs-theme="light" data-bs-core="modern">
        <div id="swagger-ui"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/swagger-ui/5.11.8/swagger-ui.css" integrity="sha512-ycnSmYVRkrg4YI0l+PGQy8hjupRbZElWaFMp9wO11Gy2SsCVNexEyNF0GFPkOY97zdkXgO7fTY7TcWJamvz2gw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/swagger-ui/4.0.0/swagger-ui-bundle.js"></script>
    <script>
        $(document).ready(function() {
            $.getJSON("/docs/json", function(data) {
                const ui = SwaggerUIBundle({
                    spec: data,
                    dom_id: '#swagger-ui',
                    deepLinking: true,
                    presets: [
                        SwaggerUIBundle.presets.apis,
                        SwaggerUIBundle.SwaggerUIStandalonePreset
                    ],
                    plugins: [
                        SwaggerUIBundle.plugins.DownloadUrl
                    ],
                    layout: "BaseLayout",
                });
            });
        });
    </script>
</x-app-layout>
