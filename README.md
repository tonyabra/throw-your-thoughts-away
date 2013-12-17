throw-your-thoughts-away
========================

"Throw your thoughts away" was an interactive installation at the Merchandise Mart that I created for Chicago's Art Loop Open in 2011. The idea was to help people clear their minds by visually disposing of a thought or memory. When a viewer sent a text message to the telephone number on the piece, little scraps of garbage swooped into view, spelled out the viewer's message, and then scattered away.

This git contains the front-end of the piece. Here's an outline:

The images directory contains .png files of trash scraps. These are assembled into letter shapes using letters.php. The animations of the trash blowing are handled via CSS3. 

The SQLite file contains the text messages. It was populated by a Java backend that operated a cell modem for the telephone number.

index.html is the entrance to the piece. It was what I ran when I started the piece in the morning. It will load stage.php, which pulls a random text from the database to display on screen. Stage.php will reload with random texts. If a new text arrives in the database, it will display it as the next message before returning to a random selection. 

You can read more about this piece in my portfolio: http://aplot.com/portfolio
