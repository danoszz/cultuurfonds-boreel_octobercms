<?php 
class Cms59c2483e49122040116623_48b9044357a8a157ce7f4760f6e6c1a5Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
    // Optional - set the page title to the post title
    if (isset($this->post))
        $this->page->title = $this->post->title;
}
}
