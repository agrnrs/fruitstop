/*

tables:

types table:
id -int2 ai !null, type -varchar/text
type: fruit, vegetable, berry, other

product table:
id -int4 ai !null
product -varchar/text
type (via types table) -int2
price -numeric w 2dec


//////////////////////////

pages:

index/login
	-login stuf
	-notification of status
	-all other pages kick user to login unless cookies say they're ok
products
	-options to add/edit/remove; add as separate link, edit/remove as links in product info box
	-nav top (prob home, types sorts)
	-product list sort type->alphdesc
	-logout button
edit *add/upd/del products +display relevant +list types
	-product list, select product by id num, action buttons
	-logout button
db_connect
	-to new db
ajax?

localstorage/cookies to remember access to internal site, otherwise kicks user back to login page
-so everywhere an if cookies=ok check

functions in a separate file in /inc/

stuff to get from database
-all info, incl id
-all other info used for display
-id used to make edit/remove request
-other info populates fields for edit/update

functions:
-get all the info
	-display it
-on this id
	-replace data with this new data
	-or remove entirely
-new entry
	-user adds all other info, id automatically

add to repo a copy of the database or an sql command to recreate the database
sometimes the tools prodivded are insufficient for the task so a new setup might be required
a quick way to achieve that would be nice to have

*/