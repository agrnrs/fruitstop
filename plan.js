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

index/products
	-nav top (prob home, types sorts)
	-product list sort type->alphdesc
	-login page link
login
	-login stuf
	-notification of status
edit *add/upd/del products +display relevant +list types
	-product list, select product by id num, action buttons
	-logout button
db_connect
	-to new db
ajax?


functions in a separate file in /inc/

stuff to get from database
-all info, incl id
-all other info used for display
-id used to make edit/remove request

functions:
-on this id
	-replace data with this new data
	-or remove entirely
-new entry
	-add all info, id automatically

if necessary, add a copy of the database or an sql command to recreate it to repo

*/