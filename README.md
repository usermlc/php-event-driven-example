# PHP Event-Driven Example

This is a simple PHP project demonstrating the implementation of an event-driven architecture. It includes basic events, an event dispatcher, and handlers to react to those events.

## Project Structure

```
/project
│
├── events/             # Folder for event-related classes
│   ├── Event.php       # Base event class and specific events
│   └── EventDispatcher.php # Event dispatcher
│
└── index.php          # Main file to run the program
```

## Events

- **GoalScoredEvent**: Triggered when a goal is scored.
- **MatchStatisticsUpdatedEvent**: Triggered when match statistics are updated.

## Event Handlers

- **UpdateScoreboardHandler**: Updates the scoreboard when a goal is scored.
- **DisplayGoalAnimationHandler**: Displays a goal animation when a goal is scored.
- **UpdateMatchStatisticsHandler**: Updates match statistics when they change.

## Example Output

```
[2025-10-25 14:30:00] Updated scoreboard: Player Іван Іванов from team Динамо Київ scored a goal!
[2025-10-25 14:30:00] Displaying goal animation: Player Іван Іванов from team Динамо Київ scored a goal!
[2025-10-25 14:30:00] Updated match statistics for match #1: {"goals":2,"possession":"60%"}
```

## License

This project is open-source and available under the [MIT License](LICENSE).
