<?php

//code1:


/*

class Post
{
    use Shareable;

}


class Comment
{

}


trait Shareable
{
    public function share()
    {
        echo "Shared";
    }
}


$post = new Post();
$post->share();


*/


//code2:

/*


class Post
{
    use Shareable;

}


class Comment
{
    use Shareable;

}


trait Shareable
{
    public function share()
    {
        echo "Shared successfully \n";
    }
}


$post = new Post();
$post->share();


$comment = new Comment();
$comment->share();


*/


//code3:


class Post
{
    use Shareable, Likeable;

}


class Comment
{
    use Shareable;

}


trait Shareable
{
    public function share()
    {
        echo "Shared successfully \n";
    }
}

trait likeable
{
    public function like()
    {
        echo "Liked successfully \n";
    }
}


$post = new Post();
$post->share();
$post->like();


$comment = new Comment();
