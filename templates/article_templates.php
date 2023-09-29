<?php

function sliceString($str)
{
    if (strlen($str) <= 63) {
        return $str;
    } else {
        $slicedString = substr($str, 0, 60);
        return $slicedString . "...";
    }
};

class article_templates
{


    public function add_article_form()
    {
?>
        <main class="flex grow bg-blue-100 justify-center items-center">
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
    <?php
    }
    public function view_articles($articles)
    {
    ?>
        <main class="grow bg-blue-100 px-4">
            <h1>Blogs</h1>
            <div class="grid grid-cols-5 gap-6">
                <?php
                foreach($articles as $article){
                    ?>
                    <div class="bg-blue-700 w-[200px] h-[160px] rounded-lg p-2 text-blue-200 space-y-4">
                    <p class="font-bold uppercase tracking-wider"><?= $article['article_title'] ?></p>
                    <div class="relative flex flex-col h-2/3">
                        <p class="capitalize"><?= sliceString($article['article_body']) ?></p>
                        <p class="text-xs absolute bottom-0 right-0"><?= $article['created_at'] ?>
                    </div>
                </div>
                
               <?php }?>
                
            </div>

        </main>
<?php
    }
}
