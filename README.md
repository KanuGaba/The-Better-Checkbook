Helpster
"The better checkbook"
By Kanu Gaba and Shiraz Chokshi

How to use:
    1. Create an account, inputting the amount of money you currently have.
    2. Login using your credentials.
    3. Use the app like a normal checkbook, entering the amount of money you earned or lost, along with reasons why.
    4. You can now view your history through a visual representation shown in two graphs.
    
How we made it:
    We created our own login system because we wanted an easy way to store and remember data when the user logged in. We used sqlite to store the
users login information in a 'users' table and then stored the users personal information in a table named after their username. Initially, the only
data point stored upon creation is the totalmoney data point. The user then logs in with his or her credentials and begins the checkbook keeping
process. Here the user inputs if they increased or decreased their total money, by how much, why, and what they used/recieved it for. This information
is then stored in the table named after the user's username. The data can then be viewed in graph form, which was creating using charts.js. This is a 
more efficient way to utilise a checkbook so that one can visually see where they are spending too much and keep track of other information.