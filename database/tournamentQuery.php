<?php
// Tournament.php

require_once 'connection.php'; // Include the database connection

class Tournament
{
    private $mysqli;

    public function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }

    // Fetch tournament by ID
    public function getTournamentById($id)
    {
        $sql = "SELECT * FROM tournaments WHERE id = ?";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $tournament = $result->fetch_assoc();
        $stmt->close();
        return $tournament;
    }

    public function changeTournamentSpacesCount($tournament_id)
    {
        $sql = "UPDATE tournaments SET spaces_left = spaces_left - 1 WHERE id = ? AND spaces_left > 0";
        $stmt = $this->mysqli->prepare($sql);
        $stmt->bind_param('i', $tournament_id);
        $stmt->execute();
        $stmt->close();
        return;
    }



    // Get all tournaments
    public function getAllTournaments()
    {
        $sql = "SELECT * FROM tournaments";
        $result = $this->mysqli->query($sql);
        $tournaments = $result->fetch_all(MYSQLI_ASSOC);
        $result->free();
        return $tournaments;
    }
}
?>