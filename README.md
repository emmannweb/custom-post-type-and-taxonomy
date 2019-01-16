# Custom post type and Taxonomy for music.

### Explanation

As you may know, Wordpress let you add your own custom post type according to your need.
In our example, we choose Music.
we could choose another field like movies, meals and so on..
now we wanna have all musics to register in the wordpress database, it's what the custom post type has done for us.

But there's a problem, if we want to display our music by genre like jazz, classic, rap, R&B and so on... now comes the necessity to have
a taxonomy. let's make it simple.. a taxonomy is just a way to group a certain type of music in our example.

To proceed we create a PHP function name "create_music_function" and its labels (the labels are what the user gonna see in the screen, in 
 the wordpress dashboard).
in the code where you see "register_post_type", we named our post type musics.

we created inside the function, the taxonomy to categorize our musics; where you see "register_taxonomy" and we gave it a name
"music_category"

where you see.. 'rewrite' => array('slug'=>... ) is what you gonna see in both case in the url .

Finally, we used a hook "init" to initialize our custom post type.

### Flexibility

To use it, you just need to copy the entire code in your wordpress functions.php file or you can use it as a plugin also.

#### If do not understand totally, you may leave a question.. and make some lecture in wordpress codex
