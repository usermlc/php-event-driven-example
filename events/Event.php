<?php
// events/Event.php

// Базовий клас події
abstract class Event
{
    protected $timestamp;

    public function __construct()
    {
        $this->timestamp = date('Y-m-d H:i:s');
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }
}

// Подія: гол забито
class GoalScoredEvent extends Event
{
    private $playerName;
    private $teamName;

    public function __construct($playerName, $teamName)
    {
        parent::__construct();
        $this->playerName = $playerName;
        $this->teamName = $teamName;
    }

    public function getPlayerName()
    {
        return $this->playerName;
    }

    public function getTeamName()
    {
        return $this->teamName;
    }
}

// Подія: оновлено статистику матчу
class MatchStatisticsUpdatedEvent extends Event
{
    private $matchId;
    private $statistics;

    public function __construct($matchId, $statistics)
    {
        parent::__construct();
        $this->matchId = $matchId;
        $this->statistics = $statistics;
    }

    public function getMatchId()
    {
        return $this->matchId;
    }

    public function getStatistics()
    {
        return $this->statistics;
    }
}