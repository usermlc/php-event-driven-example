<?php
// index.php

require __DIR__ . '/events/Event.php';
require __DIR__ . '/events/EventDispatcher.php';

// Створення диспетчера подій
$dispatcher = new EventDispatcher();

// Обробник 1: оновлення таблиці результатів
$updateScoreboardHandler = function ($event) {
    echo "[{$event->getTimestamp()}] Оновлено таблицю результатів: гравець {$event->getPlayerName()} з команди {$event->getTeamName()} забив гол!\n";
};

// Обробник 2: відображення анімації голу
$displayGoalAnimationHandler = function ($event) {
    echo "[{$event->getTimestamp()}] Відображення анімації голу: гравець {$event->getPlayerName()} з команди {$event->getTeamName()} забив гол!\n";
};

// Обробник 3: оновлення статистики матчу
$updateMatchStatisticsHandler = function ($event) {
    echo "[{$event->getTimestamp()}] Оновлено статистику матчу #{$event->getMatchId()}: " . json_encode($event->getStatistics()) . "\n";
};

// Реєстрація обробників для подій
$dispatcher->addListener(GoalScoredEvent::class, $updateScoreboardHandler);
$dispatcher->addListener(GoalScoredEvent::class, $displayGoalAnimationHandler);
$dispatcher->addListener(MatchStatisticsUpdatedEvent::class, $updateMatchStatisticsHandler);

// Симуляція події: гол забито
$goalEvent = new GoalScoredEvent("Іван Іванов", "Динамо Київ");
$dispatcher->dispatch($goalEvent);

// Симуляція події: оновлено статистику матчу
$statisticsEvent = new MatchStatisticsUpdatedEvent(1, ['goals' => 2, 'possession' => '60%']);
$dispatcher->dispatch($statisticsEvent);