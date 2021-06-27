

## Install

- Clone repo for this project locally.
- Install Composer Dependencies.
- Create new databsae and import bus2.sql to it.
- Add database information to .env file.



## Admin Panel

[baseUrl]/admin/dashboard

credentials:

email : admin@admin.com

password : 12345678


## API

[API documentation.](https://documenter.getpostman.com/view/13402343/Tzedi5CU).
https://documenter.getpostman.com/view/13402343/Tzedi5CU

change http://local/roubsta_task/bus/ to your baseUrl.


## Scenarios

In Admin Side:

-We create predefined lines between each station and the next.

-We create predefined trips between stations, these trips contain predefined lines.
For example: a trip between A and D contains lines A-B, B-C and C-D, respectively.

-When creating a new scheduled trip,we select a predefined trip, bus and trip name, then the available seats for the trip are automatically created according to the number of seats on the bus with uniqe id, each seat is divided into a number of reservations based on the predefined lines between the start station and the end station.

-Ticket can contain one or more reservations, depending on the lines between the starting station and the ending station entered in the ticket, and this does not appear on the user side.

In API:

-When searching for available seats between the starting station and the ending station, in the first we will search for available reservations that contain the same start station and available reservations that contain the same end station and the seat ID is identical, and then in the second stage with the meaning of the predefined lines we will make sure that Reservations between the starting point and the ending point of the same seat Id are available.. then the seat is considered available from the starting station to the entrance end station.

-When booking, enter seat ID from the available seats and start station and end station previously specified, then the reservations between the start and end station for this seat are transferred to unavailable, and then the ticket is created containing trip number, bus number and seat number.

