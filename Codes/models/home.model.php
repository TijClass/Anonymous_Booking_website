<?php

class Home{
    private $id;
    private $thumbnail_id;
    private $adress;
    private $rooms;
    private $surface;
    private $price;
    private $title;
    private $images_id;
    private $agent_id;
    private $created_at;
    private $updated_at;


    public function __construct(){

    }

    public function get($id){
        $con = new DB();
        $con->prepare("SELECT * FROM homes WHERE id=:id LIMIT 1");
        $con->bindParam(":id",$id,"INT");
        if($con->execute()){
            $Home = $con->fetchAll("OBJ")[0]; 
            $this->$id = $Home->id;
            $this->$id = $Home->id ;
            $this->$thumbnail_id = $Home->thumbnail_id ;
            $this->$adress = $Home->adress ;
            $this->$rooms = $Home->rooms ;
            $this->$surface = $Home->surface ;
            $this->$price = $Home->price ;
            $this->$title = $Home->title ;
            $this->$images_id = $Home->images_id ;
            $this->$agent_id = $Home->agent_id ;
            $this->$created_at = $Home->created_at ;
            $this->$updated_at = $Home->updated_at ;
        }else{
            return false;
        }
    }
    public function all(){

    }

    public function save(){

    }
}