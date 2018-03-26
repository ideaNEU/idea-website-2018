
# The IDEA Website
This is WordPress website with our custom theme also included. Most changes are made through the WordPress admin, but any theme or plugin changes should be handled here.

## Running Locally
If you have PHP and a local server on your computer, you can run the website locally. [This](https://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP) is a solid article on getting setup on a Mac. You'll need a copy of the database, ask a member of the tech team to help.

To install development requirements run:
```
cd wp-content/themes/idea-theme/; npm install
```

## Developing
Styles are partially plain CSS files and partially generated through SASS. 
To set it up, run:
```
cd wp-content/themes/idea/; npm i
```

To compile SASS files as you work, run:
```
cd wp-content/themes/idea/; gulp
```

## Contributing
Put up a PR and it'll get reviewed and pushed.
