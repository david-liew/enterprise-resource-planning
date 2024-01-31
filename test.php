<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show/Hide Example</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <button id="toggleButton" class="btn btn-primary">Toggle Visibility</button>
        <div id="content" class="mt-3">
            <p>This is the content you want to show/hide.</p>
        </div>
    </div>

    <!-- Bootstrap JS (popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Wait for the DOM to be ready
        document.addEventListener('DOMContentLoaded', function () {
            // Get references to the button and content elements
            var toggleButton = document.getElementById('toggleButton');
            var content = document.getElementById('content');

            // Add a click event listener to the button
            toggleButton.addEventListener('click', function () {
                // Toggle the visibility of the content
                if (content.style.display === 'none' || content.style.display === '') {
                    content.style.display = 'block';
                } else {
                    content.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
