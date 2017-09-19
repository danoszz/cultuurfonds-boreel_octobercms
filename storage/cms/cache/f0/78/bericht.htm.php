<?php 
class Cms59c1850221780678841926_698b2afbbb86e2efbcac8f07b3024c9aClass extends \Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
        $this->page->title = $this->post->title;
}
}
