# Strategy
## Definition
The **Strategy** pattern finds families of algorithms (a feature that may vary from one child class to another), encapsulates each of them  and guarantees interoperability. It allows to modify algorithms, independeltly of their usage on the clients side

### Questions
1. In current implementation, we explicitly create an instances of behavior classes inside constructor functions, I think it is better to use dependency injection, even though we may change the behavior using setter methods
2. I believe that if we will create a **IronDuck** or a **GlassDuck**, we may encounter some problems with the *swim* method (as iron duck cannot swim), so it might be better to incapulate it to a behavior too.
