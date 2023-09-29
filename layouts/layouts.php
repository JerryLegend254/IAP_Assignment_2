<?php
class layouts
{
    public function header()
    {
?>
        <!doctype html>
        <html>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://cdn.tailwindcss.com"></script>
        </head>

        <body class="flex flex-col h-screen">

        <?php
    }
    public function nav()
    {
        ?>
            <nav class="flex bg-blue-500 text-blue-100 justify-between items-center p-4">
                <p class="uppercase tracking-widest text-2xl font-bold text-blue-100">Jeremy</p>
                <ul class="flex justify-between space-x-6">
                    <li><a href="view_articles.php" class="font-semibold">View Articles</a></li>
                    <li><a href="add_article.php" class="font-semibold">Add Articles</a></li>
                </ul>
            </nav>
        <?php
    }
    public function footer()
    {
        ?>
            </main>
            <footer class="py-2 flex items-center bg-yellow-600 justify-center text-yellow-100 font-bold">Copyright &copy; Jeremy 2023</footer>
        </body>

        </html>

<?php

    }
}
