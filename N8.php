!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Fetcher</title>
</head>
<body>

    <h1>Enter a URL to Fetch its Contents</h1>

    <!-- Search Bar Form -->
    <form action="" method="GET">
        <label for="url">Enter URL:</label>
        <input type="text" id="url" name="url" placeholder="http://example.com" required>
        <button type="submit">Fetch</button>
    </form>

    <?php
    // Check if a URL is provided through the GET method
    if (isset($_GET['url'])) {
        // Get the URL entered by the user
        $url = $_GET['url'];

        // Validate the URL to make sure it's properly formatted
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            // Fetch the contents of the URL
            $contents = file_get_contents($url);

            // Display the contents of the URL
            echo "<h2>Contents of $url</h2>";
            echo "<div style='white-space: pre-wrap; word-wrap: break-word;'>" . htmlentities($contents) . "</div>";
        } else {
            echo "<p style='color: red;'>Please enter a valid URL.</p>";
        }
    } else {
        echo "<p>Enter a URL above to fetch its contents.</p>";
    }
    ?>

</body>
</html>
