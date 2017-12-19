# Problems
1. In current implementation (using **inheritance**) we have to override child classes methods, 
in order to achieve desired behavior. 
For example **RubberDuck** makes different (from real ducks) sounds.
2. When we already have some child classes, and we add a new feature (ability to fly for example), 
then we might need to modify some of child classes (like **RubberDuck**), 
that cannot perform new activity by its nature. And if we forgot doing this, 
we might end up with flying rubber ducks.
3. We cannot modify the behavior during execution time, for example we have a game,
where a **WoodenDuck** can use a reactive engine to fly.
4. As a result of the reasons above we have to duplicate the code in child classes
