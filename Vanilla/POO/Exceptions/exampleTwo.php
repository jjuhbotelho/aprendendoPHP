<?php

class Video
{

}

class User
{
    public function download(Video $video)
    {
        if (!$this->subscribed()) {
            throw new Exception('Você deve estar inscrito para baixar os videos');
        }

    }

    public function subscribed()
    {
        return false;
    }
}

class UserDownloadsController
{
    public function show()
    {
        try{

            (new User)->download(new Video);
        }catch (Exception $e){
            echo 'Deu não';
        }
    }
}

(new User)->download(new Video());