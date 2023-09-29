<?php
    require_once "ClassAutoLoad.php";
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col h-screen">
    <nav class="flex bg-blue-500 text-blue-100 justify-between items-center p-4">
        <p class="uppercase tracking-widest text-2xl font-bold text-blue-100">Jeremy</p>
        <ul class="flex justify-between space-x-6">
            <li><a href="view_articles.php" class="font-semibold">View Articles</a></li>
            <li><a href="#" class="font-semibold">Add Articles</a></li>
        </ul>
    </nav>
    <main class="flex h-5/6 bg-blue-100 justify-center items-center">
        <form method="POST" class="flex flex-col w-[300px] sm:w-[360px] bg-blue-500 px-6 py-4 rounded-xl justify-center space-y-4">
            <div class="flex flex-col space-y-2">
                <label for="author_id" class="text-stone-200 font-bold">Author ID#</label>
                <input type="number" name="author_id" class="rounded" />
            </div>
            <div class="flex flex-col space-y-2">
                <label for="article_title" class="text-stone-200 font-bold">Title</label>
                <input type="text" name="article_title" class="rounded" />
            </div>
            <div class="flex flex-col space-y-2">
                <label for="article_body" class="text-stone-200 font-bold">Body</label>
                <textarea name="article_body" class="rounded" rows="5"></textarea>
            </div>
            <div class="flex flex-end w-full">
                <button name="add_article" type="submit" class="bg-violet-700 py-1 px-4 text-violet-100 rounded font-semibold flex-end">Add my article</button>
            </div>
        </form>
    </main>
    <footer class="py-4 flex items-center bg-yellow-600 justify-center text-yellow-100 font-bold">Copyright &copy; Jeremy 2023</footer>
</body>

</html>