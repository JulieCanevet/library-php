# library-php
Application that allows a librarian to manage his book catalog as well as loans and renderings. 
The application will:
- View the list of books in the catalog and their status (available or loaned)
- View a list of all registered users in the system and their personal information
- Add a book to the catalog
- Sort the books according to their category thanks to a dropdown (for example: novel, poetry, adventure ...). When the user clicks on one category, the category the page displays only the books about.
- Access the descriptive card of each book recorded in DB
- change the status of each book from available to loaned and loaned to available. When a book is lent the librarian indicates the unique identification number of the user in order to know who borrowed what. When we return to the description of the book it now shows the information of the book as well as those of the user who borrowed it
