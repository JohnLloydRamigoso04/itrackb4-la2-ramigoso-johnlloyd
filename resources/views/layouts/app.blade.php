<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Game Vault</title>
    <!-- Bootstrap 5 CSS (Part E) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navigation Partial (Part D) -->
    @include('partials._nav')

    <div class="container pb-5">
        <!-- Site Heading & Student Name (Part A) -->
        <header class="mb-4 p-3 bg-white rounded shadow-sm">
            <h1 id="site-heading" class="h3 text-primary mb-1">🎮 Game Vault Portal - INHERITANCE TEST</h1>
            <p class="text-muted mb-0"><small>Prepared by: JOHN LLOYD R. RAMIGOSO | Block 4C</small></p>
        </header>

        <!-- Dynamic Content (Part A) -->
        <main>
            @yield('content')
        </main>
    </div>

</body>
</html>