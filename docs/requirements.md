# Laravel Lemonade Stand

A version of the classic video game coded in Laravel.

## Game Play - MVP

1. Default to game length of 14 days.

2. Game starts on day 1. 

3. Each day, the application generates a weather report.

4. Each day, the player chooses how many of each resource to purchase and the cost they will charge for lemonade that day. 

5. When purchases are complete, the application generates a sales report for the day.

6. The sales report is displayed, and the player is prompted to continue to the next day. 

7. A running total of available resources is kept throughout the game. 

8. The game ends after day 14 is complete. 

9. The application remembers all completed games and lists the ten highest scores. 

10. A game's score is the amount of money available after day 14. 

11. Standard lemonade recipe: 

	Makes 20 Servings: 
		* 1.75 cups of sugar
		* 24 tb lemon juice (12 lemons)
		* 8 c water
		* 2 lb of ice

12. Resources:
	
	* Ice 
		- expires every day
		- sold by the pound
		- costs $0.50
		- makes 10 servings
	* Sugar 
		- carries over to next day
		- sold by the bag (4 lbs)
		- costs $2.00
		- makes 16 servings
	* Lemons - carry over to next day
		- carry over to next day
		- sold individually
		- cost $.10
		- makes 5/6 servings
	* Paper Cups 
		- carry over to next day
		- sold in packs of 20
		- cost in $1.00
		- makes 20 servings

	* Signs 
		- expire every day 
		- made individually 
		- cost $.25

13. Starting money: $5.00

14. Weather is given as conditions and temperature. 

15. Conditions: 

	* 5% - Hot and Dry  - Sales go up
	* 10% - Hot		- Sales go up (but not as much)
	* 50% - Sunny   - Normal
	* 10% - Windy	- Sales go down a little
	* 10% - Cloudy	- Sales go down a little more
	* 10% - Rainy	- Sales go down
	* 5% - Thunderstorms	- Are you kidding me?

16. Temperature: Each condition has a base temperature which is modified by a 3d6 (6 sided die rolled three times) roll.
	
	* 90 - Hot and dry
	* 80 - Hot
	* 75 - Sunny
	* 70 - Windy
	* 70 - Cloudy
	* 70 - Rainy
	* 70 - Thunderstorms

17. Things that affect sales:

	* Conditions
	* Temperature
	* Number of Signs
	* Price

18. Players can't borrow money from mom and dad. Game ends if player is reduced to $0. 

19. Game provides summary report at end of game. 

## Future Enhancements

1. Bugs in sugar

2. Lemons go bad!

3. Customize recipe

4. Kool Aid option











