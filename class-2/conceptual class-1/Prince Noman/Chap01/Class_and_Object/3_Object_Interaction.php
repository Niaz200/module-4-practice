<?php


//code1:

/*

class Song
{
    // Create songId and title public properties
    public $songId;
    public $title;
}

// Instantiate an "Numb" song using the new keyword
$numb         = new Song();
$numb->songId = 1;
$numb->title  = 'Numb';


print_r( $numb );

*/


//code2:

/*

class Song
{
    // Create songId and title public properties
    public $songId;
    public $title;
}

// Instantiate an "Numb" song using the new keyword
$numb         = new Song();
$numb->songId = 1;
$numb->title  = 'Numb';

echo $numb->title;

*/


//code3:

class Song
{
    // Create songId and title public properties
    public $songId;
    public $title;
}

// Instantiate an "Numb" song using the new keyword
$numb         = new Song();
$numb->songId = 1;
$numb->title  = 'Numb';



//Composition -> When we use another class's object inside another class as property.

class Playlist
{
    public $name;
    public $songs = [];

    public function addSong( $song )
    {
        $this->songs[] = $song;
    }
}

$rockPlaylist       = new Playlist();
$rockPlaylist->name = 'Rock';
$rockPlaylist->addSong( $numb );
print_r( $rockPlaylist );

//Task
//Create your favorite song
//Set songId and title
//Add song to the playlist
//Print the song

