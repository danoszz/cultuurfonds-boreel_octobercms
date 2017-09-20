<?php 
class Cms59c279426d2f6898041408_77bbe0113e2fd47632bf5b39401fe7e6Class extends \Cms\Classes\PageCode
{
public function onEnd()
{
  
    // Optional - set the page title to the post title
    if (isset($this->post))
        $this->page->title = $this->post->title;
}
}
