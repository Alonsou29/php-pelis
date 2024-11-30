<?php 
declare(strict_types=1);

class next_movie{

    public function __construct(
        private string $title,
        private int $days_until,
        private string $following_production,
        private string $release_date,
        private string $poster_url,
        private string $overview

    )
    {       
    }

    public function get_until_message(): string{
        $days = $this->days_until;
        return match(true){
            $days === 0 => "HOY SE ESTRENA PERRO",
            $days < 10  => "Ya falta muy poco!",
            $days < 30  => "Hay que esperar un poco :c",
            $days < 60  => "Falta mas de un mes y medio :(",
            default     => "Mejor sigue esperando estos $days dias  ...",
        };
    }

    public static function fetch(string $api_url): next_movie {
        $rs = file_get_contents($api_url);
        $data = json_decode($rs, true);

        return new self(
            $data["title"],
            $data["days_until"],
            $data["following_production"]["title"] ?? "No hay por los momentos",
            $data["release_date"],
            $data["poster_url"],
            $data["overview"],
        );
    }

    public function get_data(){
        return get_object_vars($this);
    }
}


?>