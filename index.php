<?php
/**
 * 
 * 
 * 
 */

class Movie{

    private $title;
    private $director;
    private $category;
    private $duration;

    function __construct($_title,$_director,$_category,$_duration)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->category = $_category;
        $this->duration = $_duration;
    }

    /**
     *
     * Get title from movie 
     *
     * @return $title   
     *
    */
    public function GetTitle(){
        return $this->title;
    }

    /**
     *
     * Get Director from movie 
     *
     * @return $director   
     *
    */
    public function GetDirector(){
        return $this->director;
    }

    /**
     *
     * Get category from movie 
     *
     * @return $category   
     *
    */
    public function GetCategory(){
        return $this->category;
    }
    
     /**
     *
     * Get duration from movie 
     *
     * @return $duration   
     *
    */
    public function GetDuration(){
        return $this->duration;
    } 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movie</title>
</head>
<body>
    <?php
            $films = [];
            $films[] = new Movie("Ritorno al futuro","io","action","180");
            $films[] = new Movie("Io sono leggenda","io","drama","60");
            $films[] = new Movie("Rambo","Topolino","adventure","120")
    ?>
    <h1>Film</h1>
    <ol>
        <?php
            foreach($films as $film)
            {
        ?>
        <li>
            <?php
                echo $film->GetTitle();
            ?>
            <ul>
                <li>
                <?php
                    echo 'Regista - '.$film->GetDirector();
                ?>
                </li>
                <li>
                <?php
                    echo 'Genere - '.$film->GetCategory();
                ?>
                </li>
                <li>
                <?php
                    echo 'Durata - '.$film->GetDuration().' minuti';
                ?>
                </li>
            </ul>
            
        </li>
        <?php
        }
        ?>
    </ol>



</body>
</html>